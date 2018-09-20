<?php

namespace backend\models;

use Yii;
use \backend\models\base\Productarea as BaseProductarea;

/**
 * This is the model class for table "product_bar_area".
 */
class Productarea extends BaseProductarea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['sweep_and_mop_floors', 'remove_stains_and_dust_on_surfaces', 'clean_and_sanitize_sink', 'draw_up_the_decoration', 'clean_the_product_containers', 'checked_by', 'notes', 'shift_am', 'shift_pm', 'shift_date', 'created_at', 'updated_at', 'created_by', 'updated_by', 'lock', 'deleted_by', 'deleted_at'], 'required'],
            [['checked_by', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['notes'], 'string'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['sweep_and_mop_floors', 'remove_stains_and_dust_on_surfaces', 'clean_and_sanitize_sink', 'draw_up_the_decoration', 'clean_the_product_containers', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
