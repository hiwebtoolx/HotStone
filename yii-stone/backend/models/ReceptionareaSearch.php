<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Receptionarea;

/**
 * backend\models\ReceptionareaSearch represents the model behind the search form about `backend\models\Receptionarea`.
 */
 class ReceptionareaSearch extends Receptionarea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'checked_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['sweep_and_mop_floors', 'clean_the_chairs_used_by_staff', 'clean_behind_desk', 'clean_the_computer_keyboard_mouse_and_telephone', 'dust_chair', 'remove_stains_and_dust_on_surfaces', 'notes', 'shift_am', 'shift_pm', 'shift_date', 'lock'], 'safe'],
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
        $query = Receptionarea::find();

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
            'shift_am' => $this->shift_am,
            'shift_pm' => $this->shift_pm,
            'shift_date' => $this->shift_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'checked_by' => $this->checked_by,
            'deleted_at' => $this->deleted_at,
            'deleted_by' => $this->deleted_by,
        ]);

        $query->andFilterWhere(['like', 'sweep_and_mop_floors', $this->sweep_and_mop_floors])
            ->andFilterWhere(['like', 'clean_the_chairs_used_by_staff', $this->clean_the_chairs_used_by_staff])
            ->andFilterWhere(['like', 'clean_behind_desk', $this->clean_behind_desk])
            ->andFilterWhere(['like', 'clean_the_computer_keyboard_mouse_and_telephone', $this->clean_the_computer_keyboard_mouse_and_telephone])
            ->andFilterWhere(['like', 'dust_chair', $this->dust_chair])
            ->andFilterWhere(['like', 'remove_stains_and_dust_on_surfaces', $this->remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
