<?php

namespace backend\models;

use Yii;
use \backend\models\base\Spa as BaseSpa;

/**
 * This is the model class for table "spa".
 */
class Spa extends BaseSpa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [[ 'shift_am', 'shift_pm', 'shift_date','branch_id' ], 'required'],
            [['notes'], 'string'],
            [['checked_by', 'created_at','branch_id', 'branch_id','updated_at',  'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['turn_on_dim_lights', 'read_spa_logbook_handover', 'facial_room', 'massage_room', 'hammam_bath', 'ayurveda_room', 'relaxation_room', 'lit_candles_and_aroma_burners', 'check_ventilation_ac_is_working', 'check_Aroma_system_is_working', 'check_hammam_steamer_is_working', 'check_smell_drain', 'receive_supplies_and_products', 'be_sure_that_all_equipment', 'turn_on_equipment_when_necessary', 'check_water_temperature', 'make_sure_that_all_linens_to_fresh', 'clean_and_wipe_facial_chairs_and_mirrors', 'set_massage_beds', 'make_sure_that_all_cart_and_trolleys_are_clean', 'sweep_and_mop_floors', 'prepare_hot_towels_and_robes', 'check_temperature_humidity', 'make_sure_there_are_no_busted_light_bulbs', 'check_supplies_and_products', 'face_towels', 'cotton', 'ear_cotton', 'hair_band', 'cleanser', 'make_up_remover', 'face_wach', 'tonic', 'facial_scrub', 'mask_different_skin_type', 'massage_cream_or_oil', 'ampoule', 'distilate_water', 'check_facial_unit_is_working', 'disposable_towels', 'handheld_mirrors', 'spoon', 'mixing_bowl', 'towel_bowl', 'disposable_gloves', 'robes_towels', 'disposible_panty', 'disposible_bra', 'disposible_slippers', 'candles', 'aroma', 'plastic_sheets', 'hammam_morrocan_lifa', 'hammam_robes_towels', 'hammam_disposible_panty', 'hammam_disposible_bra', 'hammam_disposible_slippers', 'hammam_products', 'hammam_candles', 'hammam_aroma', 'hammam_plastic_sheets', 'body_treatment_products', 'body_robes_towels', 'body_disposible_panty', 'body_disposible_bra', 'body_disposible_slippers', 'body_products_for_body_treatment', 'body_candles', 'body_aroma', 'body_plastic_sheets', 'moroccan_tea_herbal_tea', 'water_detox_water', 'cake_snacks', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', 'ensure_that_supplies_tools_and_or_products', 'is_not_enough_supplies_and_products_request_for_stocks', 'all_tools_and_materials_to_be_used_in__are_available', 'stock_as_needed', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups_and_glasses', 'sterilize_tools_and_materials', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first', 'send_to_laundry_area_dirty_linens_used_towles', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights_and_ac', 'keep_ventilation_open', 'be_sure_bowls_is_empty_and_clean', 'empty_trash', 'lock', 'turn_on_dim_lights2', 'read_spa_logbook_handover2', 'facial_room2', 'massage_room2', 'hammam_bath2', 'ayurveda_room2', 'relaxation_room2', 'lit_candles_and_aroma_burners2', 'check_ventilation_ac_is_working2', 'check_Aroma_system_is_working2', 'check_hammam_steamer_is_working2', 'check_smell_drain2', 'receive_supplies_and_products2', 'be_sure_that_all_equipment2', 'turn_on_equipment_when_necessary2', 'check_water_temperature2', 'make_sure_that_all_linens_to_fresh2', 'clean_and_wipe_facial_chairs_and_mirrors2', 'set_massage_beds2', 'make_sure_that_all_cart_and_trolleys_are_clean2', 'sweep_and_mop_floors2', 'prepare_hot_towels_and_robes2', 'check_temperature_humidity2', 'make_sure_there_are_no_busted_light_bulbs2'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
