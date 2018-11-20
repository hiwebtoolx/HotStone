<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "spa_area".
 *
 * @property integer $id
 * @property integer $hammam_clean_and_sanitize_all_basins
 * @property integer $hammam_clean_a_tiled_surfaces_with_a_disinfectant
 * @property integer $hammam_check_ventilation_ac_is_working
 * @property integer $hammam_check_aroma_system_is_working
 * @property integer $hammam_sanitize_all_surfaces_with_clorox_and_detol
 * @property integer $hammam_draw_up_the_decoration
 * @property integer $hammam_clean_water_drean_and_put_flash_and_clorox
 * @property integer $hammam_refill_aroma_in_the_burners
 * @property integer $hammam_refill_spray_aroma_for_hammam
 * @property integer $hammam_light_the_candles
 * @property integer $hammam_the_towels_must_be_clean_flufy_and_perfumed
 * @property integer $hammam_check_temperature
 * @property integer $massage_clean_carpets
 * @property integer $massage_clean_and_sanitize_all_basins
 * @property integer $massage_clean_surrounding_basin
 * @property integer $massage_check_smell_liners_of_the_bed
 * @property integer $massage_draw_up_the_decoration
 * @property integer $massage_empty_trash
 * @property integer $massage_check_temperature_24_degrees_celsius
 * @property integer $massage_remove_stains_and_dust_on_surfaces
 * @property integer $massage_the_towels_must_be_clean_flufy_and_perfumed
 * @property integer $massage_light_the_candles
 * @property integer $massage_refill_aroma_in_the_burners
 * @property integer $facial_draw_up_products
 * @property integer $facial_clean_the_product_containers
 * @property integer $facial_clean_and_sanitize_sink
 * @property integer $facial_check_temperature
 * @property integer $facial_clean_and_sanitize_shower_and_sink_unit_shiny
 * @property integer $facial_check_face_bowl_water_clean_and_appropriate_decoration_
 * @property integer $facial_remove_stains_and_dust_on_surfaces
 * @property integer $facial_the_towels_must_be_clean_flufy_and_perfumed
 * @property integer $facial_empty_trash
 * @property integer $facial_light_the_candles
 * @property integer $facial_refill_aroma_in_the_burners
 * @property integer $ayurveda_check_ventilation_ac_is_working
 * @property integer $ayurveda_clean_and_sanitize_shower_and_sink
 * @property integer $ayurveda_clean_mirrors
 * @property integer $ayurveda_clean_all_surfaces_with_a_disinfectant
 * @property integer $ayurveda_the_towels_must_be_clean_flufy_and_perfumed
 * @property integer $ayurveda_light_the_candles
 * @property integer $ayurveda_refill_aroma_in_the_burners
 * @property integer $ayurveda_check_temperature
 * @property integer $makeup_sweep_and_mop_floors
 * @property integer $makeup_remove_stains_and_dust_on_surfaces
 * @property integer $makeup_empty_trush
 * @property integer $makeup_clean_and_sanitize_sink
 * @property integer $makeup_clean_mirrors
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $checked_by
 * @property integer $deleted_by
 * @property integer $deleted_at
 * @property string $shift_am
 * @property string $shift_pm
 * @property string $shift_date
 * @property integer $lock
 *
 * @property \backend\models\User $checkedBy
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 */
class Spaarea extends \yii\db\ActiveRecord
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
            'checkedBy',
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
            [['hammam_clean_and_sanitize_all_basins', 'hammam_clean_a_tiled_surfaces_with_a_disinfectant', 'hammam_check_ventilation_ac_is_working', 'hammam_check_aroma_system_is_working', 'hammam_sanitize_all_surfaces_with_clorox_and_detol', 'hammam_draw_up_the_decoration', 'hammam_clean_water_drean_and_put_flash_and_clorox', 'hammam_refill_aroma_in_the_burners', 'hammam_refill_spray_aroma_for_hammam', 'hammam_light_the_candles', 'hammam_the_towels_must_be_clean_flufy_and_perfumed', 'hammam_check_temperature', 'massage_clean_carpets', 'massage_clean_and_sanitize_all_basins', 'massage_clean_surrounding_basin', 'massage_check_smell_liners_of_the_bed', 'massage_draw_up_the_decoration', 'massage_empty_trash', 'massage_check_temperature_24_degrees_celsius', 'massage_remove_stains_and_dust_on_surfaces', 'massage_the_towels_must_be_clean_flufy_and_perfumed', 'massage_light_the_candles', 'massage_refill_aroma_in_the_burners', 'facial_draw_up_products', 'facial_clean_the_product_containers', 'facial_clean_and_sanitize_sink', 'facial_check_temperature', 'facial_clean_and_sanitize_shower_and_sink_unit_shiny', 'facial_check_face_bowl_water_clean_and_appropriate_decoration_', 'facial_remove_stains_and_dust_on_surfaces', 'facial_the_towels_must_be_clean_flufy_and_perfumed', 'facial_empty_trash', 'facial_light_the_candles', 'facial_refill_aroma_in_the_burners', 'ayurveda_check_ventilation_ac_is_working', 'ayurveda_clean_and_sanitize_shower_and_sink', 'ayurveda_clean_mirrors', 'ayurveda_clean_all_surfaces_with_a_disinfectant', 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed', 'ayurveda_light_the_candles', 'ayurveda_refill_aroma_in_the_burners', 'ayurveda_check_temperature', 'makeup_sweep_and_mop_floors', 'makeup_remove_stains_and_dust_on_surfaces', 'makeup_empty_trush', 'makeup_clean_and_sanitize_sink', 'makeup_clean_mirrors', 'created_at', 'updated_at', 'created_by', 'updated_by', 'checked_by', 'deleted_by', 'deleted_at', 'shift_am', 'shift_pm', 'shift_date', 'lock'], 'required'],
            [['created_at', 'updated_at', 'created_by', 'updated_by', 'checked_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['hammam_clean_and_sanitize_all_basins', 'hammam_clean_a_tiled_surfaces_with_a_disinfectant', 'hammam_check_ventilation_ac_is_working', 'hammam_check_aroma_system_is_working', 'hammam_sanitize_all_surfaces_with_clorox_and_detol', 'hammam_draw_up_the_decoration', 'hammam_clean_water_drean_and_put_flash_and_clorox', 'hammam_refill_aroma_in_the_burners', 'hammam_refill_spray_aroma_for_hammam', 'hammam_light_the_candles', 'hammam_the_towels_must_be_clean_flufy_and_perfumed', 'hammam_check_temperature', 'massage_clean_carpets', 'massage_clean_and_sanitize_all_basins', 'massage_clean_surrounding_basin', 'massage_check_smell_liners_of_the_bed', 'massage_draw_up_the_decoration', 'massage_empty_trash', 'massage_check_temperature_24_degrees_celsius', 'massage_remove_stains_and_dust_on_surfaces', 'massage_the_towels_must_be_clean_flufy_and_perfumed', 'massage_light_the_candles', 'massage_refill_aroma_in_the_burners', 'facial_draw_up_products', 'facial_clean_the_product_containers', 'facial_clean_and_sanitize_sink', 'facial_check_temperature', 'facial_clean_and_sanitize_shower_and_sink_unit_shiny', 'facial_check_face_bowl_water_clean_and_appropriate_decoration_', 'facial_remove_stains_and_dust_on_surfaces', 'facial_the_towels_must_be_clean_flufy_and_perfumed', 'facial_empty_trash', 'facial_light_the_candles', 'facial_refill_aroma_in_the_burners', 'ayurveda_check_ventilation_ac_is_working', 'ayurveda_clean_and_sanitize_shower_and_sink', 'ayurveda_clean_mirrors', 'ayurveda_clean_all_surfaces_with_a_disinfectant', 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed', 'ayurveda_light_the_candles', 'ayurveda_refill_aroma_in_the_burners', 'ayurveda_check_temperature', 'makeup_sweep_and_mop_floors', 'makeup_remove_stains_and_dust_on_surfaces', 'makeup_empty_trush', 'makeup_clean_and_sanitize_sink', 'makeup_clean_mirrors', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spa_area';
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
            'hammam_clean_and_sanitize_all_basins' => Yii::t('stone', 'Hammam Clean And Sanitize All Basins'),
            'hammam_clean_a_tiled_surfaces_with_a_disinfectant' => Yii::t('stone', 'Hammam Clean A Tiled Surfaces With A Disinfectant'),
            'hammam_check_ventilation_ac_is_working' => Yii::t('stone', 'Hammam Check Ventilation Ac Is Working'),
            'hammam_check_aroma_system_is_working' => Yii::t('stone', 'Hammam Check Aroma System Is Working'),
            'hammam_sanitize_all_surfaces_with_clorox_and_detol' => Yii::t('stone', 'Hammam Sanitize All Surfaces With Clorox And Detol'),
            'hammam_draw_up_the_decoration' => Yii::t('stone', 'Hammam Draw Up The Decoration'),
            'hammam_clean_water_drean_and_put_flash_and_clorox' => Yii::t('stone', 'Hammam Clean Water Drean And Put Flash And Clorox'),
            'hammam_refill_aroma_in_the_burners' => Yii::t('stone', 'Hammam Refill Aroma In The Burners'),
            'hammam_refill_spray_aroma_for_hammam' => Yii::t('stone', 'Hammam Refill Spray Aroma For Hammam'),
            'hammam_light_the_candles' => Yii::t('stone', 'Hammam Light The Candles'),
            'hammam_the_towels_must_be_clean_flufy_and_perfumed' => Yii::t('stone', 'Hammam The Towels Must Be Clean Flufy And Perfumed'),
            'hammam_check_temperature' => Yii::t('stone', 'Hammam Check Temperature'),
            'massage_clean_carpets' => Yii::t('stone', 'Massage Clean Carpets'),
            'massage_clean_and_sanitize_all_basins' => Yii::t('stone', 'Massage Clean And Sanitize All Basins'),
            'massage_clean_surrounding_basin' => Yii::t('stone', 'Massage Clean Surrounding Basin'),
            'massage_check_smell_liners_of_the_bed' => Yii::t('stone', 'Massage Check Smell Liners Of The Bed'),
            'massage_draw_up_the_decoration' => Yii::t('stone', 'Massage Draw Up The Decoration'),
            'massage_empty_trash' => Yii::t('stone', 'Massage Empty Trash'),
            'massage_check_temperature_24_degrees_celsius' => Yii::t('stone', 'Massage Check Temperature 24 Degrees Celsius'),
            'massage_remove_stains_and_dust_on_surfaces' => Yii::t('stone', 'Massage Remove Stains And Dust On Surfaces'),
            'massage_the_towels_must_be_clean_flufy_and_perfumed' => Yii::t('stone', 'Massage The Towels Must Be Clean Flufy And Perfumed'),
            'massage_light_the_candles' => Yii::t('stone', 'Massage Light The Candles'),
            'massage_refill_aroma_in_the_burners' => Yii::t('stone', 'Massage Refill Aroma In The Burners'),
            'facial_draw_up_products' => Yii::t('stone', 'Facial Draw Up Products'),
            'facial_clean_the_product_containers' => Yii::t('stone', 'Facial Clean The Product Containers'),
            'facial_clean_and_sanitize_sink' => Yii::t('stone', 'Facial Clean And Sanitize Sink'),
            'facial_check_temperature' => Yii::t('stone', 'Facial Check Temperature'),
            'facial_clean_and_sanitize_shower_and_sink_unit_shiny' => Yii::t('stone', 'Facial Clean And Sanitize Shower And Sink Unit Shiny'),
            'facial_check_face_bowl_water_clean_and_appropriate_decoration_' => Yii::t('stone', 'Facial Check Face Bowl Water Clean And Appropriate Decoration'),
            'facial_remove_stains_and_dust_on_surfaces' => Yii::t('stone', 'Facial Remove Stains And Dust On Surfaces'),
            'facial_the_towels_must_be_clean_flufy_and_perfumed' => Yii::t('stone', 'Facial The Towels Must Be Clean Flufy And Perfumed'),
            'facial_empty_trash' => Yii::t('stone', 'Facial Empty Trash'),
            'facial_light_the_candles' => Yii::t('stone', 'Facial Light The Candles'),
            'facial_refill_aroma_in_the_burners' => Yii::t('stone', 'Facial Refill Aroma In The Burners'),
            'ayurveda_check_ventilation_ac_is_working' => Yii::t('stone', 'Ayurveda Check Ventilation Ac Is Working'),
            'ayurveda_clean_and_sanitize_shower_and_sink' => Yii::t('stone', 'Ayurveda Clean And Sanitize Shower And Sink'),
            'ayurveda_clean_mirrors' => Yii::t('stone', 'Ayurveda Clean Mirrors'),
            'ayurveda_clean_all_surfaces_with_a_disinfectant' => Yii::t('stone', 'Ayurveda Clean All Surfaces With A Disinfectant'),
            'ayurveda_the_towels_must_be_clean_flufy_and_perfumed' => Yii::t('stone', 'Ayurveda The Towels Must Be Clean Flufy And Perfumed'),
            'ayurveda_light_the_candles' => Yii::t('stone', 'Ayurveda Light The Candles'),
            'ayurveda_refill_aroma_in_the_burners' => Yii::t('stone', 'Ayurveda Refill Aroma In The Burners'),
            'ayurveda_check_temperature' => Yii::t('stone', 'Ayurveda Check Temperature'),
            'makeup_sweep_and_mop_floors' => Yii::t('stone', 'Makeup Sweep And Mop Floors'),
            'makeup_remove_stains_and_dust_on_surfaces' => Yii::t('stone', 'Makeup Remove Stains And Dust On Surfaces'),
            'makeup_empty_trush' => Yii::t('stone', 'Makeup Empty Trush'),
            'makeup_clean_and_sanitize_sink' => Yii::t('stone', 'Makeup Clean And Sanitize Sink'),
            'makeup_clean_mirrors' => Yii::t('stone', 'Makeup Clean Mirrors'),
            'checked_by' => Yii::t('stone', 'Checked By'),
            'shift_am' => Yii::t('stone', 'Shift Am'),
            'shift_pm' => Yii::t('stone', 'Shift Pm'),
            'shift_date' => Yii::t('stone', 'Shift Date'),
            'lock' => Yii::t('stone', 'Lock'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheckedBy()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'checked_by']);
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
     * @return \backend\models\SpaareaQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\SpaareaQuery(get_called_class());
        return $query->where(['spa_area.deleted_by' => 0]);
    }
}
