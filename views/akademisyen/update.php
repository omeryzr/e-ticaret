<?php

use yii\helpers\Html;



$this->title = 'Güncelle: ' . ' ' . $model->akademisyen_id;
$this->params['breadcrumbs'][] = ['label' => 'Akademisyenler', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->akademisyen_id, 'url' => ['view', 'id' => $model->akademisyen_id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="akademisyen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
