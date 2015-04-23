<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fakulte */

$this->title = $model->fakulte_id;
$this->params['breadcrumbs'][] = ['label' => 'Fakultes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakulte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fakulte_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fakulte_id], [
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
            'fakulte_id',
            'fakulte_adi',
        ],
    ]) ?>

</div>
