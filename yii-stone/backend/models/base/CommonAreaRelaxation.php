<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "common_area_relaxation".
 *
 * @property integer $id
 * @property integer $shift_id
 * @property integer $relaxation_sweep_and_mop_floors
 * @property integer $relaxation_clean_furniture_dust
 * @property integer $relaxation_remove_stains_and_dust_on_surfaces
 * @property integer $relaxation_empty_trash
 * @property integer $relaxation_light_the_candles
 * @property integer $relaxation_refill_aroma_in_the_burners
 * @property integer $relaxation_draw_up_the_decoration
 * @property integer $relaxation_check_temperature_25_degrees_celsius
 * @property integer $relaxation_clean_mirrors
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
class CommonAreaRelaxation extends \yii\db\ActiveRecord
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
            [['relaxation_sweep_and_mop_floors', 'relaxation_clean_furniture_dust', 'relaxation_remove_stains_and_dust_on_surfaces', 'relaxation_empty_trash', 'relaxation_light_the_candles', 'relaxation_refill_aroma_in_the_burners', 'relaxation_draw_up_the_decoration', 'relaxation_check_temperature_25_degrees_celsius', 'relaxation_clean_mirrors', 'lock'], 'default', 'value' => '0'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_area_relaxation';
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
            'relaxation_sweep_and_mop_floors' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'relaxation_clean_furniture_dust' => Yii::t('hstone', 'Clean Furniture Dust'),
            'relaxation_remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'relaxation_empty_trash' => Yii::t('hstone', 'Empty Trash'),
            'relaxation_light_the_candles' => Yii::t('hstone', 'Light The Candles'),
            'relaxation_refill_aroma_in_the_burners' => Yii::t('hstone', 'Refill Aroma In The Burners'),
            'relaxation_draw_up_the_decoration' => Yii::t('hstone', 'Draw Up The Decoration'),
            'relaxation_check_temperature_25_degrees_celsius' => Yii::t('hstone', 'Check temperature 25 degrees celsius'),
            'relaxation_clean_mirrors' => Yii::t('hstone', 'Clean Mirrors'),
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
     * @return \backend\models\CommonAreaRelaxationQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\CommonAreaRelaxationQuery(get_called_class());
        return $query->where(['common_area_relaxation.deleted_by' => 0]);
    }
}
