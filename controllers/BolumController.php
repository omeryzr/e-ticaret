<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 15:47
 */

namespace app\controllers;

use Yii;
use app\models\Bolum;
use app\models\BolumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * bu sayfada MVC mimarisindeki controller yapısının çalıştığı işlemleri yaparak kontrol edilir
 */


/*bu kontrol sorgusunu başka sınıflarda kullanabilmek için genişletiyoruz.*/
class BolumController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        $searchModel = new BolumSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     Bölüm Modelini görüntüleme işlemini yaptığımızı viev dosyasının kontrol eder ve çalıştırır.
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     Bölüm tablomuza yeni  veri kaydetme işlemini kontrol ediyoruz.
     */
    public function actionCreate()
    {
        $model = new Bolum();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->bolum_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    /**
     Bölüm modelimiz üzerindeki update işlerimlerinin konrolünün yapıldığı bölümmümüz.
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->bolum_id]);
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
        if (($model = Bolum::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('404 hatası Sayfa Bulunamadı.');
        }
    }
}
