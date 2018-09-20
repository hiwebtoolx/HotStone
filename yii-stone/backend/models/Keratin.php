<?php

namespace backend\models;

use Yii;
use \backend\models\base\Keratin as BaseKeratin;

/**
 * This is the model class for table "keratin_consultation".
 */
class Keratin extends BaseKeratin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['user_id','branch_id'], 'required'],
            [['user_id','branch_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['notes'], 'string'],
            [['are_you_pregnant', 'did_you_color_your_hair', 'did_you_make_highlight', 'did_you_put_henna', 'did_you_make_hair_straightening', 'did_you_make_removing_color', 'did_you_make_keratin_before', 'rated', 'lock'], 'default', 'value' => 0],
            [['when_was_your_last_delivery', 'color_when', 'highlight_when', 'henna_when', 'straightening_when', 'removing_color_when', 'keratin_befor_when'], 'string', 'max' => 50],
            [['hair_specialist_name', 'product_name', 'client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
