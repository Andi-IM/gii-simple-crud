<?php
namespace app\models;

use yii\db\ActiveRecord;

class Prodi extends ActiveRecord
{
	public static function tableName()
	{
		return 'prodi';
	}

	public function getJurusan()
	{
		return $this->hasOne(Jurusan::className(), ['id' => 'id_jurusan']);
	}

	public static function getProdiList($jurusanID, $dependent = false)
	{
		$subCategory = self::find()
			->select(['prodi as name', 'id'])
			->where(['id_jurusan' => $jurusanID])
			->asArray()
			->all();
			return $subCategory;
	}

	
}
?>