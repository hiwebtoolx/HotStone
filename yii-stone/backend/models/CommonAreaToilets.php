<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaToilets as BaseCommonAreaToilets;

/**
 * This is the model class for table "common_area_toilets".
 */
class CommonAreaToilets extends BaseCommonAreaToilets
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['shift_id', ], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['toilet_clean_and_sanitize_sink', 'toilet_clean_a_tiled_surfaces_with_a_disinfectant', 'toilet_clean_toilets_inside_and_out', 'toilet_check_the_good_smell', 'toreplenish_consumable_items__soap_toilet_rolls_paper_towels_etc', 'toilet_clean_the_dispensers_and_other_wall_fixtures', 'clean_the_exterior_of_trash_containers_especially_surfaces_touch', 'toilet_seats_to_be_cleaned_on_both_sides_using_a_disinfectant', 'toilet_sweep_and_mop_floors', 'toilet_check_toilet_flushing_is_fuctioning', 'lock'], 'default', 'value' => '0'],
        ]);
    }
	
}
