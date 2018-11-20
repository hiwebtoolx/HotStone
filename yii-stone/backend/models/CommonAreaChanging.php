<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaChanging as BaseCommonAreaChanging;

/**
 * This is the model class for table "common_area_changing".
 */
class CommonAreaChanging extends BaseCommonAreaChanging
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
            [['changing_sweep_and_mop_floors', 'changing_clean_carpets', 'changing_collect_dirty_towels_and_give_it_to_the_laundry_service', 'changing_collect_used_footwear_and_put_it_in_red_container', 'provide_towels_disposables_panty_bra_and_slippers_in_cabinetscha', 'lock'],'default', 'value' => '0'],
        ]);
    }
	
}
