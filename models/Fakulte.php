<?php

namespace app\models;
use Yii;

class Fakulte extends \yii\db\ActiveRecord{


	public static function tableName(){

			return 'fakulte';

	}


//veritabanını sınıfı
	public function rules(){


		return[
			 [['fakulte_adi'], 'required'],//Not null
            [['fakulte_adi'], 'string', 'max' => 45]//Varchar(45) veri tiplerini veritabanı modelimize uygun belirliyoruz.
		];
	}


	public function attributeLabels(){

		return[
			'fakulte_id'=>'Fakulte Id',
			'fakulte_adi'=>'Fakulte Adı',

		];
	}

	//Burada primary key olan fakulte_id bolum tablosunda foreign key olarak tanımlıyacak bir function yazılacak.Bolum modeli
	//oluşturulduktan sonra uncomment yapılacak
	/*public function getBolums(){

		return $this->hasMany(Bolum::className(),['fakulte_fakulte_id'=>'fakulte_id']);
	}
*/
	




}