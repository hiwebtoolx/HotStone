<?php

namespace backend\models;

use Yii;
use \backend\models\base\ReceptionArea as BaseReceptionArea;

/**
 * This is the model class for table "reception_area".
 */
class ReceptionArea extends BaseReceptionArea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['shift_id'], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['notes'], 'string'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['sweep_and_mop_floors', 'clean_the_chairs_used_by_staff', 'clean_behind_desk', 'clean_the_computer_keyboard_mouse_and_telephone', 'dust_chair', 'remove_stains_and_dust_on_surfaces', 'lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
