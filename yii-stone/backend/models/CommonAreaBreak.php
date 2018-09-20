<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaBreak as BaseCommonAreaBreak;

/**
 * This is the model class for table "common_area_break".
 */
class CommonAreaBreak extends BaseCommonAreaBreak
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
            [['break_sweep_and_mop_floors', 'break_clean_furniture_dust', 'break_clean_the_fridge_and_microwave', 'lock'], 'default', 'value' => '0'],
        ]);
    }
	
}
