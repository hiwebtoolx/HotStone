<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "common_area_elevator".
 *
 * @property integer $id
 * @property integer $shift_id
 * @property integer $elevator_clean_the_elevator
 * @property integer $elevator_clean_the_door_exterior_the_door_interior
 * @property integer $elevator_clean_buttons_carefully
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $shift_am
 * @property string $shift_pm
 * @property integer $lock
 * @property integer $deleted_by
 * @property integer $deleted_at
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 * @property \backend\models\CommonArea $shift
 */
class CommonAreaElevator extends \yii\db\ActiveRecord
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
            'shift'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shift_id'], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['elevator_clean_the_elevator', 'elevator_clean_the_door_exterior_the_door_interior', 'elevator_clean_buttons_carefully', 'lock'], 'default', 'value' => '0'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_area_elevator';
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
            'shift_id' => Yii::t('hstone', 'Shift ID'),
            'elevator_clean_the_elevator' => Yii::t('hstone', 'Clean the elevator'),
            'elevator_clean_the_door_exterior_the_door_interior' => Yii::t('hstone', 'Clean the door exterior, the door interior'),
            'elevator_clean_buttons_carefully' => Yii::t('hstone', 'Clean buttons carefully'),
            'shift_am' => Yii::t('hstone', 'Shift Am'),
            'shift_pm' => Yii::t('hstone', 'Shift Pm'),
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
        return $this->hasOne(\backend\models\User::className(), ['id' => 'updated_by']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShift()
    {
        return $this->hasOne(\backend\models\CommonArea::className(), ['id' => 'shift_id']);
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
     * @return \backend\models\CommonAreaElevatorQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\CommonAreaElevatorQuery(get_called_class());
        return $query->where(['common_area_elevator.deleted_by' => 0]);
    }
}
