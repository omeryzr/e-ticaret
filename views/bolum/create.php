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

$this->title = 'Create Bolum';
$this->params['breadcrumbs'][] = ['label' => 'Bolums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
