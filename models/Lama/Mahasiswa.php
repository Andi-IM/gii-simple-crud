<?php
namespace app\models;

use yii\db\ActiveRecord;

class Mahasiswa extends ActiveRecord
{
	public static function tableName()
	{
		return 'mahasiswa';
	}
	public function rules()
	{
		return[
		[['nim','nama','jekel','id_prodi','email','alamat'],'required'],
		[['nim','nama','jekel','alamat'], 'string'],
		[['email'],'email'],
		[['id_prodi'], 'integer'],
		];
	}
}
?>