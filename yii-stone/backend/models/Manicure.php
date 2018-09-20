<?php

namespace backend\models;

use Yii;
use \backend\models\base\Manicure as BaseManicure;

/**
 * This is the model class for table "manicure".
 */
class Manicure extends BaseManicure
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [[ 'shift_am', 'shift_pm','branch_id' ,'shift_date'], 'required'],
            [['notes'], 'string'],
            [['checked_by', 'created_at', 'updated_at','branch_id', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['turn_on_lights', 'read_salon_logbook_hand_over_and_plan_the_day', 'clean_sanitize_and_organize_salon_station', 'receive_supplies_and_products_for_the_station', 'turn_on_equipment_when_necessary', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh', 'organize_newspapers_magazines_promotional_materials', 'clean_and_wipe_pedicure_chairs_manicure_stations', 'clean_and_organize_nail_polish_racks', 'sweep_mop_floors', 'make_sure_there_are_no_busted_light_bulbs', 'keep_consultation_forms_inside_drawers', 'prepare_consultations_forms_with_name_of_client_on_hard_doard', 'file_consultation_forms_after_finish', 'be_sure_services_try_and_bowls_are_clean_and_organized', 'check_baskets_of_technicien_are_clean_and_organized', 'clean_and_organize_drawers_as_training', 'services_try_should_be_clean_and_organized_and_no_damaged', 'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge', 'wipe_pedicure_chair_with_conditionner', 'disposible_towel', 'tissue_box', 'nail_brush', 'cotton', 'acetone', 'cuticul_remover', 'nail_nipper', 'nail_cuter', 'nail_fail', 'pusher', 'hand_scrub', 'hand_mask', 'hand_feet_lotion', 'plastic_nilon', 'lemon', 'herbal_salt', 'hand_soak', 'parafine', 'nail_polish', 'nail_vitamin', 'towels_for_hand_and_for_feet', 'disposible_slippers', 'nail_divider', 'hand_bowl', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash', 'sterilize_tools_and_materials', 'ensure_that_supplies_tools_and_products_are_organized', 'if_there_is_not_enough_supplies_and_products', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', 'stock_as_needed', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi', 'send_to_laundry_area_dirty_linens', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights', 'lock', 'turn_on_lights2', 'read_salon_logbook_hand_over_and_plan_the_day2', 'clean_sanitize_and_organize_salon_station2', 'receive_supplies_and_products_for_the_station2', 'turn_on_equipment_when_necessary2', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave2', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh2', 'organize_newspapers_magazines_promotional_materials2', 'clean_and_wipe_pedicure_chairs_manicure_stations2', 'clean_and_organize_nail_polish_racks2', 'sweep_mop_floors2', 'make_sure_there_are_no_busted_light_bulbs2', 'keep_consultation_forms_inside_drawers2', 'prepare_consultations_forms_with_name_of_client_on_hard_doard2', 'file_consultation_forms_after_finish2', 'be_sure_services_try_and_bowls_are_clean_and_organized2', 'check_baskets_of_technicien_are_clean_and_organized2', 'clean_and_organize_drawers_as_training2', 'services_try_should_be_clean_and_organized_and_no_damaged2', 'check_cleaning_basket_for_each_station_clorox_fairy_detol2', 'wipe_pedicure_chair_with_conditionner2'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
