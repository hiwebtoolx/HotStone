<?php

namespace backend\models;

use Yii;
use \backend\models\base\HairColour as BaseHairColour;

/**
 * This is the model class for table "hair_colour".
 */
class HairColour extends BaseHairColour
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(), 
	    [
            [['branch_id', 'user_id','texture', 'condition', 'natural_form', 'natural_colour', 'amount_grey', 'existing_treatment', 'scalpskin_condition', 'colouration_given', 'number_used' ], 'required'],
            [['branch_id', 'user_id', 'rate','number_used', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['texture', 'condition', 'natural_form', 'natural_colour', 'amount_grey', 'existing_treatment', 'scalpskin_condition', 'colouration_given',  'product_suggested', 'comments', 'client_review', 'client_signature', 'tech_signature'], 'string'],
            //[[ 'lock'], 'string', 'max' => 1],
            [['date_signature'], 'string', 'max' => 255] ,
            [['rated', 'lock'], 'default', 'value' => 0],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
