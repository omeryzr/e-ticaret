<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FakulteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fakulteler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakulte-index">

    <h1><?= Html::encode($this->title) //Buradaki encode tukarıda tanımladığımız this adında fakulteler başlığını getirir?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fakulte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([//burada veritabanına eklenen verileri incelemek için dataprovider ile verileri çağıroypruz
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,//filtermodel ilede verilerin içindearma yapabilmemiz için aramma motoru koyuyoruz
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],// kayıtların başında 1 den n e kadar numaralandırır

            'fakulte_id',//kayıtları gösterirken ki kolonlarımız
            'fakulte_adi',

            ['class' => 'yii\grid\ActionColumn'],//buda contoller içerisindeki action düğmelerimizi gösterir
        ],
    ]); ?>

</div>
