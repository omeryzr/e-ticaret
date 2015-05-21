<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 15:49
 */


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bolum */

$this->title = 'Update Bolum: ' . ' ' . $model->bolum_id;
$this->params['breadcrumbs'][] = ['label' => 'Bölümler', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bolum_id, 'url' => ['view', 'id' => $model->bolum_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bolum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
