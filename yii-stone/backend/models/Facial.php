<?php

namespace backend\models;

use Yii;
use \backend\models\base\Facial as BaseFacial;

/**
 * This is the model class for table "facial_treatment".
 */
class Facial extends BaseFacial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['user_id','branch_id' , 'life_style', 'exercise', 'pregnancies', 'type', 'color', 'texture', 'circulation', 'muscle_tone', 'elasticity', 'imperfections_Irregularities', 'wrinkles', 'pores', 'discoloration',], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['life_style', 'exercise', 'pregnancies', 'type', 'color', 'texture', 'circulation', 'muscle_tone', 'elasticity', 'imperfections_Irregularities', 'wrinkles', 'pores', 'discoloration', 'client_review', 'client_signature', 'tech_signature', 'notes'], 'string'],
            [['age'], 'string', 'max' => 10],
            [['date_of_last_period', 'allergies', 'medication', 'varicose_veins', 'epilepsy', 'respiratory', 'major_illness', 'major_surgery', 'kidney', 'cardiac', 'metal_pins', 'diet_present', 'present_skincare_routine', 'hands', 'feet', 'miscellaneous', 'date_signature'], 'string', 'max' => 255],
            [['rated', 'lock'], 'default', 'value' => 0],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
