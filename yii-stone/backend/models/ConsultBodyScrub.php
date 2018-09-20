<?php

namespace backend\models;

use Yii;
use \backend\models\base\ConsultBodyScrub as BaseConsultBodyScrub;

/**
 * This is the model class for table "consult_body_scrub".
 */
class ConsultBodyScrub extends BaseConsultBodyScrub
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['branch_id', 'user_id',], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['how_do_you_prefer_the_scrubbing'], 'string'],
            [['are_you_pregnant', 'are_you_recently_delivered', 'did_you_have_a_surgery_operation_during_the_last_3_months', 'did_you_do_a_peeling', 'rated', 'lock'], 'string', 'max' => 1],
            [['when_was_your_last_laser_session', 'when_last_time_you_remove_the_hair', 'If_yes_when', 'which_hammam_or_body_scrub_do_you_prefer', 'client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
