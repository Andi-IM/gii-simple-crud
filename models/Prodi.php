<?php
namespace app\models;

use yii\db\ActiveRecord;

class Prodi extends ActiveRecord 
{
    public static function tableName()
    {
        return 'prodi';
    }
}