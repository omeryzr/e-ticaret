<?php

use yii\helpers\Html;


$this->title = 'Yeni Fakulte';
$this->params['breadcrumbs'][] = ['label' => 'Fakülteler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="fakulte-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
