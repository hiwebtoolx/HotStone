<?php

namespace backend\models;

use Yii;
use \backend\models\base\VisitsList as BaseVisitsList;

/**
 * This is the model class for table "visits_list".
 */
class VisitsList extends BaseVisitsList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['branch_id', 'user_id', 'visit_date', 'treatment_given', 'retail_product', 'technician_name', 'comments', 'rated', 'rate', 'client_signature', 'tech_signature', 'date_signature', 'created_at', 'updated_at', 'created_by', 'updated_by', 'lock', 'deleted_by', 'deleted_at'], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['visit_date'], 'safe'],
            [['treatment_given', 'retail_product', 'comments'], 'string'],
            [['technician_name', 'client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [['rated', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
