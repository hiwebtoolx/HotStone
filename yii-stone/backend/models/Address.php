<?php

namespace backend\models;

use Yii;
use \backend\models\base\Address as BaseAddress;

/**
 * This is the model class for table "address".
 */
class Address extends BaseAddress
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['custome_id', 'first_name', 'address_line1', 'address_line2', 'city', 'state', 'country', 'postal_code'], 'required'],
            [['custome_id'], 'integer'],
            [['first_name'], 'string', 'max' => 128],
            [['address_line1', 'address_line2'], 'string', 'max' => 255],
            [['city', 'state', 'country'], 'string', 'max' => 64],
            [['postal_code'], 'string', 'max' => 20],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
