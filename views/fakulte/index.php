<?php

use yii\helpers\Html;
use yii\grid\GridView;//yii'nin kütüphanesi veritabanında verileri çekip bootstrap teması ile bize gösterir


$this->title = 'Fakulteler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakulte-index">

    <h1><?= Html::encode($this->title) ?></h1>
   

    <p>
        <?= Html::a('Yeni Fakulte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],//

            'fakulte_id',
            'fakulte_adi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
