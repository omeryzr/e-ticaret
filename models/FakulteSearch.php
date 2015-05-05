<?php
namespace app\models;

use Yii;
use app\models\Fakulte;
use yii\base\Model;
use yii\data\ActiveDataProvider;




class FakulteSearch extends Fakulte{
 
   public function rules()
    {
        return [
            [['fakulte_id'],'integer'],
            [['fakulte_adi'],'safe'],

        ];
    }

    public function search($params){

        $query=Fakulte::find();

        $dataProvider=new ActiveDataProvider([
            'query'=>$query,


        ]);

        $this->load($params);

        if(!$this->validate())
        {
            return $dataProvider;
        }
        $query->andFilterWhere([
             'fakulte_id'=>$this->fakulte_id,
]);


        $query->andFilterWhere(['like','fakulte_adi',$this->fakulte_adi]);
        return $dataProvider;

    }



}