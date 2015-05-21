<?php
namespace app\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Akademisyen;


class AkademisyenSearch extends Akademisyen{


    public function rules(){

        return [
            [['akademisyen_id', 'bolum_bolum_id', 'akademisyen_yuk', 'vasif_vasif_id'], 'integer'],
            [['akademisyen_tc', 'akademisyen_ad', 'akademisyen_soyad', 'akademisyen_unvan', 'akademisyen_idari_gorev', 'akademisyen_bordro_no', 'akademisyen_mail', 'akademisyen_sifre'], 'safe'],
        ];

    }

    public function scenarios(){

        return Model::scenarios();
    }

    public function search($params){


        $query=Akademisyen::find();
        $dataProvider=new ActiveDataProvider(
            ['query'=>$query,
            ]
        );
        $this->load($params);

        if($this->validate()){

            return $dataProvider;

        }
        $query->andFilterWhere([
            'akademisyen_id' => $this->akademisyen_id,
            'bolum_bolum_id' => $this->bolum_bolum_id,
            'akademisyen_yuk' => $this->akademisyen_yuk,
            'vasif_vasif_id' => $this->vasif_vasif_id,
        ]);
        $query->andFilterWhere(['like', 'akademisyen_tc', $this->akademisyen_tc])
            ->andFilterWhere(['like', 'akademisyen_ad', $this->akademisyen_ad])
            ->andFilterWhere(['like', 'akademisyen_soyad', $this->akademisyen_soyad])
            ->andFilterWhere(['like', 'akademisyen_unvan', $this->akademisyen_unvan])
            ->andFilterWhere(['like', 'akademisyen_idari_gorev', $this->akademisyen_idari_gorev])
            ->andFilterWhere(['like', 'akademisyen_bordro_no', $this->akademisyen_bordro_no])
            ->andFilterWhere(['like', 'akademisyen_mail', $this->akademisyen_mail])
            ->andFilterWhere(['like', 'akademisyen_sifre', $this->akademisyen_sifre]);

        return $dataProvider;

    }
}


