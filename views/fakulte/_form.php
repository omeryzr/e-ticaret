<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<!-- div leri oluturmamızın sebebi yeni bir style.css dosyası oluşturduğumuzda bize kolaylık sağlaması şuan divleri silsekte 
yii frameworkün varsayılan arayüzü gözükecektir. -->
<div class="fakulte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fakulte_adi')->textInput(['maxlength' => 45]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Yeni' : 'Güncelle', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>




</div>
