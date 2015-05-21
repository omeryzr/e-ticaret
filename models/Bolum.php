<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 15:46
 */
namespace app\models;

use Yii;

    /**
     * Bölüm tablosundaki sütunlar ve veri tipleri "bolum".
     *
     * @property integer $bolum_id
     * @property string $bolum_adi
     * @property integer $fakulte_fakulte_id
     *
     * @property Akademisyen[] $akademisyens
     * @property Fakulte $fakulteFakulte
     */

    /*bölüm sınıfını oluşturuyoruz fakat extends ile sınıfımızı genişletiyoruz.*/
class Bolum extends \yii\db\ActiveRecord
{


    /*oluşturduğumuz fonksiyon ile çalıştıracağımız tablo ismini yazıyoruz */
    public static function tableName()
    {
        return 'bolum';
    }



    /*fonksiyonumuzda kullanacağımız kurallar (form vs. içerisinden veritababnında belirlenen kuralları aktiff ediyoruz.)*/
    public function rules()
    {
        return [
            [['bolum_adi',], 'required'],
          /* [['fakulte_fakulte_id'], 'integer'],*/
            [['bolum_adi'], 'string', 'max' => 45]

        ];
    }



    /*veri tabanı tablolarımızdan gelen sütünları web sayfasında nasıl gözükeceği ayarlarını yapıyoruz.*/
    public function attributeLabels()
    {
        return [
            'bolum_id' => 'Bölüm ID',
            'bolum_adi' => 'Bölüm Adı',
            /*'fakulte_fakulte_id' => 'Fakülte ID',*/
        ];
    }


    /*veritabanımızda tablolar arasında ilişki bulunan sütünları fonksiyon ile belirtiyoruz.*/
    public function getAkademisyens()
    {
        return $this->hasMany(Akademisyen::className(), ['bolum_bolum_id' => 'bolum_id']);
    }

        /*
            public function getFakulteFakulte()
            {
                return $this->hasOne(Fakulte::className(), ['fakulte_id' => 'fakulte_fakulte_id']);
            }*/
}
