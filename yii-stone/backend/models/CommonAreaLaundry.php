<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaLaundry as BaseCommonAreaLaundry;

/**
 * This is the model class for table "common_area_laundry".
 */
class CommonAreaLaundry extends BaseCommonAreaLaundry
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
            [['laundry_be_sure_organize_and_clean_', 'laundry_sweep_and_mop_floors', 'laundry_check_washing_and_dryer_machine_functioning_well', 'lock'],'default', 'value' => '0'],
            [['lock'], 'default', 'value' => '0'],
        ]);
    }
	
}
