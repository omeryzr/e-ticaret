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
/* @var $model app\models\BolumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bolum-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bolum_id') ?>

    <?= $form->field($model, 'bolum_adi') ?>

    <?= $form->field($model, 'fakulte_fakulte_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
