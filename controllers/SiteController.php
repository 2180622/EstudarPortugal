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
}
