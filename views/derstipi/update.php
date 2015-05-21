<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 16:06
 */


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Derstipi */

$this->title = 'Update Derstipi: ' . ' ' . $model->derstipi_id;
$this->params['breadcrumbs'][] = ['label' => 'Derstipis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->derstipi_id, 'url' => ['view', 'id' => $model->derstipi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="derstipi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
