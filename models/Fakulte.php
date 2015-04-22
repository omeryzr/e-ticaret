<?php

namespace app\models;
use Yii;

class Fakulte extends \yii\db\ActiveRecord{


	public static function tableName(){

			return 'fakulte';

	}


//veritabanını karakter uzunlukları
	public function rules(){


		return[
			[['fakulte_adi'],'required'],
			[['fakulte_adi'],'string','max'=>45]
		];
	}


	public function attributeLabels(){

		return[
			'fakulte_id'=>'Fakulte Id',
			'fakulte_adi'=>'Fakulte Adı',

		];
	}

	//Burada primary key olan fakulte_id bolum tablosunda foreign key olarak tanımlıyoruz.
	public function getBolums(){

			return $this=>hasMany(Bolum::className(),['fakulte_id'=>'fakulte_id']);

	}




}