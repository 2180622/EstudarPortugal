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
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            return $this->goBack();
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

    public function GetNotifications(){
        if(Yii::$app->user->isGest){
            return null;
        }
        /****************************** NOTIFICAÇÕES PARA EVENTOS *******************************/
        $modelAgenda = new Agenda();
        $Agendas = null;
        if(Yii::$app->user->identity->tipo == 'admin' && Yii::$app->user->identity->idAdmin != null){
            $Agendas = $modelAgenda->find()->where('idAdmin = '.Yii::$app->user->identity->idAdmin.' or visibilidade = 1')->orderBy('dataInicio')->all();
        }
        if(Yii::$app->user->identity->tipo == 'agente' && Yii::$app->user->identity->idAgente != null){
            $Agendas = $modelAgenda->find()->where('idAgente = '.Yii::$app->user->identity->idAgente.' or visibilidade = 1')->all();
        }
        /**************************** NOTIFICAÇÕES PARA ANIVERSARIOS ****************************/
        $modelAdmin = new Administrador();
        $modelAgente = new Agente();
        $modelCliente = new Cliente();
        $Agentes = $modelAgente->find()->where('dayofmonth(dataNasc) = dayofmonth(CURRENT_DATE()) and month(dataNasc) = month(CURRENT_DATE()) and tipo like "Agente" and deleted_at = 0')->all();
        $Admins = $modelAdmin->find()->where('dayofmonth(dataNasc) = dayofmonth(CURRENT_DATE()) and month(dataNasc) = month(CURRENT_DATE()) and deleted_at = 0')->all();
        $Clientes = null;
        $Clients = $modelCliente->find()->where('dayofmonth(dataNasc) = dayofmonth(CURRENT_DATE()) and month(dataNasc) = month(CURRENT_DATE())')->all();
        if(Yii::$app->user->identity->tipo == 'admin' && Yii::$app->user->identity->idAdmin != null){
            $Clientes = $Clients;
        }
        if(Yii::$app->user->identity->tipo == 'agente' && Yii::$app->user->identity->idAgente != null){
            $SubAgentes = $modelAgente->find()->where('dayofmonth(dataNasc) = dayofmonth(CURRENT_DATE()) and month(dataNasc) = month(CURRENT_DATE()) and tipo like "Subagente" and deleted_at = 0')->all();
            $Produtos = Yii::$app->user->identity->getProdutos()->all();
            foreach($Produtos as $Produto){
                $ClienteRepetido = 0;
                $Cliente = $Produto->getIdCliente0()->one();
                foreach($Clients as $Cli){
                    if($Cliente == $Cli){
                        $repetido = 1;
                    }
                }
                if($repetido==0){
                    if($Clientes){
                        $Clientes[] = $Cliente;
                    }
                }
            }
        }
        if(Yii::$app->user->identity->tipo == 'cliente'){
            $Admins = null;
        }
        /*************************** NOTIFICAÇÕES PARA SEU ANIVERSARIO **************************/
        /*************************** NOTIFICAÇÕES PARA INICIO PRODUTOS **************************/
        /************************** NOTIFICAÇÕES PARA VENCIMENTO FASES **************************/
        /************************* NOTIFICAÇÕES PARA DOCUMENTOS EM FALTA ************************/
    }
}
