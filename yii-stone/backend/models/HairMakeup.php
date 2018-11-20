<?php

namespace backend\models;

use Yii;
use \backend\models\base\HairMakeup as BaseHairMakeup;

/**
 * This is the model class for table "hair_makeup".
 */
class HairMakeup extends BaseHairMakeup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [[  'shift_am', 'shift_pm','branch_id', 'shift_date'], 'required'],
            [['notes'], 'string'],
            [['checked_by', 'created_at', 'updated_at', 'branch_id','updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['turn_on_lights', 'read_salon_logbook_hand_over', 'clean_sanitize', 'receive_supplies_and_products', 'check_all_equipment', 'turn_on_equipment', 'check_water_supply', 'check_drawers', 'make_sure_that_all_linens', 'organize_newspapers', 'clean_and_wipe_salon', 'clean_and_wipe_shampoo_bowls', 'clean_and_sanitize_make_up_brush', 'cart_and_trolleys_are_clean', 'sweep_mop_floors', 'combs_and_brushes_are_clean', 'make_sure_that_all_scissors_are_sharp', 'make_sure_there_are_no_busted_light_bulbs', 'hot_cabinet_is_full_with_towel', 'turn_on_lights2', 'check_supplies_and_products', 'mixing_bowls', 'aprons', 'water_sprayers', 'applicator_brushes', 'paper_towels', 'handheld_mirrors', 'rubber_gloves', 'plastic_gloves', 'shampoos', 'conditioners', 'hair_straightening_and_perming_kits', 'styling_gels', 'serums', 'mousse', 'hair_colors', 'hair_spray', 'hair_extensions', 'make_up_remover', 'cotton', 'tissu', 'ear_cotton', 'moisturizing_cream', 'face_scrub', 'eclat_ampoule', 'the_eyelashes', 'glow_for_eyelashes', 'tweezer', 'small_cisor', 'makeup_fixator', 'makeup_brush', 'foundation_Minimum_3_pigment', 'eye_shadow', 'blusher', 'mascara', 'eyeliner', 'eyebrow_color', 'customer_robe', 'hand_sanitazer', 'hand_wash', 'high_lighter', 'contouring', 'concealer', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups', 'sterilize_tools_and_materials', 'products_are_organized_in_their_respective_compartments', 'If_there_is_not_enough_supplies_and_products', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', 'stock_as_needed', 'write_on_logbook_to_hand_over_concerns', 'send_to_laundry_area_dirty_linens', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights', 'lock', 'read_salon_logbook_hand_over2', 'clean_sanitize2', 'receive_supplies_and_products2', 'check_all_equipment2', 'turn_on_equipment2', 'check_water_supply2', 'check_drawers2', 'make_sure_that_all_linens2', 'organize_newspapers2', 'clean_and_wipe_salon2', 'clean_and_wipe_shampoo_bowls2', 'clean_and_sanitize_make_up_brush2', 'cart_and_trolleys_are_clean2', 'sweep_mop_floors2', 'combs_and_brushes_are_clean2', 'make_sure_that_all_scissors_are_sharp2', 'make_sure_there_are_no_busted_light_bulbs2', 'hot_cabinet_is_full_with_towel2'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
