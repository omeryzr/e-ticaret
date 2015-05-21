<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 15:48
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bolum */
/* @var $form yii\widgets\ActiveForm */
/*  <?= $form->field($model, 'fakulte_fakulte_id')->textInput() ?> */
?>

<div class="bolum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bolum_adi')->textInput(['maxlength' => 45]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
