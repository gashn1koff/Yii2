<?php

namespace app\controllers;

use app\models\Category;
use app\models\SendForm;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class DevController extends Controller
{
    public function actionIndex () {
        $model = SendForm::findOne(['id' => 4]);
        if ($model->load(\Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Данные проверены!');
            } else {
                Yii::$app->session->setFlash('error', 'Данные некорректные!');
            }
        }
        return $this->render('index', compact('model'));
    }

    public function actionShow() {
        $category = Category::find();
        $pagination = new Pagination([
            'defaultPageSize' => 50,
            'totalCount' => $category->count()
        ]);
        $categories = Category::findOne(['id' => 1]);
        return $this->render('show', compact('categories', 'pagination'));
    }
}