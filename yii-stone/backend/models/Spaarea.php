<?php

namespace backend\models;

use Yii;
use \backend\models\base\Spaarea as BaseSpaarea;

/**
 * This is the model class for table "spa_area".
 */
class Spaarea extends BaseSpaarea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['hammam_clean_and_sanitize_all_basins', 'hammam_clean_a_tiled_surfaces_with_a_disinfectant', 'hammam_check_ventilation_ac_is_working', 'hammam_check_aroma_system_is_working', 'hammam_sanitize_all_surfaces_with_clorox_and_detol', 'hammam_draw_up_the_decoration', 'hammam_clean_water_drean_and_put_flash_and_clorox', 'hammam_refill_aroma_in_the_burners', 'hammam_refill_spray_aroma_for_hammam', 'hammam_light_the_candles', 'hammam_the_towels_must_be_clean_flufy_and_perfumed', 'hammam_check_temperature', 'massage_clean_carpets', 'massage_clean_and_sanitize_all_basins', 'massage_clean_surrounding_basin', 'massage_check_smell_liners_of_the_bed', 'massage_draw_up_the_decoration', 'massage_empty_trash', 'massage_check_temperature_24_degrees_celsius', 'massage_remove_stains_and_dust_on_surfaces', 'massage_the_towels_must_be_clean_flufy_and_perfumed', 'massage_light_the_candles', 'massage_refill_aroma_in_the_burners', 'facial_draw_up_products', 'facial_clean_the_product_containers', 'facial_clean_and_sanitize_sink', 'facial_check_temperature', 'facial_clean_and_sanitize_shower_and_sink_unit_shiny', 'facial_check_face_bowl_water_clean_and_appropriate_decoration_', 'facial_remove_stains_and_dust_on_surfaces', 'facial_the_towels_must_be_clean_flufy_and_perfumed', 'facial_empty_trash', 'facial_light_the_candles', 'facial_refill_aroma_in_the_burners', 'ayurveda_check_ventilation_ac_is_working', 'ayurveda_clean_and_sanitize_shower_and_sink', 'ayurveda_clean_mirrors', 'ayurveda_clean_all_surfaces_with_a_disinfectant', 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed', 'ayurveda_light_the_candles', 'ayurveda_refill_aroma_in_the_burners', 'ayurveda_check_temperature', 'makeup_sweep_and_mop_floors', 'makeup_remove_stains_and_dust_on_surfaces', 'makeup_empty_trush', 'makeup_clean_and_sanitize_sink', 'makeup_clean_mirrors', 'created_at', 'updated_at', 'created_by', 'updated_by', 'checked_by', 'deleted_by', 'deleted_at', 'shift_am', 'shift_pm', 'shift_date', 'lock'], 'required'],
            [['created_at', 'updated_at', 'created_by', 'updated_by', 'checked_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['hammam_clean_and_sanitize_all_basins', 'hammam_clean_a_tiled_surfaces_with_a_disinfectant', 'hammam_check_ventilation_ac_is_working', 'hammam_check_aroma_system_is_working', 'hammam_sanitize_all_surfaces_with_clorox_and_detol', 'hammam_draw_up_the_decoration', 'hammam_clean_water_drean_and_put_flash_and_clorox', 'hammam_refill_aroma_in_the_burners', 'hammam_refill_spray_aroma_for_hammam', 'hammam_light_the_candles', 'hammam_the_towels_must_be_clean_flufy_and_perfumed', 'hammam_check_temperature', 'massage_clean_carpets', 'massage_clean_and_sanitize_all_basins', 'massage_clean_surrounding_basin', 'massage_check_smell_liners_of_the_bed', 'massage_draw_up_the_decoration', 'massage_empty_trash', 'massage_check_temperature_24_degrees_celsius', 'massage_remove_stains_and_dust_on_surfaces', 'massage_the_towels_must_be_clean_flufy_and_perfumed', 'massage_light_the_candles', 'massage_refill_aroma_in_the_burners', 'facial_draw_up_products', 'facial_clean_the_product_containers', 'facial_clean_and_sanitize_sink', 'facial_check_temperature', 'facial_clean_and_sanitize_shower_and_sink_unit_shiny', 'facial_check_face_bowl_water_clean_and_appropriate_decoration_', 'facial_remove_stains_and_dust_on_surfaces', 'facial_the_towels_must_be_clean_flufy_and_perfumed', 'facial_empty_trash', 'facial_light_the_candles', 'facial_refill_aroma_in_the_burners', 'ayurveda_check_ventilation_ac_is_working', 'ayurveda_clean_and_sanitize_shower_and_sink', 'ayurveda_clean_mirrors', 'ayurveda_clean_all_surfaces_with_a_disinfectant', 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed', 'ayurveda_light_the_candles', 'ayurveda_refill_aroma_in_the_burners', 'ayurveda_check_temperature', 'makeup_sweep_and_mop_floors', 'makeup_remove_stains_and_dust_on_surfaces', 'makeup_empty_trush', 'makeup_clean_and_sanitize_sink', 'makeup_clean_mirrors', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
