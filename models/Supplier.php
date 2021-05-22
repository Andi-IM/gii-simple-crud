<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id
 * @property string $nama_supplier
 * @property string $notelp
 * @property string $email
 * @property string $alamat
 *
 * @property Barang[] $barangs
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_supplier', 'notelp', 'email', 'alamat'], 'required'],
            [['nama_supplier'], 'string', 'max' => 50],
            [['notelp'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 25],
            [['alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_supplier' => 'Nama Supplier',
            'notelp' => 'Notelp',
            'email' => 'Email',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Barangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_supplier' => 'id']);
    }
}
