<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Barang;

class BarangController extends Controller
{
	public function actionIndex()
	{
		$query = Barang::find();
		$pagination = new Pagination([
			'defaultPageSize' => 5,
			'totalCount' => $query->count(),
		]);
		$data_barang = $query->orderBy('id')->offset($pagination->offset)->limit($pagination->limit)->all();
		return $this->render('index',['data_barang' => $data_barang, 'pagination' => $pagination,
		]);
	}
	public function actionCreate()
	{
		$model = new Barang();

		if($model->load(Yii::$app->request->post()) && $model->save()){
			//Jika submit dan save berhasil tampilkan pesan..
			Yii::$app->session->setFlash('success', 'Data berhasil disimpan');
			return $this->refresh();
		}
		return $this->render('create',['model'=> $model,
		]);
	}
	public function actionUpdate($id)
	{
		$model = Barang::findOne($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()){
			Yii::$app->session->setFlash('success', 'Data berhasil diubah');
			return $this->refresh();
		}
		return $this->render('update',['model' => $model,
		]);
	}
	public function actionDelete($id)
	{
		$model = Barang::findOne($id);
		$model->delete();
		return $this->redirect(['index']);
	}
}
?>