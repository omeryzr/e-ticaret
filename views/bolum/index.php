<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 15:49
 */


use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BolumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bölüm (ekle/sil/güncelle)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolum-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Bölüm Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bolum_id',
            'bolum_adi',
            /*'fakulte_fakulte_id',*/

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>


