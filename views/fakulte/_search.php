<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<div class="fakulte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

  

  

    <?php ActiveForm::end(); ?>
</div>
