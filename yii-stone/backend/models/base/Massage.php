<?php

namespace backend\models\base;

use tests\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "massage".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $massage_do_you_prefer
 * @property string $how_do_you_prefer_your_massage_pressure
 * @property integer $are_you_pregnant
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property integer $created_by
 * @property integer $branch_id
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $lock
 * @property integer $reted
 * @property integer $rate
 * @property integer $deleted_by
 * @property integer $deleted_at
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $user
 */
class Massage extends \yii\db\ActiveRecord
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
            [['user_id','branch_id', 'massage_do_you_prefer', 'how_do_you_prefer_your_massage_pressure'], 'required'],
            [['user_id','branch_id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'rate', 'deleted_by', 'deleted_at'], 'integer'],
            [['how_do_you_prefer_your_massage_pressure'], 'string'],
            [['massage_do_you_prefer', 'client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [[ 'lock'], 'string', 'max' => 1],
            [['lock','are_you_pregnant','reted'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'massage';
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
            'user_id' => Yii::t('hstone', 'User'),
            'massage_do_you_prefer' => Yii::t('hstone', 'Massage Do You Prefer'),
            'how_do_you_prefer_your_massage_pressure' => Yii::t('hstone', 'How Do You Prefer Your Massage Pressure'),
            'are_you_pregnant' => Yii::t('hstone', 'Are You Pregnant'),
            'client_signature' => Yii::t('hstone', 'Client Signature'),
            'tech_signature' => Yii::t('hstone', 'Tech Signature'),
            'date_signature' => Yii::t('hstone', 'Date Signature'),
            'lock' => Yii::t('hstone', 'Lock'),
            'reted' => Yii::t('hstone', 'Reted'),
            'rate' => Yii::t('hstone', 'Rate'),
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
        return $this->hasOne(\common\models\User::className(), ['id' => 'created_by']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'updated_by']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
    }
    
    /**
     * @inheritdoc
     * @return array mixed
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => time(),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
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
     * @return \backend\models\MassageQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\MassageQuery(get_called_class());
        return $query->where(['massage.deleted_by' => 0]);
    }
}
