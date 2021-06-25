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

	public static function getProdiList($categoryID, $dependent = false)
	{
		$subCategory = self::find()
			->where(['subcat-id' => $categoryID]);

		if ($categoryID != "") {
			return $subCategory->select(['id', 'prodi'])->asArray()->all();
		} else {
			return $subCategory->select(['prodi'])->indexBy('id')->column();
		}
	}

	
}
?>