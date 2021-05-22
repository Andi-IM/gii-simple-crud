<?php
namespace app\models;
use Yii;
use yii\base\Model;

class EntryForm extends Model {
    public $name;
    public $email;
    public $phone;
    public $address;

    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'address'], 'required'],
            ['email', 'email'], 
        ];
    }
}