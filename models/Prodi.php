<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id
 * @property int $id_jurusan
 * @property string $prodi
 * @property string $keterangan
 *
 * @property Jurusan $jurusan
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jurusan', 'prodi', 'keterangan'], 'required'],
            [['id_jurusan'], 'integer'],
            [['prodi', 'keterangan'], 'string', 'max' => 50],
            [['id_jurusan'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id_jurusan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_jurusan' => 'Id Jurusan',
            'prodi' => 'Prodi',
            'keterangan' => 'Keterangan',
        ];
    }

    public static function getProdi()
    {
        return Self::find()->select(['prodi'])->indexBy('id')->column();
    }

    public static function getProdiList($cat_id, $dependent = false)
    {
        $subCategory = self::find()
            ->where(['id_jurusan' => $cat_id]);

        if ($dependent == "") {
            return $subCategory->select(['id', 'prodi as name'])->asArray()->all();
        } else {
            return $subCategory->select(['prodi'])->indexBy('id')->column();
        }
    }
}
