<?php
namespace app\controllers;

use app\models\Blog;
use app\models\BlogHasImage;
use app\models\User;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return Blog::getLastest();
    }

    public function actionView(int $id)
    {
        $blog = Blog::find()->where(['id' => $id])->one();
        return $this->render('view', $id);
    }

    public function actionCreate()
    {
        //TODO:
    }

    public function actionUpdate()
    {
        //TODO:
    }

    public function actionDelete(int $id)
    {
        return Blog::find()->where(['id' => $id])->delete();
    }

}
