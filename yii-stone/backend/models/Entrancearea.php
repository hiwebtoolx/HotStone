<?php

namespace backend\models;

use Yii;
use \backend\models\base\Entrancearea as BaseEntranceArea;

/**
 * This is the model class for table "entrance_area".
 */
class EntranceArea extends BaseEntranceArea
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
            [['remove_stains_on_floors', 'clean_the_fountains', 'wipe_baseboards_of_the_door', 'clean_the_wall_fixtures', 'clean_the_sign', 'check_sign_light', 'lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
