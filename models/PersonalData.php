<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class PersonalData extends ActiveRecord
{

    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['name', 'validateCount'],
            ['email', 'email']
        ];
    }

    public function validateCount($attribute, $params)
    {
        $name = $this->$attribute;
        count(explode(' ',$name)) < 2
             ? $this->addError($attribute,'Имя должно состоять из 2 слов и более')
             : true;
    }

    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->send();
            return true;
        }
        return false;
    }
}
