<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "health".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $heart_disease
 * @property integer $chest_pain
 * @property integer $high_blood_pressure
 * @property integer $varicose_veins
 * @property integer $allergies
 * @property integer $bronchitis
 * @property integer $asthma
 * @property integer $dizziness
 * @property integer $headaches
 * @property integer $chemotherapy
 * @property integer $diabetes
 * @property integer $e_pilepsy
 * @property integer $otherـdiseases
 * @property string $otherـdiseases_desc
 * @property integer $allergic
 * @property string $what_causes_you_allergies
 * @property integer $lock
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property \backend\models\User $user
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $createdBy
 */
class Health extends \yii\db\ActiveRecord
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
            'updatedBy',
            'createdBy',
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
            [['user_id', 'created_at', 'updated_at','branch_id', 'created_by', 'updated_by'], 'integer'],
            [['otherـdiseases_desc', 'what_causes_you_allergies'], 'string'],
            [['heart_disease', 'chest_pain', 'high_blood_pressure', 'varicose_veins', 'allergies', 'bronchitis', 'asthma', 'dizziness', 'headaches', 'chemotherapy', 'diabetes', 'e_pilepsy', 'otherـdiseases', 'allergic'], 'default', 'value' => 0],
            [['lock'], 'default', 'value' => '0'],
            [['tech_signature'], 'safe'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'health';
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
            'heart_disease' => Yii::t('hstone', 'Heart Disease'),
            'chest_pain' => Yii::t('hstone', 'Chest Pain'),
            'high_blood_pressure' => Yii::t('hstone', 'High Blood Pressure'),
            'varicose_veins' => Yii::t('hstone', 'Varicose Veins'),
            'allergies' => Yii::t('hstone', 'Allergies'),
            'bronchitis' => Yii::t('hstone', 'Bronchitis'),
            'asthma' => Yii::t('hstone', 'Asthma'),
            'dizziness' => Yii::t('hstone', 'Dizziness'),
            'headaches' => Yii::t('hstone', 'Headaches'),
            'chemotherapy' => Yii::t('hstone', 'Chemotherapy'),
            'diabetes' => Yii::t('hstone', 'Diabetes'),
            'e_pilepsy' => Yii::t('hstone', 'E Pilepsy'),
            'otherـdiseases' => Yii::t('hstone', 'Otherـdiseases'),
            'otherـdiseases_desc' => Yii::t('hstone', 'Otherـdiseases Desc'),
            'allergic' => Yii::t('hstone', 'Allergic'),
            'what_causes_you_allergies' => Yii::t('hstone', 'What Causes You Allergies'),
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
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
     * @return \backend\models\HealthQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\HealthQuery(get_called_class());
        return $query->where(['health.deleted_by' => 0]);
    }
}
