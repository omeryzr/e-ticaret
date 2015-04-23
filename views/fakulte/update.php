<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fakulte */

$this->title = 'Update Fakulte: ' . ' ' . $model->fakulte_id;
$this->params['breadcrumbs'][] = ['label' => 'Fakultes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fakulte_id, 'url' => ['view', 'id' => $model->fakulte_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fakulte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
