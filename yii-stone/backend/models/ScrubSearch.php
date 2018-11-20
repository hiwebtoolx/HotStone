<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ConsultBodyScrub;

/**
 * backend\models\ScrubSearch represents the model behind the search form about `backend\models\ConsultBodyScrub`.
 */
 class ScrubSearch extends ConsultBodyScrub
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'branch_id', 'user_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['how_do_you_prefer_the_scrubbing', 'are_you_pregnant', 'are_you_recently_delivered', 'did_you_have_a_surgery_operation_during_the_last_3_months', 'when_was_your_last_laser_session', 'when_last_time_you_remove_the_hair', 'did_you_do_a_peeling', 'If_yes_when', 'which_hammam_or_body_scrub_do_you_prefer', 'rated', 'client_signature', 'tech_signature', 'date_signature', 'lock'], 'safe'],
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
        $query = ConsultBodyScrub::find();
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
            'branch_id' => $this->branch_id,
            'user_id' => $this->user_id,
            'rate' => $this->rate,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'how_do_you_prefer_the_scrubbing', $this->how_do_you_prefer_the_scrubbing])
            ->andFilterWhere(['like', 'are_you_pregnant', $this->are_you_pregnant])
            ->andFilterWhere(['like', 'are_you_recently_delivered', $this->are_you_recently_delivered])
            ->andFilterWhere(['like', 'did_you_have_a_surgery_operation_during_the_last_3_months', $this->did_you_have_a_surgery_operation_during_the_last_3_months])
            ->andFilterWhere(['like', 'when_was_your_last_laser_session', $this->when_was_your_last_laser_session])
            ->andFilterWhere(['like', 'when_last_time_you_remove_the_hair', $this->when_last_time_you_remove_the_hair])
            ->andFilterWhere(['like', 'did_you_do_a_peeling', $this->did_you_do_a_peeling])
            ->andFilterWhere(['like', 'If_yes_when', $this->If_yes_when])
            ->andFilterWhere(['like', 'which_hammam_or_body_scrub_do_you_prefer', $this->which_hammam_or_body_scrub_do_you_prefer])
            ->andFilterWhere(['like', 'rated', $this->rated])
            ->andFilterWhere(['like', 'client_signature', $this->client_signature])
            ->andFilterWhere(['like', 'tech_signature', $this->tech_signature])
            ->andFilterWhere(['like', 'date_signature', $this->date_signature])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
