<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 16:06
 */


use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Derstipi */

$this->title = $model->derstipi_id;
$this->params['breadcrumbs'][] = ['label' => 'Derstipis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="derstipi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->derstipi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->derstipi_id], [
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
            'derstipi_id',
            'derstipi_adi',
            'ders_ders_id',
        ],
    ]) ?>

</div>
