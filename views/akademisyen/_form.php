<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Akademisyen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akademisyen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'akademisyen_tc')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'akademisyen_ad')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'akademisyen_soyad')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'akademisyen_unvan')->dropDownList([ 'Prof. Dr.' => 'Prof. Dr.', 'Doç. Dr.' => 'Doç. Dr.', 'Yrd.Doç.Dr.' => 'Yrd.Doç.Dr.', 'Arş. Gör. Dr.' => 'Arş. Gör. Dr.', 'Arş.Gör.' => 'Arş.Gör.', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'akademisyen_idari_gorev')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'bolum_bolum_id')->textInput() ?>

    <?= $form->field($model, 'akademisyen_bordro_no')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'akademisyen_yuk')->textInput() ?>

    <?= $form->field($model, 'akademisyen_mail')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'akademisyen_sifre')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'vasif_vasif_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Yeni' : 'Güncelle', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
