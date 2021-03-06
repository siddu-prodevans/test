<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ftat;

/**
 * FtatSearch represents the model behind the search form about `common\models\Ftat`.
 */
class FtatSearch extends Ftat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Ftat_Id', 'Organization_Id', 'Ftat_Status', 'Created_By'], 'integer'],
            [['Last_Modified_Date'], 'safe'],
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
        $query = Ftat::find()->where(['Ftat_Status' =>  1]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Ftat_Id' => $this->Ftat_Id,
            'Organization_Id' => $this->Organization_Id,
            'Ftat_Status' => $this->Ftat_Status,
            'Created_By' => $this->Created_By,
            'Last_Modified_Date' => $this->Last_Modified_Date,
        ]);

        return $dataProvider;
    }
}
