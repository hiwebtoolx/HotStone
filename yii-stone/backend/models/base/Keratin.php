<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "keratin_consultation".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $are_you_pregnant
 * @property string $when_was_your_last_delivery
 * @property integer $did_you_color_your_hair
 * @property string $color_when
 * @property integer $did_you_make_highlight
 * @property string $highlight_when
 * @property integer $did_you_put_henna
 * @property string $henna_when
 * @property integer $did_you_make_hair_straightening
 * @property string $straightening_when
 * @property integer $did_you_make_removing_color
 * @property string $removing_color_when
 * @property integer $did_you_make_keratin_before
 * @property string $keratin_befor_when
 * @property string $hair_specialist_name
 * @property string $product_name
 * @property string $notes
 * @property integer $rated
 * @property integer $rate
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $lock
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $user
 */
class Keratin extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    private $_rt_softdelete;
    private $_rt_softrestore;

    public function __construct(){
        parent::__construct();
        $this->_rt_softdelete = [
            'deleted_by' => \Yii::$app->user->id,
            'deleted_at' => date('Y-m-d H:i:s'),
        ];
        $this->_rt_softrestore = [
            'deleted_by' => 0,
            'deleted_at' => date('Y-m-d H:i:s'),
        ];
    }

    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'createdBy',
            'updatedBy',
            'user',
            'branch'
        ];
    }

    /**
     * @inheritdoc 
     */
    public function rules()
    {
        return [
            [['user_id','branch_id'], 'required'],
            [['user_id','branch_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['notes','comments','product_suggested', 'client_signature', 'tech_signature'], 'string'],
            [['are_you_pregnant', 'did_you_color_your_hair', 'did_you_make_highlight', 'did_you_put_henna', 'did_you_make_hair_straightening', 'did_you_make_removing_color', 'did_you_make_keratin_before', 'rated', 'lock'], 'default', 'value' => 0],
            [['when_was_your_last_delivery', 'color_when', 'highlight_when', 'henna_when', 'straightening_when', 'removing_color_when', 'keratin_befor_when'], 'string', 'max' => 50],
            [['hair_specialist_name', 'product_name', 'date_signature'], 'string', 'max' => 255] 
            // [['lock'], 'default', 'value' => '0'],
            // [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keratin_consultation';
    }

    /**
     *
     * @return string
     * overwrite function optimisticLock
     * return string name of field are used to stored optimistic lock
     *
     */
    public function optimisticLock() {
        return 'lock';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('hstone', 'ID'),
            'comments' => Yii::t('hstone', 'Comments'),
            'product_suggested' => Yii::t('hstone', 'Product Suggested'),
            'user_id' => Yii::t('hstone', 'User'),
            'are_you_pregnant' => Yii::t('hstone', 'Are You Pregnant ?'),
            'when_was_your_last_delivery' => Yii::t('hstone', 'When Was Your Last Delivery ?'),
            'did_you_color_your_hair' => Yii::t('hstone', 'Did You Color Your Hair ?'),
            'color_when' => Yii::t('hstone', 'When ?'),
            'did_you_make_highlight' => Yii::t('hstone', 'Did You Make Highlight ?'),
            'highlight_when' => Yii::t('hstone', 'When ?'),
            'did_you_put_henna' => Yii::t('hstone', 'Did You Put Henna ?'),
            'henna_when' => Yii::t('hstone', 'When ?'),
            'did_you_make_hair_straightening' => Yii::t('hstone', 'Did You Make Hair Straightening ?'),
            'straightening_when' => Yii::t('hstone', 'When ?'),
            'did_you_make_removing_color' => Yii::t('hstone', 'Did You Make Removing Color ?'),
            'removing_color_when' => Yii::t('hstone', 'When ?'),
            'did_you_make_keratin_before' => Yii::t('hstone', 'Did You Make Keratin Before ?'),
            'keratin_befor_when' => Yii::t('hstone', 'When ?'),
            'hair_specialist_name' => Yii::t('hstone', 'Hair Specialist Name'),
            'product_name' => Yii::t('hstone', 'Product Name '),
            'notes' => Yii::t('hstone', 'Notes'),
            'rated' => Yii::t('hstone', 'Rated'),
            'rate' => Yii::t('hstone', 'Rate'),
            'client_signature' => Yii::t('hstone', 'Client Signature'),
            'tech_signature' => Yii::t('hstone', 'Tech Signature'),
            'date_signature' => Yii::t('hstone', 'Date Signature'),
            'lock' => Yii::t('hstone', 'Lock'),
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(\backend\models\Branch::className(), ['id' => 'branch_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    
    /**
     * @inheritdoc
     * @return array mixed
     */
    public function behaviors()
    {
        $behaviors = [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => time(),
            ],

            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
        if (Yii::$app->request->post('created_by') == '' ){
            $behaviors['blameable'] = [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ];
        } 
        return  $behaviors ; 
    }

    /**
     * The following code shows how to apply a default condition for all queries:
     *
     * ```php
     * class Customer extends ActiveRecord
     * {
     *     public static function find()
     *     {
     *         return parent::find()->where(['deleted' => false]);
     *     }
     * }
     *
     * // Use andWhere()/orWhere() to apply the default condition
     * // SELECT FROM customer WHERE `deleted`=:deleted AND age>30
     * $customers = Customer::find()->andWhere('age>30')->all();
     *
     * // Use where() to ignore the default condition
     * // SELECT FROM customer WHERE age>30
     * $customers = Customer::find()->where('age>30')->all();
     * ```
     */

    /**
     * @inheritdoc
     * @return \backend\models\KeratinQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\KeratinQuery(get_called_class());
        return $query->where(['keratin_consultation.deleted_by' => 0]);
    }

    public function fields()
    {
        $fields = parent::fields();
        $fields['created_at'] = function() {
            return date('d-m-Y',($this->created_at)) ; ;
        }; 
        return $fields;
    }
    
}
