<?php

namespace backend\models;

use Yii;
use \backend\models\base\HairTreatment as BaseHairTreatment;

/**
 * This is the model class for table "hair_treatment".
 */
class HairTreatment extends BaseHairTreatment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['branch_id', 'user_id', 'hair_style', 'hair_diameter', 'wash_hair', 'conditioning_product', 'heat_tool', 'major_wish', 'other_desire', 'prefer_style_hair', 'mobility_scalp', 'condition_scalp', 'ends_roots', 'resistance_hair', 'dryness_hair', 'manageability_hair'], 'required'],

            [['branch_id', 'user_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],

            [['hair_style', 'hair_diameter', 'wash_hair', 'conditioning_product', 'heat_tool', 'major_wish', 'other_desire', 'prefer_style_hair', 'mobility_scalp', 'condition_scalp', 'ends_roots', 'resistance_hair', 'dryness_hair', 'manageability_hair', 'suggested_treatment', 'product_suggested', 'comments', 'interests', 'client_review', 'client_signature', 'tech_signature'], 'string'],
            [['many_sessions'], 'string', 'max' => 45],
            [['date_signature'], 'string', 'max' => 255],
            [['rated', 'lock'], 'default', 'value' => 0],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
