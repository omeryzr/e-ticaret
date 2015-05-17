<?php

use yii\helpers\Html;




$this->title = 'Yeni Akademisyen';
$this->params['breadcrumbs'][] = ['label' => 'Akademisyenler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akademisyen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
