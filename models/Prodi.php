<?php
namespace app\models;

use yii\db\ActiveRecord;

class Prodi extends ActiveRecord
{
	public static function tableName()
	{
		return 'prodi';
	}
	public static function getProdi()
    {
        return Self::find()->select(['prodi'])->indexBy('id')->column();
    }
	public static function getProdiList($cat_id, $dependent = false)
	{
		$subCategory = self::find()
			->where(['id_jurusan' => $cat_id]);
			
		// return $subCategory;
		// $subCategory = self::find()
		// 	->where(['category_id' => $categoryID]);

		if ($cat_id == "") {
			return $subCategory->select(['id', 'prodi as name'])->asArray()->all();
		} else {
			return $subCategory->select(['prodi'])->indexBy('id')->column();
		}
	}
}
?>