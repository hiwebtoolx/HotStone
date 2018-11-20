<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\HairColour;

/**
 * backend\models\HairColourSearch represents the model behind the search form about `backend\models\HairColour`.
 */
 class HairColourSearch extends HairColour
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'branch_id', 'user_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['texture', 'condition', 'natural_form', 'natural_colour', 'amount_grey', 'existing_treatment', 'scalpskin_condition', 'colouration_given', 'number_used', 'product_suggested', 'comments', 'rated', 'interests', 'client_review', 'client_signature', 'tech_signature', 'date_signature', 'lock'], 'safe'],
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
        $query = HairColour::find();

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
            'branch_id' => $this->branch_id,
            'user_id' => $this->user_id,
            'rate' => $this->rate,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'texture', $this->texture])
            ->andFilterWhere(['like', 'condition', $this->condition])
            ->andFilterWhere(['like', 'natural_form', $this->natural_form])
            ->andFilterWhere(['like', 'natural_colour', $this->natural_colour])
            ->andFilterWhere(['like', 'amount_grey', $this->amount_grey])
            ->andFilterWhere(['like', 'existing_treatment', $this->existing_treatment])
            ->andFilterWhere(['like', 'scalpskin_condition', $this->scalpskin_condition])
            ->andFilterWhere(['like', 'colouration_given', $this->colouration_given])
            ->andFilterWhere(['like', 'number_used', $this->number_used])
            ->andFilterWhere(['like', 'product_suggested', $this->product_suggested])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'rated', $this->rated])
            ->andFilterWhere(['like', 'interests', $this->interests])
            ->andFilterWhere(['like', 'client_review', $this->client_review])
            ->andFilterWhere(['like', 'client_signature', $this->client_signature])
            ->andFilterWhere(['like', 'tech_signature', $this->tech_signature])
            ->andFilterWhere(['like', 'date_signature', $this->date_signature])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
