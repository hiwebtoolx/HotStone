<?php

namespace backend\models;

use Yii;
use \backend\models\base\Acrylic as BaseAcrylic;
use yii\rbac\Rule;
use mdm\admin\components\Configs;
/**
 * This is the model class for table "acrylic_gel".
 */
class Acrylic extends BaseAcrylic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['user_id','branch_id'], 'required'],
            [['user_id', 'rate','branch_id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by','rated', 'daleted_at'], 'integer'],
            [['client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [['lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
