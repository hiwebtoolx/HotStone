<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaHallways as BaseCommonAreaHallways;

/**
 * This is the model class for table "common_area_hallways".
 */
class CommonAreaHallways extends BaseCommonAreaHallways
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['shift_id'], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['sweep_and_mop_floors', 'clean_carpets', 'remove_stains_and_dust_on_surfaces', 'clean_pictures', 'clean_mirrors', 'remove_dead_flowers', 'water_plants', 'clean_light_switches_and_area_around_switch_on_the_wall', 'dust_lamps', 'detect_and_change_busted_light', 'light_the_candles', 'refill_aroma_in_the_burners', 'lock'], 'default', 'value' => 0],
            [['lock'], 'default', 'value' => '0'],
        ]);
    }
	
}
