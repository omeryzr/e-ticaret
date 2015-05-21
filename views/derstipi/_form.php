<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 16:05
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Derstipi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="derstipi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'derstipi_adi')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'ders_ders_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
