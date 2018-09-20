<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Massage;

/**
 * backend\models\MassageSearch represents the model behind the search form about `backend\models\Massage`.
 */
 class MassageSearch extends Massage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'created_by','branch_id', 'updated_by', 'created_at', 'updated_at', 'rate', 'deleted_by', 'deleted_at'], 'integer'],
            [['massage_do_you_prefer', 'how_do_you_prefer_your_massage_pressure', 'are_you_pregnant', 'client_signature', 'tech_signature', 'date_signature', 'lock', 'reted'], 'safe'],
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
        $query = Massage::find();
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
            'created_by' => $this->created_by,
            'branch_id' => $this->branch_id,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'rate' => $this->rate,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'massage_do_you_prefer', $this->massage_do_you_prefer])
            ->andFilterWhere(['like', 'how_do_you_prefer_your_massage_pressure', $this->how_do_you_prefer_your_massage_pressure])
            ->andFilterWhere(['like', 'are_you_pregnant', $this->are_you_pregnant])
            ->andFilterWhere(['like', 'client_signature', $this->client_signature])
            ->andFilterWhere(['like', 'tech_signature', $this->tech_signature])
            ->andFilterWhere(['like', 'date_signature', $this->date_signature])
            ->andFilterWhere(['like', 'lock', $this->lock])
            ->andFilterWhere(['like', 'reted', $this->reted]);

        return $dataProvider;
    }
}
