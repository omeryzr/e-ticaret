<?php

namespace app\controllers;

use Yii;
use app\models\Akademisyen;
use app\models\AkademisyenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class AkademisyenController extends Controller{

    public function actionIndex()
    {
        $searchModel = new AkademisyenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Akademisyen();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->akademisyen_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->akademisyen_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = Akademisyen::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Sayfa bulunamadı.');
        }
    }
}