<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "common_area_toilets".
 *
 * @property integer $id
 * @property integer $shift_id
 * @property integer $toilet_clean_and_sanitize_sink
 * @property integer $toilet_clean_a_tiled_surfaces_with_a_disinfectant
 * @property integer $toilet_clean_toilets_inside_and_out
 * @property integer $toilet_check_the_good_smell
 * @property integer $toreplenish_consumable_items__soap_toilet_rolls_paper_towels_etc
 * @property integer $toilet_clean_the_dispensers_and_other_wall_fixtures
 * @property integer $clean_the_exterior_of_trash_containers_especially_surfaces_touch
 * @property integer $toilet_seats_to_be_cleaned_on_both_sides_using_a_disinfectant
 * @property integer $toilet_sweep_and_mop_floors
 * @property integer $toilet_check_toilet_flushing_is_fuctioning
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
class CommonAreaToilets extends \yii\db\ActiveRecord
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
            [['shift_id'], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['toilet_clean_and_sanitize_sink', 'toilet_clean_a_tiled_surfaces_with_a_disinfectant', 'toilet_clean_toilets_inside_and_out', 'toilet_check_the_good_smell', 'toreplenish_consumable_items__soap_toilet_rolls_paper_towels_etc', 'toilet_clean_the_dispensers_and_other_wall_fixtures', 'clean_the_exterior_of_trash_containers_especially_surfaces_touch', 'toilet_seats_to_be_cleaned_on_both_sides_using_a_disinfectant', 'toilet_sweep_and_mop_floors', 'toilet_check_toilet_flushing_is_fuctioning', 'lock'], 'default', 'value' => '0'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_area_toilets';
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
            'toilet_clean_and_sanitize_sink' => Yii::t('hstone', 'Clean and sanitize sink'),
            'toilet_clean_a_tiled_surfaces_with_a_disinfectant' => Yii::t('hstone', 'Clean a tiled surfaces with a disinfectant'),
            'toilet_clean_toilets_inside_and_out' => Yii::t('hstone', 'Clean toilets inside and out'),
            'toilet_check_the_good_smell' => Yii::t('hstone', 'Check the good smell'),
            'toreplenish_consumable_items__soap_toilet_rolls_paper_towels_etc' => Yii::t('hstone', 'Replenish consumable items (soap, toilet rolls, paper towels etc)'),
            'toilet_clean_the_dispensers_and_other_wall_fixtures' => Yii::t('hstone', 'Clean the dispensers and other wall fixtures  '),
            'clean_the_exterior_of_trash_containers_especially_surfaces_touch' => Yii::t('hstone', 'Clean the exterior of trash containers, especially surfaces touched by people'),
            'toilet_seats_to_be_cleaned_on_both_sides_using_a_disinfectant' => Yii::t('hstone', 'Toilet seats to be cleaned on both sides using a disinfectant'),
            'toilet_sweep_and_mop_floors' => Yii::t('hstone', 'Sweep and mop floors'),
            'toilet_check_toilet_flushing_is_fuctioning' => Yii::t('hstone', 'Check toilet flushing is fuctioning'),
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
     * @return \backend\models\CommonAreaToiletsQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\CommonAreaToiletsQuery(get_called_class());
        return $query->where(['common_area_toilets.deleted_by' => 0]);
    }
}
