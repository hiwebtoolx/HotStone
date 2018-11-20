<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "production_area_opening".
 *
 * @property integer $id
 * @property integer $shift_id
 * @property integer $turn_on_lights
 * @property string $shift_time
 * @property integer $read_salon_logbook
 * @property integer $clean_sanitize
 * @property integer $receive_supplies
 * @property integer $check_all_equipment
 * @property integer $turn_on_equipment
 * @property integer $sterilize_foot_rock
 * @property integer $organize_retail
 * @property integer $sweep_mop_floors
 * @property integer $tools_and_containers_in_the_preparation
 * @property integer $check_temperature
 * @property integer $ensure_that_ingredients
 * @property integer $ingredients_in_containers_are_properly_labeled
 * @property integer $no_busted_light_bulbs
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_at
 * @property integer $deleted_by
 * @property integer $lock
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 * @property \backend\models\ProductionArea $shift
 */
class ProductionAreaOpening extends \yii\db\ActiveRecord
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
            [['shift_id', 'turn_on_lights', 'shift_time', 'read_salon_logbook', 'clean_sanitize', 'receive_supplies', 'check_all_equipment', 'turn_on_equipment', 'sterilize_foot_rock', 'organize_retail', 'sweep_mop_floors', 'tools_and_containers_in_the_preparation', 'check_temperature', 'ensure_that_ingredients', 'ingredients_in_containers_are_properly_labeled', 'no_busted_light_bulbs', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by', 'lock'], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['shift_time'], 'safe'],
            [['turn_on_lights', 'read_salon_logbook', 'clean_sanitize', 'receive_supplies', 'check_all_equipment', 'turn_on_equipment', 'sterilize_foot_rock', 'organize_retail', 'sweep_mop_floors', 'tools_and_containers_in_the_preparation', 'check_temperature', 'ensure_that_ingredients', 'ingredients_in_containers_are_properly_labeled', 'no_busted_light_bulbs', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'production_area_opening';
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
            'id' => Yii::t('stone', 'ID'),
            'shift_id' => Yii::t('stone', 'Shift ID'),
            'turn_on_lights' => Yii::t('stone', 'Turn On Lights'),
            'shift_time' => Yii::t('stone', 'Shift Time'),
            'read_salon_logbook' => Yii::t('stone', 'Read Salon Logbook'),
            'clean_sanitize' => Yii::t('stone', 'Clean Sanitize'),
            'receive_supplies' => Yii::t('stone', 'Receive Supplies'),
            'check_all_equipment' => Yii::t('stone', 'Check All Equipment'),
            'turn_on_equipment' => Yii::t('stone', 'Turn On Equipment'),
            'sterilize_foot_rock' => Yii::t('stone', 'Sterilize Foot Rock'),
            'organize_retail' => Yii::t('stone', 'Organize Retail'),
            'sweep_mop_floors' => Yii::t('stone', 'Sweep Mop Floors'),
            'tools_and_containers_in_the_preparation' => Yii::t('stone', 'Tools And Containers In The Preparation'),
            'check_temperature' => Yii::t('stone', 'Check Temperature'),
            'ensure_that_ingredients' => Yii::t('stone', 'Ensure That Ingredients'),
            'ingredients_in_containers_are_properly_labeled' => Yii::t('stone', 'Ingredients In Containers Are Properly Labeled'),
            'no_busted_light_bulbs' => Yii::t('stone', 'No Busted Light Bulbs'),
            'lock' => Yii::t('stone', 'Lock'),
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
        return $this->hasOne(\backend\models\ProductionArea::className(), ['id' => 'shift_id']);
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
     * @return \backend\models\ProductionAreaOpeningQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\ProductionAreaOpeningQuery(get_called_class());
        return $query->where(['production_area_opening.deleted_by' => 0]);
    }
}
