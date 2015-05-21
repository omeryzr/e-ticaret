<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 16:05
 */


use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DerstipiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Derstipis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="derstipi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Derstipi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'derstipi_id',
            'derstipi_adi',
            'ders_ders_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
