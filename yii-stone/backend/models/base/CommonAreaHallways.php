<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "common_area_hallways".
 *
 * @property integer $id
 * @property integer $shift_id
 * @property integer $sweep_and_mop_floors
 * @property integer $clean_carpets
 * @property integer $remove_stains_and_dust_on_surfaces
 * @property integer $clean_pictures
 * @property integer $clean_mirrors
 * @property integer $remove_dead_flowers
 * @property integer $water_plants
 * @property integer $clean_light_switches_and_area_around_switch_on_the_wall
 * @property integer $dust_lamps
 * @property integer $detect_and_change_busted_light
 * @property integer $light_the_candles
 * @property integer $refill_aroma_in_the_burners
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
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 */
class CommonAreaHallways extends \yii\db\ActiveRecord
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
            'createdBy',
            'updatedBy'
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
            [['sweep_and_mop_floors', 'clean_carpets', 'remove_stains_and_dust_on_surfaces', 'clean_pictures', 'clean_mirrors', 'remove_dead_flowers', 'water_plants', 'clean_light_switches_and_area_around_switch_on_the_wall', 'dust_lamps', 'detect_and_change_busted_light', 'light_the_candles', 'refill_aroma_in_the_burners', 'lock'], 'default', 'value' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_area_hallways';
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
            'sweep_and_mop_floors' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'clean_carpets' => Yii::t('hstone', 'Clean Carpets'),
            'remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'clean_pictures' => Yii::t('hstone', 'Clean Pictures'),
            'clean_mirrors' => Yii::t('hstone', 'Clean Mirrors'),
            'remove_dead_flowers' => Yii::t('hstone', 'Remove Dead Flowers'),
            'water_plants' => Yii::t('hstone', 'Water Plants'),
            'clean_light_switches_and_area_around_switch_on_the_wall' => Yii::t('hstone', 'Clean Light Switches And Area Around Switch On The Wall'),
            'dust_lamps' => Yii::t('hstone', 'Dust Lamps'),
            'detect_and_change_busted_light' => Yii::t('hstone', 'Detect And Change Busted Light'),
            'light_the_candles' => Yii::t('hstone', 'Light The Candles'),
            'refill_aroma_in_the_burners' => Yii::t('hstone', 'Refill Aroma In The Burners'),
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
     * @return \backend\models\CommonAreaHallwaysQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\CommonAreaHallwaysQuery(get_called_class());
        return $query->where(['common_area_hallways.deleted_by' => 0]);
    }
}
