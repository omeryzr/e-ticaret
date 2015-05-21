<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bolum;

/**
 * Bölüm tablosu ve modeli içersinde arama işlemi modülüdür. `app\models\Bolum`.
 */

/*bu modülü web sayfaları içerisinide kullancağımız için genişletiyoruz.*/
class BolumSearch extends Bolum
{

    public function rules()
    {
        return [
            [['bolum_id', 'fakulte_fakulte_id'], 'integer'],

            [['bolum_adi', 'bolum_kod'], 'safe'],
        ];
    }


/*modelimiz'de kayıtlı olan veriler iççin filtreleme*/
    public function search($params)
    {
        $query = Bolum::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {

            return $dataProvider;
        }
        /*modelimiz ile bağlantılı tablolardaki  sütünların tamamı için arama işlemi*/

        $query->andFilterWhere([
            'bolum_id' => $this->bolum_id,
            'fakulte_fakulte_id' => $this->fakulte_fakulte_id,
        ]);

        $query->andFilterWhere(['like', 'bolum_adi', $this->bolum_adi]);

        return $dataProvider;
    }
}











/* ilerde kullanacağımız funksiyonlardan biri şimdilik burada kalsın
 *     public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
 * */