<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaBackzone as BaseCommonAreaBackzone;

/**
 * This is the model class for table "common_area_backzone".
 */
class CommonAreaBackzone extends BaseCommonAreaBackzone
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
            [['backzone_check_the_place_is_clean_no_object_no_trash', 'backzone_sweep_and_mop_floors', 'backzone_clean_and_sanitize_a_big_trush_countainer', 'backzone_clean_and_sanitize_sink', 'lock'],'default', 'value' => '0'],
        ]);
    }
	
}
