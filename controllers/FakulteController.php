<?php

namespace app\controllers;


use Yii;
use app\models\FakulteSearch;
use app\models\Fakulte;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class FakulteController extends Controller{


public function actionIndex(){

    $searchModel=new FakulteSearch();
    $dataProvider=$searchModel->search(Yii::$app->request->queryParams);


	return $this->render('index',[
        'searchModel'=> $searchModel,
        'dataProvider'=> $dataProvider,

    ]);
}

    public function actionView($id)
    {
        return $this->render('view',[
                'model'=>$this->findModel($id),
            ]);
    }

    public function actionCreate()
    {
        $model=new Fakulte();

        if($model->load(Yii::$app->request->post()) && $model->save())  {
            return $this->redirect(['view','id'=>$model->fakulte_id]);

        }else{
            return $this->render('create',[
                'model'=>$model,
            ]);
        }
    }

    public function actionUpdate($id){
        $model=$this->findModel($id);

        if($model->load(Yii::$app->request->post())&&$model->save())
        {
            return $this->redirect(['view','id'=>$model->fakulte_id]);
        }
        else{
            return $this->render('update',[
                'model'=>$model,
            ]);
        }

    }

    public function actionDelete($id){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);

    }

    protected function findModel($id)
    {
        if(($model=Fakulte::findOne($id))!== null){
            return $model;
        }else{
            throw new NotFoundHttpException('Ulaşmak istediğiniz sayfa bulunamadı');
        }
    }



}