<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaElevator as BaseCommonAreaElevator;

/**
 * This is the model class for table "common_area_elevator".
 */
class CommonAreaElevator extends BaseCommonAreaElevator
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
            [['elevator_clean_the_elevator', 'elevator_clean_the_door_exterior_the_door_interior', 'elevator_clean_buttons_carefully', 'lock'], 'default', 'value' => '0'],
        ]);
    }
	
}
