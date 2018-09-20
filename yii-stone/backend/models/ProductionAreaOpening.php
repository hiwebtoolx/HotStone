<?php

namespace backend\models;

use Yii;
use \backend\models\base\ProductionAreaOpening as BaseProductionAreaOpening;

/**
 * This is the model class for table "production_area_opening".
 */
class ProductionAreaOpening extends BaseProductionAreaOpening
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['shift_id', 'turn_on_lights', 'shift_time', 'read_salon_logbook', 'clean_sanitize', 'receive_supplies', 'check_all_equipment', 'turn_on_equipment', 'sterilize_foot_rock', 'organize_retail', 'sweep_mop_floors', 'tools_and_containers_in_the_preparation', 'check_temperature', 'ensure_that_ingredients', 'ingredients_in_containers_are_properly_labeled', 'no_busted_light_bulbs', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by', 'lock'], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['shift_time'], 'safe'],
            [['turn_on_lights', 'read_salon_logbook', 'clean_sanitize', 'receive_supplies', 'check_all_equipment', 'turn_on_equipment', 'sterilize_foot_rock', 'organize_retail', 'sweep_mop_floors', 'tools_and_containers_in_the_preparation', 'check_temperature', 'ensure_that_ingredients', 'ingredients_in_containers_are_properly_labeled', 'no_busted_light_bulbs', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
