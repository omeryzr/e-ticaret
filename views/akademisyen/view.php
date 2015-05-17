<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = $model->akademisyen_id;
$this->params['breadcrumbs'][] = ['label' => 'Akademisyenler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akademisyen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->akademisyen_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->akademisyen_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bu kaydı silmek istediğinizden emin misiniz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'akademisyen_id',
            'akademisyen_tc',
            'akademisyen_ad',
            'akademisyen_soyad',
            'akademisyen_unvan',
            'akademisyen_idari_gorev',
            'bolum_bolum_id',
            'akademisyen_bordro_no',
            'akademisyen_yuk',
            'akademisyen_mail',
            'akademisyen_sifre',
            'vasif_vasif_id',
        ],
    ]) ?>

</div>
