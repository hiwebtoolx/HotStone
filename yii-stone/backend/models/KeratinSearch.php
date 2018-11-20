<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Keratin;

/**
 * backend\models\KeratinSearch represents the model behind the search form about `backend\models\Keratin`.
 */
 class KeratinSearch extends Keratin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'branch_id','rate', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['are_you_pregnant', 'when_was_your_last_delivery', 'did_you_color_your_hair', 'color_when', 'did_you_make_highlight', 'highlight_when', 'did_you_put_henna', 'henna_when', 'did_you_make_hair_straightening', 'straightening_when', 'did_you_make_removing_color', 'removing_color_when', 'did_you_make_keratin_before', 'keratin_befor_when', 'hair_specialist_name', 'product_name', 'notes', 'rated', 'client_signature', 'tech_signature', 'date_signature', 'lock'], 'safe'],
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
        $query = Keratin::find();
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
            'rate' => $this->rate,
            'branch_id' => $this->branch_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'are_you_pregnant', $this->are_you_pregnant])
            ->andFilterWhere(['like', 'when_was_your_last_delivery', $this->when_was_your_last_delivery])
            ->andFilterWhere(['like', 'did_you_color_your_hair', $this->did_you_color_your_hair])
            ->andFilterWhere(['like', 'color_when', $this->color_when])
            ->andFilterWhere(['like', 'did_you_make_highlight', $this->did_you_make_highlight])
            ->andFilterWhere(['like', 'highlight_when', $this->highlight_when])
            ->andFilterWhere(['like', 'did_you_put_henna', $this->did_you_put_henna])
            ->andFilterWhere(['like', 'henna_when', $this->henna_when])
            ->andFilterWhere(['like', 'did_you_make_hair_straightening', $this->did_you_make_hair_straightening])
            ->andFilterWhere(['like', 'straightening_when', $this->straightening_when])
            ->andFilterWhere(['like', 'did_you_make_removing_color', $this->did_you_make_removing_color])
            ->andFilterWhere(['like', 'removing_color_when', $this->removing_color_when])
            ->andFilterWhere(['like', 'did_you_make_keratin_before', $this->did_you_make_keratin_before])
            ->andFilterWhere(['like', 'keratin_befor_when', $this->keratin_befor_when])
            ->andFilterWhere(['like', 'hair_specialist_name', $this->hair_specialist_name])
            ->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'rated', $this->rated])
            ->andFilterWhere(['like', 'client_signature', $this->client_signature])
            ->andFilterWhere(['like', 'tech_signature', $this->tech_signature])
            ->andFilterWhere(['like', 'date_signature', $this->date_signature])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
