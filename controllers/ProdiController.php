<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Prodi;

class ProdiController extends Controller
{
    public function actionIndex()
    {
        $query = Prodi::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $data_prodi = $query->orderBy('id')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();
        return $this->render('index', [
            'data_prodi' => $data_prodi,
            'pagination' => $pagination,
        ]);
    }

    public function actionCreate()
    {
        $model = new Prodi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            # Jika submit dan save akan tampilkan pesan..
            Yii::$app->session->setFlash('success','Data berhasil disimpan');
            return $this->refresh();
        }

        return $this->render('create', [
            'model'=>$model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Prodi::findOne($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            # Get Item
            Yii::$app->session->setFlash('success','Data berhasil diubah');
            return $this->refresh();
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model=Prodi::findOne($id);
        $model->delete();
        return $this->redirect(['index']);
    }
}