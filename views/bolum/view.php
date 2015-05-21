<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 15:49
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bolum */

$this->title = $model->bolum_id;
$this->params['breadcrumbs'][] = ['label' => 'Bolums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolum-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->bolum_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->bolum_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bolum_id',
            'bolum_adi',
            'fakulte_fakulte_id',
        ],
    ]) ?>

</div>
