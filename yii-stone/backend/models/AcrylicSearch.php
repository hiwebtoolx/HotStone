<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Acrylic;

/**
 * backend\models\AcrylicSearch represents the model behind the search form about `backend\models\Acrylic`.
 */
 class AcrylicSearch extends Acrylic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id','branch_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by', 'daleted_at'], 'integer'],
            [['client_signature', 'tech_signature', 'rated', 'lock', 'date_signature'], 'safe'],
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
        $query = Acrylic::find();
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
            'branch_id' => $this->branch_id,
            'rate' => $this->rate,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_by' => $this->deleted_by,
            'daleted_at' => $this->daleted_at,
        ]);

        $query->andFilterWhere(['like', 'client_signature', $this->client_signature])
            ->andFilterWhere(['like', 'tech_signature', $this->tech_signature])
            ->andFilterWhere(['like', 'rated', $this->rated])
            ->andFilterWhere(['like', 'lock', $this->lock])
            ->andFilterWhere(['like', 'date_signature', $this->date_signature]);

        return $dataProvider;
    }
}
