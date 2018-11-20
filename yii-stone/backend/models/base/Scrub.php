<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "consult_body_scrub".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $how_do_you_prefer_the_scrubbing
 * @property integer $are_you_pregnant
 * @property integer $are_you_recently_delivered
 * @property integer $did_you_have_a_surgery_operation_during_the_last_3_months
 * @property string $when_was_your_last_laser_session
 * @property string $when_last_time_you_remove_the_hair
 * @property integer $did_you_do_a_peeling
 * @property string $If_yes_when
 * @property string $which_hammam_or_body_scrub_do_you_prefer
 * @property integer $rated
 * @property integer $rate
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property integer $created_by
 * @property integer $branch_id
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_by
 * @property integer $deleted_at
 * @property integer $lock
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $user
 */
class Scrub extends \yii\db\ActiveRecord
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
            [['user_id','branch_id', 'how_do_you_prefer_the_scrubbing','created_by', 'updated_by', 'which_hammam_or_body_scrub_do_you_prefer'], 'required'],
            [['user_id','branch_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['how_do_you_prefer_the_scrubbing'], 'string'],
            [['are_you_pregnant', 'are_you_recently_delivered', 'did_you_have_a_surgery_operation_during_the_last_3_months', 'did_you_do_a_peeling', ], 'default', 'value' => 0],
            [['when_was_your_last_laser_session', 'when_last_time_you_remove_the_hair', 'If_yes_when', 'which_hammam_or_body_scrub_do_you_prefer', 'client_signature', 'tech_signature', 'date_signature'], 'string', 'max' => 255],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consult_body_scrub';
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
            'how_do_you_prefer_the_scrubbing' => Yii::t('hstone', 'How Do You Prefer The Scrubbing?'),
            'are_you_pregnant' => Yii::t('hstone', 'Are You Pregnant?'),
            'are_you_recently_delivered' => Yii::t('hstone', 'Are You Recently Delivered?'),
            'did_you_have_a_surgery_operation_during_the_last_3_months' => Yii::t('hstone', 'Did You Have A Surgery Operation During The Last 3 Months?'),
            'when_was_your_last_laser_session' => Yii::t('hstone', 'When Was Your Last Laser Session?'),
            'when_last_time_you_remove_the_hair' => Yii::t('hstone', 'When last time you remove the hair by waxing or halawa or shaving?'),
            'did_you_do_a_peeling' => Yii::t('hstone', 'Did you do a peeling for your body or your face?'),
            'If_yes_when' => Yii::t('hstone', 'If Yes When?'),
            'which_hammam_or_body_scrub_do_you_prefer' => Yii::t('hstone', 'Which Hammam Or Body Scrub Do You Prefer?'),
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
     * @return \backend\models\ScrubQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\ScrubQuery(get_called_class());

        return $query->where(['consult_body_scrub.deleted_by' => 0]);
    }
}
