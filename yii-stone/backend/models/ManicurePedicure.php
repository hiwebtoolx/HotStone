<?php

namespace backend\models;

use Yii;
use \backend\models\base\ManicurePedicure as BaseManicurePedicure;

/**
 * This is the model class for table "manicure_pedicure".
 */
class ManicurePedicure extends BaseManicurePedicure
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['user_id','branch_id',  'cuticle_condition', 'blood_circulation'], 'required'],
            [['user_id','branch_id', 'rate', 'created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['others', 'cuticle_condition', 'blood_circulation'], 'string'],
            [['diabetes', 'cuts', 'eczema', 'psoriasis', 'viens_problems', 'arthritis', 'medical_oedema', 'recent_fectures', 'rated', 'lock'], 'default', 'value' => 0],
            [['client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
