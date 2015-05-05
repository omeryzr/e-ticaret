<?php

use yii\helpers\Html;


$this->title = 'Fakulteleri Güncelle: ' . ' ' . $model->fakulte_id;
$this->params['breadcrumbs'][] = ['label' => 'Fakulteler', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fakulte_id, 'url' => ['view', 'id' => $model->fakulte_id]];
$this->params['breadcrumbs'][] = 'güncelle';
?>
<div class="fakulte-update">

    <h1><?= Html::encode($this->title) ?></h1>
<!--_form dosyamızı çağırıp  -->
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
