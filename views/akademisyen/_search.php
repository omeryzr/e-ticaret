<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<div class="akademisyen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'akademisyen_id') ?>

    <?= $form->field($model, 'akademisyen_tc') ?>

    <?= $form->field($model, 'akademisyen_ad') ?>

    <?= $form->field($model, 'akademisyen_soyad') ?>

    <?= $form->field($model, 'akademisyen_unvan') ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>