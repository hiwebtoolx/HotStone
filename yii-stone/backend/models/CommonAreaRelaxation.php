<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaRelaxation as BaseCommonAreaRelaxation;

/**
 * This is the model class for table "common_area_relaxation".
 */
class CommonAreaRelaxation extends BaseCommonAreaRelaxation
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
            [['relaxation_sweep_and_mop_floors', 'relaxation_clean_furniture_dust', 'relaxation_remove_stains_and_dust_on_surfaces', 'relaxation_empty_trash', 'relaxation_light_the_candles', 'relaxation_refill_aroma_in_the_burners', 'relaxation_draw_up_the_decoration', 'relaxation_check_temperature_25_degrees_celsius', 'relaxation_clean_mirrors', 'lock'], 'default', 'value' => '0'],
        ]);
    }
	
}
