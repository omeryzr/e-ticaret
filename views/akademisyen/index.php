<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AkademisyenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akademisyenler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akademisyen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Yeni Akademisyen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'akademisyen_id',
            'akademisyen_tc',
            'akademisyen_ad',
            'akademisyen_soyad',
            'akademisyen_unvan',
            // 'akademisyen_idari_gorev',
            // 'bolum_bolum_id',
            // 'akademisyen_bordro_no',
            // 'akademisyen_yuk',
            // 'akademisyen_mail',
            // 'akademisyen_sifre',
            // 'vasif_vasif_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
