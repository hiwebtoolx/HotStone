<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "common_area_waiting".
 *
 * @property integer $id
 * @property integer $shift_id
 * @property integer $waiting_sweep_and_mop_floors
 * @property integer $waiting_clean_tables_and_edges_of_tables
 * @property integer $waiting_organize_magazines_and_promotional_materials
 * @property integer $waiting_clean_the_chairs_used_by_visitors_make_sure_to_clean
 * @property integer $waiting_light_the_candles
 * @property integer $waiting_refill_aroma_in_the_burners
 * @property integer $waiting_remove_empty_glasses
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
 * @property \backend\models\CommonArea $shift
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $createdBy
 */
class CommonAreaWaiting extends \yii\db\ActiveRecord
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
            'shift',
            'updatedBy',
            'createdBy'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shift_id', ], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['waiting_sweep_and_mop_floors', 'waiting_clean_tables_and_edges_of_tables', 'waiting_organize_magazines_and_promotional_materials', 'waiting_clean_the_chairs_used_by_visitors_make_sure_to_clean', 'waiting_light_the_candles', 'waiting_refill_aroma_in_the_burners', 'waiting_remove_empty_glasses', 'lock'], 'default', 'value' => '0'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_area_waiting';
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
            'waiting_sweep_and_mop_floors' => Yii::t('hstone', 'Sweep and mop floors'),
            'waiting_clean_tables_and_edges_of_tables' => Yii::t('hstone', 'Clean tables and edges of tables'),
            'waiting_organize_magazines_and_promotional_materials' => Yii::t('hstone', 'Organize magazines and promotional materials'),
            'waiting_clean_the_chairs_used_by_visitors_make_sure_to_clean' => Yii::t('hstone', 'Clean the chairs used by visitors. Make sure to clean the chair arm, back, seat, and other touch areas of the chair '),
            'waiting_light_the_candles' => Yii::t('hstone', 'Light the candles'),
            'waiting_refill_aroma_in_the_burners' => Yii::t('hstone', 'Refill aroma in the burners'),
            'waiting_remove_empty_glasses' => Yii::t('hstone', 'Remove empty glasses'),
            'shift_am' => Yii::t('hstone', 'Shift Am'),
            'shift_pm' => Yii::t('hstone', 'Shift Pm'),
            'lock' => Yii::t('hstone', 'Lock'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShift()
    {
        return $this->hasOne(\backend\models\CommonArea::className(), ['id' => 'shift_id']);
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
    public function getCreatedBy()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'created_by']);
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
     * @return \backend\models\CommonAreaWaitingQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\CommonAreaWaitingQuery(get_called_class());
        return $query->where(['common_area_waiting.deleted_by' => 0]);
    }
}
