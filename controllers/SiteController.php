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

    public function init()
    {
        parent::init();

        // Check if a language is set in the session or cookies, and apply it
        if ($lang = Yii::$app->session->get('language')) {
            Yii::$app->language = $lang;
        } elseif ($lang = Yii::$app->request->cookies->getValue('language')) {
            Yii::$app->language = $lang;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        // Yii::$app->session->setFlash(Yii::t('app','Something went wrong, try again later'));
        // return $this->render('landing');
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
     * Displays portfolio.
     *
     * @return string
     */
    public function actionPortfolio()
    {
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
        if ($model->load(Yii::$app->request->post()) /*&& $model->contact(Yii::$app->params['adminEmail'])*/) {
            try
            {
                Yii::$app->mailer->compose()
                    ->setFrom(Html::encode($model->email))
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setSubject('Portfolio message | ' . Html::encode($model->subject))
                    ->setHtmlBody(Html::encode($model->body))
                    ->send();
                Yii::$app->session->setFlash('success', Yii::t('app','Contact form successfully submitted'));
            }
            catch(Exception $ex)
            {
                //var_dump($ex->getMessage()); die();
                Yii::$app->session->setFlash('error', Yii::t('app','Something went wrong, try again later'));
                if (YII_ENV_DEV) { var_dump($ex->getMessage()); die(); }
            }
            finally
            {
                return $this->redirect('/portfolio');
            }
        }
        else{

        }
    }

    /**
     * Sets the language of the webpage
     *
     * @return Response|string
     */
    public function actionChangeLanguage($lang)
    {
        //Set application language
        Yii::$app->language = $lang;
        Yii::$app->session->set('language', $lang);

        //Store language in a cookie
        Yii::$app->response->cookies->add(new \yii\web\Cookie([
            'name' => 'language',
            'value' => $lang,
            'expire' => time() + 365 * 24 * 60 * 60, // Expires in 1 year
        ]));

        return $this->redirect('/portfolio');
    }

    public function actionDownload()
    {
        //Get filename and filepath
        $lang = Yii::$app->session->get('language', Yii::$app->language);
        $filePath = Yii::getAlias('@app/web/files') . "/JOEL_FAURA_v1_{$lang}.pdf";

        // Check if the file exists
        if (!file_exists($filePath)) {
            throw new \yii\web\NotFoundHttpException(Yii::t('app','Something went wrong on the file download, please try again later.'));
        }

        // Send the file as a download response
        return Yii::$app->response->sendFile($filePath, "file_{$lang}.pdf");
    }
}
