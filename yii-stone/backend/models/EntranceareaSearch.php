<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Entrancearea;

/**
 * backend\models\EntranceareaSearch represents the model behind the search form about `backend\models\Entrancearea`.
 */
 class EntranceareaSearch extends Entrancearea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at', 'checked_by'], 'integer'],
            [['remove_stains_on_floors', 'clean_the_fountains', 'wipe_baseboards_of_the_door', 'clean_the_wall_fixtures', 'clean_the_sign', 'check_sign_light', 'lock', 'shift_am', 'shift_pm', 'shift_date', 'notes'], 'safe'],
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
        $query = Entrancearea::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
            'shift_am' => $this->shift_am,
            'shift_pm' => $this->shift_pm,
            'shift_date' => $this->shift_date,
            'checked_by' => $this->checked_by,
        ]);

        $query->andFilterWhere(['like', 'remove_stains_on_floors', $this->remove_stains_on_floors])
            ->andFilterWhere(['like', 'clean_the_fountains', $this->clean_the_fountains])
            ->andFilterWhere(['like', 'wipe_baseboards_of_the_door', $this->wipe_baseboards_of_the_door])
            ->andFilterWhere(['like', 'clean_the_wall_fixtures', $this->clean_the_wall_fixtures])
            ->andFilterWhere(['like', 'clean_the_sign', $this->clean_the_sign])
            ->andFilterWhere(['like', 'check_sign_light', $this->check_sign_light])
            ->andFilterWhere(['like', 'lock', $this->lock])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
