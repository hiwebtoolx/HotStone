<?php

namespace backend\models;

use Yii;
use \backend\models\base\CommonAreaWaiting as BaseCommonAreaWaiting;

/**
 * This is the model class for table "common_area_waiting".
 */
class CommonAreaWaiting extends BaseCommonAreaWaiting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['shift_id',], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['waiting_sweep_and_mop_floors', 'waiting_clean_tables_and_edges_of_tables', 'waiting_organize_magazines_and_promotional_materials', 'waiting_clean_the_chairs_used_by_visitors_make_sure_to_clean', 'waiting_light_the_candles', 'waiting_refill_aroma_in_the_burners', 'waiting_remove_empty_glasses', 'lock'],'default', 'value' => '0'],
        ]);
    }
	
}
