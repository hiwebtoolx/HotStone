<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Manicure;

/**
 * backend\models\ManicureSearch represents the model behind the search form about `backend\models\Manicure`.
 */
 class ManicureSearch extends Manicure
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'checked_by', 'branch_id','created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['turn_on_lights', 'read_salon_logbook_hand_over_and_plan_the_day', 'clean_sanitize_and_organize_salon_station', 'receive_supplies_and_products_for_the_station', 'turn_on_equipment_when_necessary', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh', 'organize_newspapers_magazines_promotional_materials', 'clean_and_wipe_pedicure_chairs_manicure_stations', 'clean_and_organize_nail_polish_racks', 'sweep_mop_floors', 'make_sure_there_are_no_busted_light_bulbs', 'keep_consultation_forms_inside_drawers', 'prepare_consultations_forms_with_name_of_client_on_hard_doard', 'file_consultation_forms_after_finish', 'be_sure_services_try_and_bowls_are_clean_and_organized', 'check_baskets_of_technicien_are_clean_and_organized', 'clean_and_organize_drawers_as_training', 'services_try_should_be_clean_and_organized_and_no_damaged', 'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge', 'wipe_pedicure_chair_with_conditionner', 'disposible_towel', 'tissue_box', 'nail_brush', 'cotton', 'acetone', 'cuticul_remover', 'nail_nipper', 'nail_cuter', 'nail_fail', 'pusher', 'hand_scrub', 'hand_mask', 'hand_feet_lotion', 'plastic_nilon', 'lemon', 'herbal_salt', 'hand_soak', 'parafine', 'nail_polish', 'nail_vitamin', 'towels_for_hand_and_for_feet', 'disposible_slippers', 'nail_divider', 'hand_bowl', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash', 'sterilize_tools_and_materials', 'ensure_that_supplies_tools_and_products_are_organized', 'if_there_is_not_enough_supplies_and_products', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', 'stock_as_needed', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi', 'send_to_laundry_area_dirty_linens', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights', 'notes', 'shift_am', 'shift_pm', 'shift_date', 'lock', 'turn_on_lights2', 'read_salon_logbook_hand_over_and_plan_the_day2', 'clean_sanitize_and_organize_salon_station2', 'receive_supplies_and_products_for_the_station2', 'turn_on_equipment_when_necessary2', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave2', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh2', 'organize_newspapers_magazines_promotional_materials2', 'clean_and_wipe_pedicure_chairs_manicure_stations2', 'clean_and_organize_nail_polish_racks2', 'sweep_mop_floors2', 'make_sure_there_are_no_busted_light_bulbs2', 'keep_consultation_forms_inside_drawers2', 'prepare_consultations_forms_with_name_of_client_on_hard_doard2', 'file_consultation_forms_after_finish2', 'be_sure_services_try_and_bowls_are_clean_and_organized2', 'check_baskets_of_technicien_are_clean_and_organized2', 'clean_and_organize_drawers_as_training2', 'services_try_should_be_clean_and_organized_and_no_damaged2', 'check_cleaning_basket_for_each_station_clorox_fairy_detol2', 'wipe_pedicure_chair_with_conditionner2'], 'safe'],
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
        $query = Manicure::find();
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
            'checked_by' => $this->checked_by,
            'shift_am' => $this->shift_am,
            'shift_pm' => $this->shift_pm,
            'shift_date' => $this->shift_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted_at' => $this->deleted_at,
            'deleted_by' => $this->deleted_by,
        ]);

        $query->andFilterWhere(['like', 'turn_on_lights', $this->turn_on_lights])
            ->andFilterWhere(['like', 'read_salon_logbook_hand_over_and_plan_the_day', $this->read_salon_logbook_hand_over_and_plan_the_day])
            ->andFilterWhere(['like', 'clean_sanitize_and_organize_salon_station', $this->clean_sanitize_and_organize_salon_station])
            ->andFilterWhere(['like', 'receive_supplies_and_products_for_the_station', $this->receive_supplies_and_products_for_the_station])
            ->andFilterWhere(['like', 'turn_on_equipment_when_necessary', $this->turn_on_equipment_when_necessary])
            ->andFilterWhere(['like', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave', $this->sterilize_nipper_cuticle_nail_pusher_in_autoclave])
            ->andFilterWhere(['like', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh', $this->make_sure_that_all_linens_to_be_used_at_that_station_are_fresh])
            ->andFilterWhere(['like', 'organize_newspapers_magazines_promotional_materials', $this->organize_newspapers_magazines_promotional_materials])
            ->andFilterWhere(['like', 'clean_and_wipe_pedicure_chairs_manicure_stations', $this->clean_and_wipe_pedicure_chairs_manicure_stations])
            ->andFilterWhere(['like', 'clean_and_organize_nail_polish_racks', $this->clean_and_organize_nail_polish_racks])
            ->andFilterWhere(['like', 'sweep_mop_floors', $this->sweep_mop_floors])
            ->andFilterWhere(['like', 'make_sure_there_are_no_busted_light_bulbs', $this->make_sure_there_are_no_busted_light_bulbs])
            ->andFilterWhere(['like', 'keep_consultation_forms_inside_drawers', $this->keep_consultation_forms_inside_drawers])
            ->andFilterWhere(['like', 'prepare_consultations_forms_with_name_of_client_on_hard_doard', $this->prepare_consultations_forms_with_name_of_client_on_hard_doard])
            ->andFilterWhere(['like', 'file_consultation_forms_after_finish', $this->file_consultation_forms_after_finish])
            ->andFilterWhere(['like', 'be_sure_services_try_and_bowls_are_clean_and_organized', $this->be_sure_services_try_and_bowls_are_clean_and_organized])
            ->andFilterWhere(['like', 'check_baskets_of_technicien_are_clean_and_organized', $this->check_baskets_of_technicien_are_clean_and_organized])
            ->andFilterWhere(['like', 'clean_and_organize_drawers_as_training', $this->clean_and_organize_drawers_as_training])
            ->andFilterWhere(['like', 'services_try_should_be_clean_and_organized_and_no_damaged', $this->services_try_should_be_clean_and_organized_and_no_damaged])
            ->andFilterWhere(['like', 'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge', $this->check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge])
            ->andFilterWhere(['like', 'wipe_pedicure_chair_with_conditionner', $this->wipe_pedicure_chair_with_conditionner])
            ->andFilterWhere(['like', 'disposible_towel', $this->disposible_towel])
            ->andFilterWhere(['like', 'tissue_box', $this->tissue_box])
            ->andFilterWhere(['like', 'nail_brush', $this->nail_brush])
            ->andFilterWhere(['like', 'cotton', $this->cotton])
            ->andFilterWhere(['like', 'acetone', $this->acetone])
            ->andFilterWhere(['like', 'cuticul_remover', $this->cuticul_remover])
            ->andFilterWhere(['like', 'nail_nipper', $this->nail_nipper])
            ->andFilterWhere(['like', 'nail_cuter', $this->nail_cuter])
            ->andFilterWhere(['like', 'nail_fail', $this->nail_fail])
            ->andFilterWhere(['like', 'pusher', $this->pusher])
            ->andFilterWhere(['like', 'hand_scrub', $this->hand_scrub])
            ->andFilterWhere(['like', 'hand_mask', $this->hand_mask])
            ->andFilterWhere(['like', 'hand_feet_lotion', $this->hand_feet_lotion])
            ->andFilterWhere(['like', 'plastic_nilon', $this->plastic_nilon])
            ->andFilterWhere(['like', 'lemon', $this->lemon])
            ->andFilterWhere(['like', 'herbal_salt', $this->herbal_salt])
            ->andFilterWhere(['like', 'hand_soak', $this->hand_soak])
            ->andFilterWhere(['like', 'parafine', $this->parafine])
            ->andFilterWhere(['like', 'nail_polish', $this->nail_polish])
            ->andFilterWhere(['like', 'nail_vitamin', $this->nail_vitamin])
            ->andFilterWhere(['like', 'towels_for_hand_and_for_feet', $this->towels_for_hand_and_for_feet])
            ->andFilterWhere(['like', 'disposible_slippers', $this->disposible_slippers])
            ->andFilterWhere(['like', 'nail_divider', $this->nail_divider])
            ->andFilterWhere(['like', 'hand_bowl', $this->hand_bowl])
            ->andFilterWhere(['like', 'do_necessary_cleaning_and_station_reset', $this->do_necessary_cleaning_and_station_reset])
            ->andFilterWhere(['like', 'empty_trash_bins_and_replace_fresh_liners', $this->empty_trash_bins_and_replace_fresh_liners])
            ->andFilterWhere(['like', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', $this->ensure_quiet_interaction_with_the_customer_during_the_performanc])
            ->andFilterWhere(['like', 'perform_service_according_to_standard', $this->perform_service_according_to_standard])
            ->andFilterWhere(['like', 'use_products_according_to_standard_recipes', $this->use_products_according_to_standard_recipes])
            ->andFilterWhere(['like', 'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash', $this->remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash])
            ->andFilterWhere(['like', 'sterilize_tools_and_materials', $this->sterilize_tools_and_materials])
            ->andFilterWhere(['like', 'ensure_that_supplies_tools_and_products_are_organized', $this->ensure_that_supplies_tools_and_products_are_organized])
            ->andFilterWhere(['like', 'if_there_is_not_enough_supplies_and_products', $this->if_there_is_not_enough_supplies_and_products])
            ->andFilterWhere(['like', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', $this->make_sure_that_all_tools_and_materials_to_be_used_in__are_availa])
            ->andFilterWhere(['like', 'stock_as_needed', $this->stock_as_needed])
            ->andFilterWhere(['like', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi', $this->write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi])
            ->andFilterWhere(['like', 'send_to_laundry_area_dirty_linens', $this->send_to_laundry_area_dirty_linens])
            ->andFilterWhere(['like', 'conduct_day_end_inventory_of_selected_items', $this->conduct_day_end_inventory_of_selected_items])
            ->andFilterWhere(['like', 'turn_off_all_lights', $this->turn_off_all_lights])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'lock', $this->lock])
            ->andFilterWhere(['like', 'turn_on_lights2', $this->turn_on_lights2])
            ->andFilterWhere(['like', 'read_salon_logbook_hand_over_and_plan_the_day2', $this->read_salon_logbook_hand_over_and_plan_the_day2])
            ->andFilterWhere(['like', 'clean_sanitize_and_organize_salon_station2', $this->clean_sanitize_and_organize_salon_station2])
            ->andFilterWhere(['like', 'receive_supplies_and_products_for_the_station2', $this->receive_supplies_and_products_for_the_station2])
            ->andFilterWhere(['like', 'turn_on_equipment_when_necessary2', $this->turn_on_equipment_when_necessary2])
            ->andFilterWhere(['like', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave2', $this->sterilize_nipper_cuticle_nail_pusher_in_autoclave2])
            ->andFilterWhere(['like', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh2', $this->make_sure_that_all_linens_to_be_used_at_that_station_are_fresh2])
            ->andFilterWhere(['like', 'organize_newspapers_magazines_promotional_materials2', $this->organize_newspapers_magazines_promotional_materials2])
            ->andFilterWhere(['like', 'clean_and_wipe_pedicure_chairs_manicure_stations2', $this->clean_and_wipe_pedicure_chairs_manicure_stations2])
            ->andFilterWhere(['like', 'clean_and_organize_nail_polish_racks2', $this->clean_and_organize_nail_polish_racks2])
            ->andFilterWhere(['like', 'sweep_mop_floors2', $this->sweep_mop_floors2])
            ->andFilterWhere(['like', 'make_sure_there_are_no_busted_light_bulbs2', $this->make_sure_there_are_no_busted_light_bulbs2])
            ->andFilterWhere(['like', 'keep_consultation_forms_inside_drawers2', $this->keep_consultation_forms_inside_drawers2])
            ->andFilterWhere(['like', 'prepare_consultations_forms_with_name_of_client_on_hard_doard2', $this->prepare_consultations_forms_with_name_of_client_on_hard_doard2])
            ->andFilterWhere(['like', 'file_consultation_forms_after_finish2', $this->file_consultation_forms_after_finish2])
            ->andFilterWhere(['like', 'be_sure_services_try_and_bowls_are_clean_and_organized2', $this->be_sure_services_try_and_bowls_are_clean_and_organized2])
            ->andFilterWhere(['like', 'check_baskets_of_technicien_are_clean_and_organized2', $this->check_baskets_of_technicien_are_clean_and_organized2])
            ->andFilterWhere(['like', 'clean_and_organize_drawers_as_training2', $this->clean_and_organize_drawers_as_training2])
            ->andFilterWhere(['like', 'services_try_should_be_clean_and_organized_and_no_damaged2', $this->services_try_should_be_clean_and_organized_and_no_damaged2])
            ->andFilterWhere(['like', 'check_cleaning_basket_for_each_station_clorox_fairy_detol2', $this->check_cleaning_basket_for_each_station_clorox_fairy_detol2])
            ->andFilterWhere(['like', 'wipe_pedicure_chair_with_conditionner2', $this->wipe_pedicure_chair_with_conditionner2]);

        return $dataProvider;
    }
}
