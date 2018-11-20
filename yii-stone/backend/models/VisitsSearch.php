<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Visits;

/**
 * backend\models\VisitsSearch represents the model behind the search form about `backend\models\Visits`.
 */
 class VisitsSearch extends Visits
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id','branch_id', 'visit_date', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['treatment_given', 'retail_product', 'technician_name', 'comments', 'rated', 'client_signature', 'tech_signature', 'date_signature', 'lock'], 'safe'],
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
        $query = Visits::find();
        if(! Yii::$app->user->identity->isAdmin) {
            $query->andWhere(['branch_id' => Yii::$app->user->identity->profile->branch_id]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'visit_date' => $this->visit_date,
            'rate' => $this->rate,
            'branch_id' => $this->branch_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'treatment_given', $this->treatment_given])
            ->andFilterWhere(['like', 'retail_product', $this->retail_product])
            ->andFilterWhere(['like', 'technician_name', $this->technician_name])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'rated', $this->rated])
            ->andFilterWhere(['like', 'client_signature', $this->client_signature])
            ->andFilterWhere(['like', 'tech_signature', $this->tech_signature])
            ->andFilterWhere(['like', 'date_signature', $this->date_signature])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
