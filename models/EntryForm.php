<?php
	namespace app\models;
	use Yii;
	use yii\base\model;

	class EntryForm extends Model
	{
		public $name;
		public $email;
		public $notelp;
		public $alamat;
		
		public function rules()
		{
			return[
				[['name','email','notelp','alamat'],'required'],['email','email'],
			];
		}
	}
?>