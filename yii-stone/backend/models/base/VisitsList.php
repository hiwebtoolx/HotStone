<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;
use common\models\User;
/**
 * This is the base model class for table "visits_list".
 *
 * @property integer $id
 * @property integer $branch_id
 * @property integer $user_id
 * @property string $visit_date
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
 * @property \backend\models\Branch $branch
 */
class VisitsList extends \yii\db\ActiveRecord
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
            [['branch_id', 'user_id'], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['visit_date'], 'safe'],
            [['treatment_given', 'retail_product', 'comments'], 'string'],
            [['technician_name', 'client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [['rated', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
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
            'branch_id' => Yii::t('hstone', 'Branch ID'),
            'user_id' => Yii::t('hstone', 'Client'),
            'visit_date' => Yii::t('hstone', 'Visit Date'),
            'treatment_given' => Yii::t('hstone', 'Treatment Given'),
            'retail_product' => Yii::t('hstone', 'Retail Product'),
            'technician_name' => Yii::t('hstone', 'Technician Name'),
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
    public function getCreatedBy()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'created_by']);
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
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(Branch::className(), ['id' => 'branch_id']);
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
     * @return \backend\models\VisitsListQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\VisitsListQuery(get_called_class());
        return $query->where(['visits_list.deleted_by' => 0]);
    }
}
