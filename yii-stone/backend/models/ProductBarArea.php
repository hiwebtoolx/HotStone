<?php

namespace backend\models;

use Yii;
use \backend\models\base\ProductBarArea as BaseProductBarArea;

/**
 * This is the model class for table "product_bar_area".
 */
class ProductBarArea extends BaseProductBarArea
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
            [['sweep_and_mop_floors', 'remove_stains_and_dust_on_surfaces', 'clean_and_sanitize_sink', 'draw_up_the_decoration', 'clean_the_product_containers', 'lock'], 'default', 'value' => 0],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
