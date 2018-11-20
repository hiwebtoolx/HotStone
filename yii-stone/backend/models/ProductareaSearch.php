<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Productarea;

/**
 * backend\models\ProductareaSearch represents the model behind the search form about `backend\models\Productarea`.
 */
 class ProductareaSearch extends Productarea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'checked_by', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['sweep_and_mop_floors', 'remove_stains_and_dust_on_surfaces', 'clean_and_sanitize_sink', 'draw_up_the_decoration', 'clean_the_product_containers', 'notes', 'shift_am', 'shift_pm', 'shift_date', 'lock'], 'safe'],
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
        $query = Productarea::find();
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
            'checked_by' => $this->checked_by,
            'shift_am' => $this->shift_am,
            'shift_pm' => $this->shift_pm,
            'shift_date' => $this->shift_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'sweep_and_mop_floors', $this->sweep_and_mop_floors])
            ->andFilterWhere(['like', 'remove_stains_and_dust_on_surfaces', $this->remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'clean_and_sanitize_sink', $this->clean_and_sanitize_sink])
            ->andFilterWhere(['like', 'draw_up_the_decoration', $this->draw_up_the_decoration])
            ->andFilterWhere(['like', 'clean_the_product_containers', $this->clean_the_product_containers])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
