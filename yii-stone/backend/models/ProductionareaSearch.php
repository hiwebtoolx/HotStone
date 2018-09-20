<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProductionArea;

/**
 * backend\models\ProductionareaSearch represents the model behind the search form about `backend\models\ProductionArea`.
 */
 class ProductionareaSearch extends ProductionArea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'checked_by','branch_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['turn_on_lights', 'read_salon_logbook', 'clean_sanitize', 'receive_supplies', 'check_all_equipment', 'turn_on_equipment', 'sterilize_foot_rock', 'organize_retail', 'sweep_mop_floors', 'tools_and_containers_in_the_preparation', 'check_temperature', 'ensure_that_ingredients', 'ingredients_in_containers_are_properly_labeled', 'no_busted_light_bulbs', 'check_supplies_and_products', 'greek_yoghurt', 'fresh_ginger', 'cucumber', 'lemon', 'frech_flowers', 'mud', 'black_soap', 'massage_oil', 'oat_mail_mask', 'body_scrub', 'lulur_scrub', 'body_lotion', 'shampo', 'conditionner', 'shower_gel', 'bloosom_water', 'amber_salt', 'henna', 'oriental_bokhour', 'gold', 'pearl', 'activator', 'cellulate_cream', 'cweed_wrap', 'record_waste', 'do_necessary_cleaning', 'empty_trash', 'ensure_quiet_interaction', 'perform_service', 'use_products', 'write_on_logbook_to_hand_over', 'send_to_laundry', 'deplug_herbal_steamer', 'clean_product_bowls', 'put_herbal_pack', 'turn_off_all_lights', 'notes', 'shift_am', 'shift_pm', 'shift_date', 'lock'], 'safe'],
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
        $query = ProductionArea::find();
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
            'branch_id' => $this->branch_id,
            'shift_date' => $this->shift_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted_at' => $this->deleted_at,
            'deleted_by' => $this->deleted_by,
        ]);

        $query->andFilterWhere(['like', 'turn_on_lights', $this->turn_on_lights])
            ->andFilterWhere(['like', 'read_salon_logbook', $this->read_salon_logbook])
            ->andFilterWhere(['like', 'clean_sanitize', $this->clean_sanitize])
            ->andFilterWhere(['like', 'receive_supplies', $this->receive_supplies])
            ->andFilterWhere(['like', 'check_all_equipment', $this->check_all_equipment])
            ->andFilterWhere(['like', 'turn_on_equipment', $this->turn_on_equipment])
            ->andFilterWhere(['like', 'sterilize_foot_rock', $this->sterilize_foot_rock])
            ->andFilterWhere(['like', 'organize_retail', $this->organize_retail])
            ->andFilterWhere(['like', 'sweep_mop_floors', $this->sweep_mop_floors])
            ->andFilterWhere(['like', 'tools_and_containers_in_the_preparation', $this->tools_and_containers_in_the_preparation])
            ->andFilterWhere(['like', 'check_temperature', $this->check_temperature])
            ->andFilterWhere(['like', 'ensure_that_ingredients', $this->ensure_that_ingredients])
            ->andFilterWhere(['like', 'ingredients_in_containers_are_properly_labeled', $this->ingredients_in_containers_are_properly_labeled])
            ->andFilterWhere(['like', 'no_busted_light_bulbs', $this->no_busted_light_bulbs])
            ->andFilterWhere(['like', 'check_supplies_and_products', $this->check_supplies_and_products])
            ->andFilterWhere(['like', 'greek_yoghurt', $this->greek_yoghurt])
            ->andFilterWhere(['like', 'fresh_ginger', $this->fresh_ginger])
            ->andFilterWhere(['like', 'cucumber', $this->cucumber])
            ->andFilterWhere(['like', 'lemon', $this->lemon])
            ->andFilterWhere(['like', 'frech_flowers', $this->frech_flowers])
            ->andFilterWhere(['like', 'mud', $this->mud])
            ->andFilterWhere(['like', 'black_soap', $this->black_soap])
            ->andFilterWhere(['like', 'massage_oil', $this->massage_oil])
            ->andFilterWhere(['like', 'oat_mail_mask', $this->oat_mail_mask])
            ->andFilterWhere(['like', 'body_scrub', $this->body_scrub])
            ->andFilterWhere(['like', 'lulur_scrub', $this->lulur_scrub])
            ->andFilterWhere(['like', 'body_lotion', $this->body_lotion])
            ->andFilterWhere(['like', 'shampo', $this->shampo])
            ->andFilterWhere(['like', 'conditionner', $this->conditionner])
            ->andFilterWhere(['like', 'shower_gel', $this->shower_gel])
            ->andFilterWhere(['like', 'bloosom_water', $this->bloosom_water])
            ->andFilterWhere(['like', 'amber_salt', $this->amber_salt])
            ->andFilterWhere(['like', 'henna', $this->henna])
            ->andFilterWhere(['like', 'oriental_bokhour', $this->oriental_bokhour])
            ->andFilterWhere(['like', 'gold', $this->gold])
            ->andFilterWhere(['like', 'pearl', $this->pearl])
            ->andFilterWhere(['like', 'activator', $this->activator])
            ->andFilterWhere(['like', 'cellulate_cream', $this->cellulate_cream])
            ->andFilterWhere(['like', 'cweed_wrap', $this->cweed_wrap])
            ->andFilterWhere(['like', 'record_waste', $this->record_waste])
            ->andFilterWhere(['like', 'do_necessary_cleaning', $this->do_necessary_cleaning])
            ->andFilterWhere(['like', 'empty_trash', $this->empty_trash])
            ->andFilterWhere(['like', 'ensure_quiet_interaction', $this->ensure_quiet_interaction])
            ->andFilterWhere(['like', 'perform_service', $this->perform_service])
            ->andFilterWhere(['like', 'use_products', $this->use_products])
            ->andFilterWhere(['like', 'write_on_logbook_to_hand_over', $this->write_on_logbook_to_hand_over])
            ->andFilterWhere(['like', 'send_to_laundry', $this->send_to_laundry])
            ->andFilterWhere(['like', 'deplug_herbal_steamer', $this->deplug_herbal_steamer])
            ->andFilterWhere(['like', 'clean_product_bowls', $this->clean_product_bowls])
            ->andFilterWhere(['like', 'put_herbal_pack', $this->put_herbal_pack])
            ->andFilterWhere(['like', 'turn_off_all_lights', $this->turn_off_all_lights])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
