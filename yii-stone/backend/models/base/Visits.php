<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "visits_list".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $visit_date
 * @property string $treatment_given
 * @property string $retail_product
 * @property string $technician_name
 * @property string $comments
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
 * @property integer $deleted_by
 * @property integer $deleted_at
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $user
 */
class Visits extends \yii\db\ActiveRecord
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
            [['user_id','branch_id'  ], 'required'],
            [['user_id','branch_id', 'rate', 'created_at', 'updated_at', 'rated','created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [[  'client_signature', 'tech_signature','comments','product_suggested','interests'], 'string'],
            [['visit_date'], 'safe'],
            [[ 'date_signature'], 'string', 'max' => 255],
            //[[ 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => 0],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visits_list';
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
            'interests'=> Yii::t('hstone', 'What interests you about our products or services ?'),
            'user_id' => Yii::t('hstone', 'Client'),
            'visit_date' => Yii::t('hstone', 'Visit Date'),
            'fullname' => Yii::t('hstone', 'Fullname'),
            'email' => Yii::t('hstone', 'Email'),
            'phone' => Yii::t('hstone', 'Phone'),
            'comments' => Yii::t('hstone', 'Comments'),
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


        }else{
          
            $behaviors['blameabletime'] = [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'visit_date',
                 'value' => date('Y-m-d'), 
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
     * @return \backend\models\VisitsQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\VisitsQuery(get_called_class());
        return $query->where(['visits_list.deleted_by' => 0]);
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
