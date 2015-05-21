<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 16:05
 */


use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Derstipi */

$this->title = 'Create Derstipi';
$this->params['breadcrumbs'][] = ['label' => 'Derstipis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="derstipi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
