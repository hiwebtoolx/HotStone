<?php

namespace backend\models;

use Yii;
use \backend\models\base\Health as BaseHealth;

/**
 * This is the model class for table "health".
 */
class Health extends BaseHealth
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['user_id','branch_id'], 'required'],
            [['user_id', 'created_at', 'branch_id','updated_at', 'created_by', 'updated_by'], 'integer'],
            [['otherـdiseases_desc', 'what_causes_you_allergies'], 'string'],
            [['heart_disease', 'chest_pain', 'high_blood_pressure', 'varicose_veins', 'allergies', 'bronchitis', 'asthma', 'dizziness', 'headaches', 'chemotherapy', 'diabetes', 'e_pilepsy', 'otherـdiseases', 'allergic'], 'default', 'value' => 0],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
