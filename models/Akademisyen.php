<?php

namespace app\models;

use Yii;

class Akademisyen extends \yii\db\ActiveRecord{


    public static function tableName(){
        return 'akademisyen';
    }
    public function rules(){

        return [
            [['akademisyen_tc', 'akademisyen_ad', 'akademisyen_soyad', 'akademisyen_unvan', 'bolum_bolum_id', 'akademisyen_bordro_no', 'akademisyen_yuk', 'akademisyen_mail', 'vasif_vasif_id'], 'required'],
            [['akademisyen_unvan'], 'string'],
            [['bolum_bolum_id', 'akademisyen_yuk', 'vasif_vasif_id'], 'integer'],
            [['akademisyen_tc'], 'string', 'max' => 11],
            [['akademisyen_ad', 'akademisyen_soyad', 'akademisyen_bordro_no'], 'string', 'max' => 25],
            [['akademisyen_idari_gorev', 'akademisyen_mail', 'akademisyen_sifre'], 'string', 'max' => 45]
        ];
    }
    public function attributeLabels(){

        return [
            'akademisyen_id' => 'Akademisyen ID',
            'akademisyen_tc' => 'Akademisyen Tc',
            'akademisyen_ad' => 'Akademisyen Ad',
            'akademisyen_soyad' => 'Akademisyen Soyad',
            'akademisyen_unvan' => 'Akademisyen Unvan',
            'akademisyen_idari_gorev' => 'Akademisyen Idari Gorev',
            'bolum_bolum_id' => 'Bolum Bolum ID',
            'akademisyen_bordro_no' => 'Akademisyen Bordro No',
            'akademisyen_yuk' => 'Akademisyen Yuk',
            'akademisyen_mail' => 'Akademisyen Mail',
            'akademisyen_sifre' => 'Akademisyen Sifre',
            'vasif_vasif_id' => 'Vasif Vasif ID',

        ];


    }public function getBolumBolum(){

    return $this->hasOne(Bolum::className(),['bolum_id'=>'bolum_bolum_id']);
}
    public function getVasifVasif(){
        return $this->hasOne(Vasif::className(),['vasif_id' => 'vasif_vasif_id']);
    }
    public function getDers(){
        return $this->hasMany(Ders::className(),['akademisyen_akademisyen_id' => 'akademisyen_id']);
    }


}