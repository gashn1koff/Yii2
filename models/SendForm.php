<?php

namespace app\models;

use yii\base\Model;

class SendForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function rules() {
        return [
            [['name','email'],  'required'],
            ['email', 'email'],
            ['text', 'string', 'min' => 3],
            ['name', 'customRules'],
            [['name', 'email', 'text'], 'trim']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения'
        ];
    }

    public function customRules($attr) {
        if (in_array($this->$attr, ['hello', 'world'])){
            $this->addError($attr, 'Это не имя пользователя!');
        }
    }
}
