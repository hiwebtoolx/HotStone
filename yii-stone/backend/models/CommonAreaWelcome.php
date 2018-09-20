<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaWelcome as BaseCommonAreaWelcome;

/**
 * This is the model class for table "common_area_welcome".
 */
class CommonAreaWelcome extends BaseCommonAreaWelcome
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['shift_id'], 'required'],
            [['shift_id','id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['bars_remove_stains_and_dust_on_surfaces', 'bars_draw_up_the_decoration', 'bars_prepare_food_canapes', 'bars_prepare_tea_bags_sugar_cups_and_saucers', 'lock'], 'default', 'value' => '0'],
        ]);
    }
	
}
