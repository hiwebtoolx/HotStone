<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Facial;

/**
 * backend\models\FacialSearch represents the model behind the search form about `backend\models\facial`.
 */
 class FacialSearch extends \backend\models\Facial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id','branch_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['date_of_last_period', 'allergies', 'medication', 'varicose_veins', 'epilepsy', 'respiratory', 'major_illness', 'major_surgery', 'kidney', 'cardiac', 'metal_pins', 'diet_present', 'type', 'color', 'texture', 'circulation', 'muscle_tone', 'elasticity', 'imperfections_Irregularities', 'wrinkles', 'pores', 'discoloration', 'present_skincare_routine', 'hands', 'feet', 'miscellaneous', 'rated', 'client_signature', 'tech_signature', 'date_signature', 'lock', 'notes'], 'safe'],
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
        $query = facial::find();
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
            'branch_id'  => $this->branch_id,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'date_of_last_period', $this->date_of_last_period])
            ->andFilterWhere(['like', 'allergies', $this->allergies])
            ->andFilterWhere(['like', 'medication', $this->medication])
            ->andFilterWhere(['like', 'varicose_veins', $this->varicose_veins])
            ->andFilterWhere(['like', 'epilepsy', $this->epilepsy])
            ->andFilterWhere(['like', 'respiratory', $this->respiratory])
            ->andFilterWhere(['like', 'major_illness', $this->major_illness])
            ->andFilterWhere(['like', 'major_surgery', $this->major_surgery])
            ->andFilterWhere(['like', 'kidney', $this->kidney])
            ->andFilterWhere(['like', 'cardiac', $this->cardiac])
            ->andFilterWhere(['like', 'metal_pins', $this->metal_pins])
            ->andFilterWhere(['like', 'diet_present', $this->diet_present])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'texture', $this->texture])
            ->andFilterWhere(['like', 'circulation', $this->circulation])
            ->andFilterWhere(['like', 'muscle_tone', $this->muscle_tone])
            ->andFilterWhere(['like', 'elasticity', $this->elasticity])
            ->andFilterWhere(['like', 'imperfections_Irregularities', $this->imperfections_Irregularities])
            ->andFilterWhere(['like', 'wrinkles', $this->wrinkles])
            ->andFilterWhere(['like', 'pores', $this->pores])
            ->andFilterWhere(['like', 'discoloration', $this->discoloration])
            ->andFilterWhere(['like', 'present_skincare_routine', $this->present_skincare_routine])
            ->andFilterWhere(['like', 'hands', $this->hands])
            ->andFilterWhere(['like', 'feet', $this->feet])
            ->andFilterWhere(['like', 'miscellaneous', $this->miscellaneous])
            ->andFilterWhere(['like', 'rated', $this->rated])
            ->andFilterWhere(['like', 'client_signature', $this->client_signature])
            ->andFilterWhere(['like', 'tech_signature', $this->tech_signature])
            ->andFilterWhere(['like', 'date_signature', $this->date_signature])
            ->andFilterWhere(['like', 'lock', $this->lock])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
