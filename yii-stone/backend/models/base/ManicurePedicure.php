<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "manicure_pedicure".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $diabetes
 * @property integer $cuts
 * @property integer $eczema
 * @property integer $psoriasis
 * @property integer $viens_problems
 * @property integer $arthritis
 * @property integer $medical_oedema
 * @property integer $recent_fectures
 * @property string $others
 * @property string $cuticle_condition
 * @property string $blood_circulation
 * @property integer $rated
 * @property integer $rate
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property integer $created_by
 * @property integer $created_at
 * @property integer $updated_by
 * @property integer $updated_at
 * @property integer $lock
 * @property integer $deleted_by
 * @property integer $deleted_at
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $user
 */
class ManicurePedicure extends \yii\db\ActiveRecord
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
            [['user_id','branch_id',  'cuticle_condition', 'blood_circulation'], 'required'],
            [['user_id', 'rate','branch_id', 'created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['others', 'cuticle_condition', 'blood_circulation'], 'string'],
            [['diabetes', 'cuts', 'eczema', 'psoriasis', 'viens_problems', 'arthritis', 'medical_oedema', 'recent_fectures', 'rated', 'lock'], 'default', 'value' => 0],
            [['client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manicure_pedicure';
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
            'user_id' => Yii::t('hstone', 'Client'),
            'diabetes' => Yii::t('hstone', 'Diabetes'),
            'cuts' => Yii::t('hstone', 'Cuts'),
            'eczema' => Yii::t('hstone', 'Eczema'),
            'psoriasis' => Yii::t('hstone', 'Psoriasis'),
            'viens_problems' => Yii::t('hstone', 'Viens Problems'),
            'arthritis' => Yii::t('hstone', 'Arthritis'),
            'medical_oedema' => Yii::t('hstone', 'Medical Oedema'),
            'recent_fectures' => Yii::t('hstone', 'Recent Fectures'),
            'others' => Yii::t('hstone', 'Others'),
            'cuticle_condition' => Yii::t('hstone', 'Cuticle Condition'),
            'blood_circulation' => Yii::t('hstone', 'Blood Circulation'),
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
     * @return \backend\models\ManicurePedicureQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\ManicurePedicureQuery(get_called_class());
        return $query->where(['manicure_pedicure.deleted_by' => 0]);
    }
}
