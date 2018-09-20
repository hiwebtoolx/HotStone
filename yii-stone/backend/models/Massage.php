<?php

namespace backend\models;

use Yii;
use \backend\models\base\Massage as BaseMassage;

/**
 * This is the model class for table "massage".
 */
class Massage extends BaseMassage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['user_id','branch_id', 'massage_do_you_prefer', 'how_do_you_prefer_your_massage_pressure'], 'required'],
            [['user_id','branch_id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'rate', 'deleted_by', 'deleted_at'], 'integer'],
            [['how_do_you_prefer_your_massage_pressure'], 'string'],
            [['massage_do_you_prefer', 'client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [[ 'lock'], 'string', 'max' => 1],
            [['lock','are_you_pregnant','reted'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
