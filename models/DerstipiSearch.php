<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 16:04
 */


namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Derstipi;

/**
 * DerstipiSearch represents the model behind the search form about `app\models\Derstipi`.
 */
class DerstipiSearch extends Derstipi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['derstipi_id', 'ders_ders_id'], 'integer'],
            [['derstipi_adi'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Derstipi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'derstipi_id' => $this->derstipi_id,
            'ders_ders_id' => $this->ders_ders_id,
        ]);

        $query->andFilterWhere(['like', 'derstipi_adi', $this->derstipi_adi]);

        return $dataProvider;
    }
}
