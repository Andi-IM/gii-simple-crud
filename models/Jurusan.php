<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property int $idJurusan
 * @property string $KodeJurusan
 * @property string $NamaJurusan
 *
 * @property Prodi[] $prodis
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    public static function getJurusan()
    {
        return Self::find()->select(['NamaJurusan', 'id'])->indexBy('id')->column();
    }
    
}
