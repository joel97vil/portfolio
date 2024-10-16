<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\Html;
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
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
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
     * Displays landing.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('landing');
    }

    /**
     * Displays home.
     *
     * @return string
     */
    public function actionHome(){
        return $this->render('home');
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->mailer->compose()
                    ->setFrom('admin@joelfaura.com')
                    ->setTo('joelfauram@gmail.com')
                    ->setSubject('Portfolio message | ' . $model->subject)
                    ->setHtmlBody(Html::encode($model->body))
                    ->send();
            Yii::$app->session->setFlash(Yii::t('app','Contact form successfully submitted'));

            return $this->refresh();
        }
    }

    /**
     * Sets the language of the webpage
     *
     * @return Response|string
     */
    public function actionChangeLanguage()
    {
        if(Yii::$app->request->get('lang') != null)
        {
            $language = Yii::$app->request->get('lang');
            Yii::$app->language = $language;
        }

        return $this->render('home');
    }
}
