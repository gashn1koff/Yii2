<?php

namespace app\controllers;

use app\models\SendForm;

class DevController extends \yii\web\Controller
{
    public function actionIndex () {
        $model = new SendForm();
        return $this->render('index', compact('model'));
    }
}