<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Spa;

/**
 * backend\models\SpaSearch represents the model behind the search form about `backend\models\Spa`.
 */
 class SpaSearch extends Spa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'checked_by', 'branch_id','created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['turn_on_dim_lights', 'read_spa_logbook_handover', 'facial_room', 'massage_room', 'hammam_bath', 'ayurveda_room', 'relaxation_room', 'lit_candles_and_aroma_burners', 'check_ventilation_ac_is_working', 'check_Aroma_system_is_working', 'check_hammam_steamer_is_working', 'check_smell_drain', 'receive_supplies_and_products', 'be_sure_that_all_equipment', 'turn_on_equipment_when_necessary', 'check_water_temperature', 'make_sure_that_all_linens_to_fresh', 'clean_and_wipe_facial_chairs_and_mirrors', 'set_massage_beds', 'make_sure_that_all_cart_and_trolleys_are_clean', 'sweep_and_mop_floors', 'prepare_hot_towels_and_robes', 'check_temperature_humidity', 'make_sure_there_are_no_busted_light_bulbs', 'check_supplies_and_products', 'face_towels', 'cotton', 'ear_cotton', 'hair_band', 'cleanser', 'make_up_remover', 'face_wach', 'tonic', 'facial_scrub', 'mask_different_skin_type', 'massage_cream_or_oil', 'ampoule', 'distilate_water', 'check_facial_unit_is_working', 'disposable_towels', 'handheld_mirrors', 'spoon', 'mixing_bowl', 'towel_bowl', 'disposable_gloves', 'robes_towels', 'disposible_panty', 'disposible_bra', 'disposible_slippers', 'candles', 'aroma', 'plastic_sheets', 'hammam_morrocan_lifa', 'hammam_robes_towels', 'hammam_disposible_panty', 'hammam_disposible_bra', 'hammam_disposible_slippers', 'hammam_products', 'hammam_candles', 'hammam_aroma', 'hammam_plastic_sheets', 'body_treatment_products', 'body_robes_towels', 'body_disposible_panty', 'body_disposible_bra', 'body_disposible_slippers', 'body_products_for_body_treatment', 'body_candles', 'body_aroma', 'body_plastic_sheets', 'moroccan_tea_herbal_tea', 'water_detox_water', 'cake_snacks', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', 'ensure_that_supplies_tools_and_or_products', 'is_not_enough_supplies_and_products_request_for_stocks', 'all_tools_and_materials_to_be_used_in__are_available', 'stock_as_needed', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups_and_glasses', 'sterilize_tools_and_materials', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first', 'send_to_laundry_area_dirty_linens_used_towles', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights_and_ac', 'keep_ventilation_open', 'be_sure_bowls_is_empty_and_clean', 'empty_trash', 'notes', 'shift_am', 'shift_pm', 'shift_date', 'lock', 'turn_on_dim_lights2', 'read_spa_logbook_handover2', 'facial_room2', 'massage_room2', 'hammam_bath2', 'ayurveda_room2', 'relaxation_room2', 'lit_candles_and_aroma_burners2', 'check_ventilation_ac_is_working2', 'check_Aroma_system_is_working2', 'check_hammam_steamer_is_working2', 'check_smell_drain2', 'receive_supplies_and_products2', 'be_sure_that_all_equipment2', 'turn_on_equipment_when_necessary2', 'check_water_temperature2', 'make_sure_that_all_linens_to_fresh2', 'clean_and_wipe_facial_chairs_and_mirrors2', 'set_massage_beds2', 'make_sure_that_all_cart_and_trolleys_are_clean2', 'sweep_and_mop_floors2', 'prepare_hot_towels_and_robes2', 'check_temperature_humidity2', 'make_sure_there_are_no_busted_light_bulbs2'], 'safe'],
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
        $query = Spa::find();
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
            'branch_id'  => $this->branch_id,
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

        $query->andFilterWhere(['like', 'turn_on_dim_lights', $this->turn_on_dim_lights])
            ->andFilterWhere(['like', 'read_spa_logbook_handover', $this->read_spa_logbook_handover])
            ->andFilterWhere(['like', 'facial_room', $this->facial_room])
            ->andFilterWhere(['like', 'massage_room', $this->massage_room])
            ->andFilterWhere(['like', 'hammam_bath', $this->hammam_bath])
            ->andFilterWhere(['like', 'ayurveda_room', $this->ayurveda_room])
            ->andFilterWhere(['like', 'relaxation_room', $this->relaxation_room])
            ->andFilterWhere(['like', 'lit_candles_and_aroma_burners', $this->lit_candles_and_aroma_burners])
            ->andFilterWhere(['like', 'check_ventilation_ac_is_working', $this->check_ventilation_ac_is_working])
            ->andFilterWhere(['like', 'check_Aroma_system_is_working', $this->check_Aroma_system_is_working])
            ->andFilterWhere(['like', 'check_hammam_steamer_is_working', $this->check_hammam_steamer_is_working])
            ->andFilterWhere(['like', 'check_smell_drain', $this->check_smell_drain])
            ->andFilterWhere(['like', 'receive_supplies_and_products', $this->receive_supplies_and_products])
            ->andFilterWhere(['like', 'be_sure_that_all_equipment', $this->be_sure_that_all_equipment])
            ->andFilterWhere(['like', 'turn_on_equipment_when_necessary', $this->turn_on_equipment_when_necessary])
            ->andFilterWhere(['like', 'check_water_temperature', $this->check_water_temperature])
            ->andFilterWhere(['like', 'make_sure_that_all_linens_to_fresh', $this->make_sure_that_all_linens_to_fresh])
            ->andFilterWhere(['like', 'clean_and_wipe_facial_chairs_and_mirrors', $this->clean_and_wipe_facial_chairs_and_mirrors])
            ->andFilterWhere(['like', 'set_massage_beds', $this->set_massage_beds])
            ->andFilterWhere(['like', 'make_sure_that_all_cart_and_trolleys_are_clean', $this->make_sure_that_all_cart_and_trolleys_are_clean])
            ->andFilterWhere(['like', 'sweep_and_mop_floors', $this->sweep_and_mop_floors])
            ->andFilterWhere(['like', 'prepare_hot_towels_and_robes', $this->prepare_hot_towels_and_robes])
            ->andFilterWhere(['like', 'check_temperature_humidity', $this->check_temperature_humidity])
            ->andFilterWhere(['like', 'make_sure_there_are_no_busted_light_bulbs', $this->make_sure_there_are_no_busted_light_bulbs])
            ->andFilterWhere(['like', 'check_supplies_and_products', $this->check_supplies_and_products])
            ->andFilterWhere(['like', 'face_towels', $this->face_towels])
            ->andFilterWhere(['like', 'cotton', $this->cotton])
            ->andFilterWhere(['like', 'ear_cotton', $this->ear_cotton])
            ->andFilterWhere(['like', 'hair_band', $this->hair_band])
            ->andFilterWhere(['like', 'cleanser', $this->cleanser])
            ->andFilterWhere(['like', 'make_up_remover', $this->make_up_remover])
            ->andFilterWhere(['like', 'face_wach', $this->face_wach])
            ->andFilterWhere(['like', 'tonic', $this->tonic])
            ->andFilterWhere(['like', 'facial_scrub', $this->facial_scrub])
            ->andFilterWhere(['like', 'mask_different_skin_type', $this->mask_different_skin_type])
            ->andFilterWhere(['like', 'massage_cream_or_oil', $this->massage_cream_or_oil])
            ->andFilterWhere(['like', 'ampoule', $this->ampoule])
            ->andFilterWhere(['like', 'distilate_water', $this->distilate_water])
            ->andFilterWhere(['like', 'check_facial_unit_is_working', $this->check_facial_unit_is_working])
            ->andFilterWhere(['like', 'disposable_towels', $this->disposable_towels])
            ->andFilterWhere(['like', 'handheld_mirrors', $this->handheld_mirrors])
            ->andFilterWhere(['like', 'spoon', $this->spoon])
            ->andFilterWhere(['like', 'mixing_bowl', $this->mixing_bowl])
            ->andFilterWhere(['like', 'towel_bowl', $this->towel_bowl])
            ->andFilterWhere(['like', 'disposable_gloves', $this->disposable_gloves])
            ->andFilterWhere(['like', 'robes_towels', $this->robes_towels])
            ->andFilterWhere(['like', 'disposible_panty', $this->disposible_panty])
            ->andFilterWhere(['like', 'disposible_bra', $this->disposible_bra])
            ->andFilterWhere(['like', 'disposible_slippers', $this->disposible_slippers])
            ->andFilterWhere(['like', 'candles', $this->candles])
            ->andFilterWhere(['like', 'aroma', $this->aroma])
            ->andFilterWhere(['like', 'plastic_sheets', $this->plastic_sheets])
            ->andFilterWhere(['like', 'hammam_morrocan_lifa', $this->hammam_morrocan_lifa])
            ->andFilterWhere(['like', 'hammam_robes_towels', $this->hammam_robes_towels])
            ->andFilterWhere(['like', 'hammam_disposible_panty', $this->hammam_disposible_panty])
            ->andFilterWhere(['like', 'hammam_disposible_bra', $this->hammam_disposible_bra])
            ->andFilterWhere(['like', 'hammam_disposible_slippers', $this->hammam_disposible_slippers])
            ->andFilterWhere(['like', 'hammam_products', $this->hammam_products])
            ->andFilterWhere(['like', 'hammam_candles', $this->hammam_candles])
            ->andFilterWhere(['like', 'hammam_aroma', $this->hammam_aroma])
            ->andFilterWhere(['like', 'hammam_plastic_sheets', $this->hammam_plastic_sheets])
            ->andFilterWhere(['like', 'body_treatment_products', $this->body_treatment_products])
            ->andFilterWhere(['like', 'body_robes_towels', $this->body_robes_towels])
            ->andFilterWhere(['like', 'body_disposible_panty', $this->body_disposible_panty])
            ->andFilterWhere(['like', 'body_disposible_bra', $this->body_disposible_bra])
            ->andFilterWhere(['like', 'body_disposible_slippers', $this->body_disposible_slippers])
            ->andFilterWhere(['like', 'body_products_for_body_treatment', $this->body_products_for_body_treatment])
            ->andFilterWhere(['like', 'body_candles', $this->body_candles])
            ->andFilterWhere(['like', 'body_aroma', $this->body_aroma])
            ->andFilterWhere(['like', 'body_plastic_sheets', $this->body_plastic_sheets])
            ->andFilterWhere(['like', 'moroccan_tea_herbal_tea', $this->moroccan_tea_herbal_tea])
            ->andFilterWhere(['like', 'water_detox_water', $this->water_detox_water])
            ->andFilterWhere(['like', 'cake_snacks', $this->cake_snacks])
            ->andFilterWhere(['like', 'do_necessary_cleaning_and_station_reset', $this->do_necessary_cleaning_and_station_reset])
            ->andFilterWhere(['like', 'empty_trash_bins_and_replace_fresh_liners', $this->empty_trash_bins_and_replace_fresh_liners])
            ->andFilterWhere(['like', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', $this->ensure_quiet_interaction_with_the_customer_during_the_performanc])
            ->andFilterWhere(['like', 'ensure_that_supplies_tools_and_or_products', $this->ensure_that_supplies_tools_and_or_products])
            ->andFilterWhere(['like', 'is_not_enough_supplies_and_products_request_for_stocks', $this->is_not_enough_supplies_and_products_request_for_stocks])
            ->andFilterWhere(['like', 'all_tools_and_materials_to_be_used_in__are_available', $this->all_tools_and_materials_to_be_used_in__are_available])
            ->andFilterWhere(['like', 'stock_as_needed', $this->stock_as_needed])
            ->andFilterWhere(['like', 'perform_service_according_to_standard', $this->perform_service_according_to_standard])
            ->andFilterWhere(['like', 'use_products_according_to_standard_recipes', $this->use_products_according_to_standard_recipes])
            ->andFilterWhere(['like', 'remove_dirty_dishes_cups_and_glasses', $this->remove_dirty_dishes_cups_and_glasses])
            ->andFilterWhere(['like', 'sterilize_tools_and_materials', $this->sterilize_tools_and_materials])
            ->andFilterWhere(['like', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first', $this->write_on_logbook_to_hand_over_concerns_to_the_next_day_first])
            ->andFilterWhere(['like', 'send_to_laundry_area_dirty_linens_used_towles', $this->send_to_laundry_area_dirty_linens_used_towles])
            ->andFilterWhere(['like', 'conduct_day_end_inventory_of_selected_items', $this->conduct_day_end_inventory_of_selected_items])
            ->andFilterWhere(['like', 'turn_off_all_lights_and_ac', $this->turn_off_all_lights_and_ac])
            ->andFilterWhere(['like', 'keep_ventilation_open', $this->keep_ventilation_open])
            ->andFilterWhere(['like', 'be_sure_bowls_is_empty_and_clean', $this->be_sure_bowls_is_empty_and_clean])
            ->andFilterWhere(['like', 'empty_trash', $this->empty_trash])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'lock', $this->lock])
            ->andFilterWhere(['like', 'turn_on_dim_lights2', $this->turn_on_dim_lights2])
            ->andFilterWhere(['like', 'read_spa_logbook_handover2', $this->read_spa_logbook_handover2])
            ->andFilterWhere(['like', 'facial_room2', $this->facial_room2])
            ->andFilterWhere(['like', 'massage_room2', $this->massage_room2])
            ->andFilterWhere(['like', 'hammam_bath2', $this->hammam_bath2])
            ->andFilterWhere(['like', 'ayurveda_room2', $this->ayurveda_room2])
            ->andFilterWhere(['like', 'relaxation_room2', $this->relaxation_room2])
            ->andFilterWhere(['like', 'lit_candles_and_aroma_burners2', $this->lit_candles_and_aroma_burners2])
            ->andFilterWhere(['like', 'check_ventilation_ac_is_working2', $this->check_ventilation_ac_is_working2])
            ->andFilterWhere(['like', 'check_Aroma_system_is_working2', $this->check_Aroma_system_is_working2])
            ->andFilterWhere(['like', 'check_hammam_steamer_is_working2', $this->check_hammam_steamer_is_working2])
            ->andFilterWhere(['like', 'check_smell_drain2', $this->check_smell_drain2])
            ->andFilterWhere(['like', 'receive_supplies_and_products2', $this->receive_supplies_and_products2])
            ->andFilterWhere(['like', 'be_sure_that_all_equipment2', $this->be_sure_that_all_equipment2])
            ->andFilterWhere(['like', 'turn_on_equipment_when_necessary2', $this->turn_on_equipment_when_necessary2])
            ->andFilterWhere(['like', 'check_water_temperature2', $this->check_water_temperature2])
            ->andFilterWhere(['like', 'make_sure_that_all_linens_to_fresh2', $this->make_sure_that_all_linens_to_fresh2])
            ->andFilterWhere(['like', 'clean_and_wipe_facial_chairs_and_mirrors2', $this->clean_and_wipe_facial_chairs_and_mirrors2])
            ->andFilterWhere(['like', 'set_massage_beds2', $this->set_massage_beds2])
            ->andFilterWhere(['like', 'make_sure_that_all_cart_and_trolleys_are_clean2', $this->make_sure_that_all_cart_and_trolleys_are_clean2])
            ->andFilterWhere(['like', 'sweep_and_mop_floors2', $this->sweep_and_mop_floors2])
            ->andFilterWhere(['like', 'prepare_hot_towels_and_robes2', $this->prepare_hot_towels_and_robes2])
            ->andFilterWhere(['like', 'check_temperature_humidity2', $this->check_temperature_humidity2])
            ->andFilterWhere(['like', 'make_sure_there_are_no_busted_light_bulbs2', $this->make_sure_there_are_no_busted_light_bulbs2]);

        return $dataProvider;
    }
}
