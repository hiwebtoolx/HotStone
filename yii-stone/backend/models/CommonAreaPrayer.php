<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaPrayer as BaseCommonAreaPrayer;

/**
 * This is the model class for table "common_area_prayer".
 */
class CommonAreaPrayer extends BaseCommonAreaPrayer
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
            [['prayer_clean_carpets', 'prayer_check_the_good_smell', 'check_the_prayer_clothes_smell_good_and_clean_and_make_schedule_', 'lock'], 'default', 'value' => '0'],
        ]);
    }
	
}
