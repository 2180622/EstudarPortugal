<?php

namespace app\controllers;

use app\models\Administrador;
use app\models\SignupForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    /*public function beforeAction(){
      if ( parent::beforeAction ( $action ) ) {

           //change layout for error action after
           //checking for the error action name
           //so that the layout is set for errors only
          if ( $action->id == 'error' ) {
              $this->layout = '';
          }
          return true;
      }
    }*/


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */                                                 
    public function actionIndex()
    {
        $model = new LoginForm();

        if (Yii::$app->user->isGuest) {
            return $this->render('login', [
                'model' => $model,]);
        }

        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout= 'loginLayout';

        if (!Yii::$app->user->isGuest) {
            $this->layout= 'main';
            return $this->render('index');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $this->layout= 'main';
            return $this->render('index');
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            if($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('Success', 'Thanks for contacting us');
            }else{
                Yii::$app->session->setFlash('error', 'An error occurred');
            }

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionSignup()
    {
        $user = new User();
        $admin = new Administrador();

        if($user->load(Yii::$app->request->post()) && $admin->load(Yii::$app->request->post())){
            $user->setPassword($user->rawPassword);
            $user->tipo = "admin";
            $user->status = 10;
            //$user->created_at = date('Y-m-d');
            $user->generateAuthKey();
            $admin->dataNasc = "2000-10-10";
            if($user->validate() && $admin->validate()){
                $user->save();
                $admin->save();
                Yii::$app->mailer->compose()
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setFrom('andre.machad0@hotmail.com')
                    ->setTextBody('Thanks for Signing up!')
                    ->send();
                Yii::$app->session->setFlash('success', 'Utilizador registado com sucesso.');

                return $this->redirect('login');
            }

        }
        return $this->render('signup', [
            'user' => $user,
            'admin' => $admin,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    private function GetNotifications(){
        if(Yii::$app->user->isGest){
            return null;
        }
        $idNot = 0;
        $Notificacoes = null;
        /*************************** NOTIFICAÇÕES PARA SEU ANIVERSARIO **************************/
        $dataNasc = null;
        if(Yii::$app->user->identity->tipo == 'admin' && Yii::$app->user->identity->idAdmin != null){
            $Admin = Yii::$app->user->identity->getIdAdministrador0()->one();
            $dataNasc = new DateTime($Admin->dataNasc);
        }
        if(Yii::$app->user->identity->tipo == 'agente' && Yii::$app->user->identity->idAgente != null){
            $Agente = Yii::$app->user->identity->getIdAgente0()->one();
            $dataNasc = new DateTime($Agente->dataNasc);
        }
        if(Yii::$app->user->identity->tipo == 'cliente' && Yii::$app->user->identity->idCliente != null){
            $Cliente = Yii::$app->user->identity->getIdCliente0()->one();
            $dataNasc = new DateTime($Cliente->dataNasc);
        }
        $diff = $dataNasc->diff(new DateTime());
        if($diff->d == 0 && $diff->m == 0){
            $Assunto = 'PARABÉNS '.Yii::$app->user->identity->nome.' '.Yii::$app->user->identity->apelido;
            $Descricao = 'Hoje um ciclo de sua vida se finaliza e outro recomeça. Faça deste novo recomeço uma nova oportunidade para fazer tudo o que sempre sonhou! \nParabéns!';
            $idNot++;
            $Notificacoes = [
                'Id' => $idNot,
                'Tipo' => 'Aniversario',
                'Assunto' => $Assunto,
                'Descricao' => $Descricao,
                'DataLimite' => null,
                'DataInicio' => null,
            ];
        }        
        /*************************** NOTIFICAÇÕES PARA INICIO PRODUTOS **************************/

        /************************** NOTIFICAÇÕES PARA VENCIMENTO FASES **************************/
        if(Yii::$app->user->identity->tipo == 'agente'){
            $modelFases = new Fase();
            $Fases = null;
            $Assunto = 'Clientes com documentos ou pagamentos em atraso';
            $Descricao = null;
            $todasFases = $modelFases->find()->where('dataVencimento >= current_date() && dataVencimento <= current_date() + interval 7 day')->all();
            $agenteProdutos = Yii::$app->user->identity->getProdutos0()->all();
            if($agenteProdutos && $todasFases){
                foreach($agenteProdutos as $produto){
                    $fasesProduto = $produto->getFases()->all();
                    foreach($todasFases as $fase){
                        foreach($fasesProduto as $faseP){
                            if($faseP == $fase){
                                $DocsAcademicos = $fase->getDocAcademicos()->where('verificacao = 0')->all();
                                $DocsPessoais = $fase->getDocPessoals()->where('verificacao = 0')->all();
                                if(count($DocsAcademicos) >=1 || count($DocsAcademicos) >=1 || $fase->verificacaoPago == 0){
                                    if($Fases){
                                        $Fases[] = $fase;
                                    }else{
                                        $Fases = $fase;
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if($Fases){
                $Descricao = 'Clientes: ';
                foreach($Fases as $fase){
                    $produto = $fase->getIdProduto0()->one();
                    $cliente = $produto->getIdCliente0()->one();
                    $diff = (new DateTime($fase->dataVencimento))->diff(new DateTime());
                    $Descricao = $Descricao.'\n - '.$cliente->nome.' '.$cliente->apelido.' -> '.$diff->d.' dias';
                }
                $idNot++;
                $novaNot = [
                    'Id' => $idNot,
                    'Tipo' => 'Fases',
                    'Assunto' => $Assunto,
                    'Descricao' => $Descricao,
                    'DataLimite' => null,
                    'DataInicio' => null,
                ];
                if($Notificacoes){
                    $Notificacoes[] = $novaNot;
                }else{
                    $Notificacoes = $novaNot;
                }
            }
        }
        /******************* NOTIFICAÇÕES PARA DOCUMENTOS E PAGAMENTOS EM FALTA *****************/
        $FasesFalta = null;
        if(Yii::$app->user->identity->tipo == 'cliente'){
            $produtosCliente = Yii::$app->user->identity->getProdutos()->all();
            $fasesCliente = null;
            foreach($produtosCliente as $produto){
                $fasesProduto = $produto->getFases()->where('dataVencimento >= current_date() && dataVencimento <= current_date() + interval 14 day')->all();
                if($fasesProduto){
                    if($fasesCliente){
                        foreach($fasesProduto as $fase){
                            $fasesCliente[] = $fase;
                        }
                    }else{
                        $fasesCliente = $fasesProduto;
                    }
                }
            }
            if($fasesCliente){
                foreach($fasesCliente as $fase){
                    $falta = false;
                    $docsAcademicos = $fase->getDocAcademicos()->where('verificacao = 0')->all();
                    $docsPessoais = $fase->getDocPessoals()->where('verificacao = 0')->all();
                    if($fase->verificacaoPago = 0 || $docsAcademicos || $docsPessoais){
                        $falta = true;
                    }
                    if($falta){
                        if($FasesFalta){
                            $FasesFalta[] = $fase;
                        }else{
                            $FasesFalta = $fase;
                        }
                    }
                }
            }
        }
        if($FasesFalta){
            foreach($FasesFalta as $Fase){
                $DocsAcademicos = $Fase->getDocAcademicos()->where('verificacao = 0')->all();
                $DocsPessoais = $Fase->getDocPessoals()->where('verificacao = 0')->all();
                $novaNot = null;
                $Assunto = null;
                $Descricao = null;
                $diff = (new DateTime($Fase->dataVencimento))->diff(new DateTime());
                $DataLimite = 'Falta '.$diff->d.' dias';
                if($diff == 0){
                    $DataLimite = 'Só falta hoje';
                }
                $NumDocumentos = $NumDocumentos + count($DocsAcademicos) + count($DocsPessoais);
                if($Fase->verificacaoPago == 0 && $NumDocumentos >= 1){
                    $Assunto = 'Pagamento e documentos em Falta';
                    $Descricao = 'Pagamento em falta: \n - '.$Fase->descricao.' -> '.$Fase->valorFase.'€ \n\nDocumentos em Falta: \n - '.count($DocsAcademicos).' Documentos Académicos \n - '.count($DocsPessoais).' Documentos Pessoais';
                }else{
                    if($Fase->verificacaoPago == 0){
                        $Assunto = 'Pagamento em Falta';
                        $Descricao = 'Pagamento em falta: \n - '.$Fase->descricao.' -> '.$Fase->valorFase.'€';
                    }
                    if($NumDocumentos >= 1){
                        $Assunto = 'Documentos em Falta';
                        $Descricao = 'Documentos em Falta: \n - '.count($DocsAcademicos).' Documentos Académicos \n - '.count($DocsPessoais).' Documentos Pessoais';
                    }
                }
                if($Fase->verificacaoPago == 0 || $NumDocumentos >= 1){
                    $idNot++;
                    $novaNot = [
                        'Id' => $idNot,
                        'Tipo' => 'Falta',
                        'Assunto' => $Assunto,
                        'Descricao' => $Descricao,
                        'DataLimite' => $DataLimite,
                        'DataInicio' => null,
                    ];
                    if($Notificacoes){
                        $Notificacoes[] = $novaNot;
                    }else{
                        $Notificacoes = $novaNot;
                    }
                }
            }
        }
        return $Notificacoes;
    }
}
