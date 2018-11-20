<?php

namespace backend\models\base;

use Yii;
use common\models\User;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "hair_colour".
 *
 * @property integer $id
 * @property integer $branch_id
 * @property integer $user_id
 * @property string $texture
 * @property string $condition
 * @property string $natural_form
 * @property string $natural_colour
 * @property string $amount_grey
 * @property string $existing_treatment
 * @property string $scalpskin_condition
 * @property string $colouration_given
 * @property string $number_used
 * @property string $product_suggested
 * @property string $comments
 * @property integer $rated
 * @property integer $rate
 * @property string $interests
 * @property string $client_review
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $lock
 * @property integer $deleted_by
 * @property integer $deleted_at
 *
 * @property \backend\models\User $user
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 */
class HairColour extends \yii\db\ActiveRecord
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
            'user',
            'createdBy',
            'updatedBy',
            'branch'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'user_id','texture', 'condition', 'natural_form', 'natural_colour', 'amount_grey', 'existing_treatment', 'scalpskin_condition', 'colouration_given', 'number_used' ], 'required'],
            [['branch_id', 'user_id', 'rate','number_used', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['texture', 'condition', 'natural_form', 'natural_colour', 'amount_grey', 'existing_treatment', 'scalpskin_condition', 'colouration_given',  'product_suggested', 'comments', 'client_review', 'client_signature', 'tech_signature'], 'string'],
            //[[ 'lock'], 'string', 'max' => 1],
            [['date_signature'], 'string', 'max' => 255] ,
            [['rated', 'lock'], 'default', 'value' => 0],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hair_colour';
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
            'branch_id' => Yii::t('hstone', 'Branch'),
            'user_id' => Yii::t('hstone', 'User'),
            'texture' => Yii::t('hstone', 'Texture'),
            'condition' => Yii::t('hstone', 'Condition'),
            'natural_form' => Yii::t('hstone', 'Natural Form'),
            'natural_colour' => Yii::t('hstone', 'Natural Colour'),
            'amount_grey' => Yii::t('hstone', 'Amount Of Grey'),
            'existing_treatment' => Yii::t('hstone', 'Existing hair treatment'),
            'scalpskin_condition' => Yii::t('hstone', 'Scalp and skin condition'),
            'colouration_given' => Yii::t('hstone', 'Colouration Given'),
            'number_used' => Yii::t('hstone', 'Number Colour used'),
            'product_suggested' => Yii::t('hstone', 'Product Suggested'),
            'comments' => Yii::t('hstone', 'Comments'),
            'rated' => Yii::t('hstone', 'Rated'),
            'rate' => Yii::t('hstone', 'Rate'),
            'interests' => Yii::t('hstone', 'Interests'),
            'client_review' => Yii::t('hstone', 'Client Review'),
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
        return $this->hasOne(Branch::className(), ['id' => 'branch_id']);
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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
     * @return \backend\models\HairColourQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\HairColourQuery(get_called_class());
        return $query->where(['hair_colour.deleted_by' => 0]);
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
