<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fakulte */

$this->title = 'Create Fakulte';
$this->params['breadcrumbs'][] = ['label' => 'Fakultes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakulte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
