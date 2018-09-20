<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Health;

/**
 * backend\models\HealthSearch represents the model behind the search form about `backend\models\Health`.
 */
 class HealthSearch extends Health
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'branch_id','created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['heart_disease', 'chest_pain', 'high_blood_pressure', 'varicose_veins', 'allergies', 'bronchitis', 'asthma', 'dizziness', 'headaches', 'chemotherapy', 'diabetes', 'e_pilepsy', 'otherـdiseases', 'otherـdiseases_desc', 'allergic', 'what_causes_you_allergies', 'lock'], 'safe'],
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
        $query = Health::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'heart_disease', $this->heart_disease])
            ->andFilterWhere(['like', 'chest_pain', $this->chest_pain])
            ->andFilterWhere(['like', 'high_blood_pressure', $this->high_blood_pressure])
            ->andFilterWhere(['like', 'varicose_veins', $this->varicose_veins])
            ->andFilterWhere(['like', 'allergies', $this->allergies])
            ->andFilterWhere(['like', 'bronchitis', $this->bronchitis])
            ->andFilterWhere(['like', 'asthma', $this->asthma])
            ->andFilterWhere(['like', 'dizziness', $this->dizziness])
            ->andFilterWhere(['like', 'headaches', $this->headaches])
            ->andFilterWhere(['like', 'chemotherapy', $this->chemotherapy])
            ->andFilterWhere(['like', 'diabetes', $this->diabetes])
            ->andFilterWhere(['like', 'e_pilepsy', $this->e_pilepsy])
            ->andFilterWhere(['like', 'otherـdiseases', $this->otherـdiseases])
            ->andFilterWhere(['like', 'otherـdiseases_desc', $this->otherـdiseases_desc])
            ->andFilterWhere(['like', 'allergic', $this->allergic])
            ->andFilterWhere(['like', 'what_causes_you_allergies', $this->what_causes_you_allergies])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
