<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProgramType;

/**
 * ProgramTypeSearch represents the model behind the search form about `common\models\ProgramType`.
 */
class ProgramTypeSearch extends ProgramType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Program_Type_Id'], 'integer'],
            [['Program_Type_Name', 'Created_Date', 'Last_Modified_Date'], 'safe'],
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
        $query = ProgramType::find()->orderBy(['Last_Modified_Date'=>SORT_DESC]);

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
            'Program_Type_Id' => $this->Program_Type_Id,
            'Created_Date' => $this->Created_Date,
            'Last_Modified_Date' => $this->Last_Modified_Date,
        ]);

        $query->andFilterWhere(['like', 'Program_Type_Name', $this->Program_Type_Name]);

        return $dataProvider;
    }
}
