<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ManicurePedicure;

/**
 * backend\models\ManicurepSearch represents the model behind the search form about `backend\models\ManicurePedicure`.
 */
 class ManicurepSearch extends ManicurePedicure
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id','branch_id', 'rate', 'created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['diabetes', 'cuts', 'eczema', 'psoriasis', 'viens_problems', 'arthritis', 'medical_oedema', 'recent_fectures', 'others', 'cuticle_condition', 'blood_circulation', 'rated', 'client_signature', 'tech_signature', 'date_signature', 'lock'], 'safe'],
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
        $query = ManicurePedicure::find();
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
            'created_by' => $this->created_by,
            'branch_id' => $this->branch_id,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'diabetes', $this->diabetes])
            ->andFilterWhere(['like', 'cuts', $this->cuts])
            ->andFilterWhere(['like', 'eczema', $this->eczema])
            ->andFilterWhere(['like', 'psoriasis', $this->psoriasis])
            ->andFilterWhere(['like', 'viens_problems', $this->viens_problems])
            ->andFilterWhere(['like', 'arthritis', $this->arthritis])
            ->andFilterWhere(['like', 'medical_oedema', $this->medical_oedema])
            ->andFilterWhere(['like', 'recent_fectures', $this->recent_fectures])
            ->andFilterWhere(['like', 'others', $this->others])
            ->andFilterWhere(['like', 'cuticle_condition', $this->cuticle_condition])
            ->andFilterWhere(['like', 'blood_circulation', $this->blood_circulation])
            ->andFilterWhere(['like', 'rated', $this->rated])
            ->andFilterWhere(['like', 'client_signature', $this->client_signature])
            ->andFilterWhere(['like', 'tech_signature', $this->tech_signature])
            ->andFilterWhere(['like', 'date_signature', $this->date_signature])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
