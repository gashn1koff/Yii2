<?php

namespace app\controllers;

use app\models\SendForm;
use Yii;

class DevController extends \yii\web\Controller
{
    public function actionIndex () {
        $model = new SendForm();
        if ($model->load(\Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Данные проверены!');
            } else {
                Yii::$app->session->setFlash('error', 'Данные некорректные!');
            }
        }
        return $this->render('index', compact('model'));
    }
}