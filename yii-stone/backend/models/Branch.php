<?php

namespace backend\models;

use Yii;
use \backend\models\base\Branch as BaseBranch;

/**
 * This is the model class for table "branch".
 */
class Branch extends BaseBranch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['title_en', 'title_ar'], 'required'],
            [['created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['title_en', 'title_ar'], 'string', 'max' => 255],
            [['lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
