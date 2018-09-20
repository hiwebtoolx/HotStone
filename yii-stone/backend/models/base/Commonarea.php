<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "common_area".
 *
 * @property integer $id
 * @property integer $checked_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $shift_am
 * @property string $shift_pm
 * @property string $shift_date
 * @property integer $lock
 * @property integer $deleted_by
 * @property integer $deleted_at
 * @property integer $hair_sweep_and_mop_floors
 * @property integer $clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha
 * @property integer $hair_remove_stains_and_dust_on_surfaces
 * @property integer $hair_clean_mirrors
 * @property integer $hair_clean_cart_and_trolleys
 * @property integer $hair_clean_drawers_and_cabinets
 * @property integer $hair_empty_trash
 * @property integer $hair_detect_and_change_busted_light
 * @property integer $shampoo_sweep_and_mop_floors
 * @property integer $shampoo_clean_under_chairs_from_hair_and_put_leader
 * @property integer $shampoo_clean_sinks_from_hair_and_product_residue
 * @property integer $shampoo_clean_shampoo_bowls
 * @property integer $shampoo_empty_trash
 * @property integer $shampoo_remove_stains_and_dust_on_surfaces
 * @property integer $shampoo_clean_mirrors
 * @property integer $shampoo_clean_the_product_containers
 * @property integer $shampoo_empty_towel_basket
 * @property integer $shampoo_detect_and_change_busted_light
 * @property integer $treatment_sweep_and_mop_floors
 * @property integer $treatment_clean_under_chairs_from_hair_and_put_leader
 * @property integer $treatment_clean_sinks_from_hair_and_product_residue
 * @property integer $treatment_empty_trash
 * @property integer $treatment_remove_stains_and_dust_on_surfaces
 * @property integer $treatment_draw_up_the_decoration
 * @property integer $treatment_clean_mixed_bowls
 * @property integer $treatment_clean_mirrors
 * @property integer $treatment_clean_the_product_containers
 * @property integer $treatment_empty_used_towel_bascket
 * @property integer $treatment_clean_the_product_containers2
 * @property integer $treatment_detect_and_change_busted_light
 * @property integer $pedicure_the_curtains_should_be_clean
 * @property integer $pedicure_sweep_and_mop_floors
 * @property integer $pedicure_clean_under_chairs__and_put_leader
 * @property integer $pedicure_clean_and_sanitize_sink
 * @property integer $pedicure_empty_trash
 * @property integer $pedicure_remove_stains_and_dust_on_surfaces
 * @property integer $pedicure_remove_basket_cleaning_items_and_dirty_towels
 * @property integer $pedicure_remove_empty_glasses
 * @property integer $manicure_bar_draw_up_products
 * @property integer $manicure_bar_empty_trash
 * @property integer $manicure_bar_clean_all_surfaces_with_a_disinfectant
 * @property integer $manicure_bar_clean_and_organize_nail_polish_racks
 * @property integer $manicure_bar_empty_used_towel_bascket
 * @property integer $hair_sweep_and_mop_floors2
 * @property integer $clean_under_chairs_from_hair_and_put_leader_conditionner_for2
 * @property integer $hair_remove_stains_and_dust_on_surfaces2
 * @property integer $hair_clean_mirrors2
 * @property integer $hair_clean_cart_and_trolleys2
 * @property integer $hair_clean_drawers_and_cabinets2
 * @property integer $hair_empty_trash2
 * @property integer $hair_detect_and_change_busted_light2
 * @property integer $shampoo_sweep_and_mop_floors2
 * @property integer $shampoo_clean_under_chairs_from_hair_and_put_leader2
 * @property integer $shampoo_clean_sinks_from_hair_and_product_residue2
 * @property integer $shampoo_clean_shampoo_bowls2
 * @property integer $shampoo_empty_trash2
 * @property integer $shampoo_remove_stains_and_dust_on_surfaces2
 * @property integer $shampoo_clean_mirrors2
 * @property integer $shampoo_clean_the_product_containers2
 * @property integer $shampoo_empty_towel_basket2
 * @property integer $shampoo_detect_and_change_busted_light2
 * @property integer $treatment_sweep_and_mop_floors2
 * @property integer $treatment_clean_under_chairs_from_hair_and_put_leader2
 * @property integer $treatment_clean_sinks_from_hair_and_product_residue2
 * @property integer $treatment_empty_trash2
 * @property integer $treatment_remove_stains_and_dust_on_surfaces2
 * @property integer $treatment_draw_up_the_decoration2
 * @property integer $treatment_clean_mixed_bowls2
 * @property integer $treatment_clean_mirrors2
 * @property integer $treatment_clean_the_product_container2
 * @property integer $treatment_empty_used_towel_bascket2
 * @property integer $treatment_clean_the_product_containers22
 * @property integer $treatment_detect_and_change_busted_light2
 * @property integer $pedicure_the_curtains_should_be_clean2
 * @property integer $pedicure_sweep_and_mop_floors2
 * @property integer $pedicure_clean_under_chairs__and_put_leader2
 * @property integer $pedicure_clean_and_sanitize_sink2
 * @property integer $pedicure_empty_trash2
 * @property integer $pedicure_remove_stains_and_dust_on_surfaces2
 * @property integer $pedicure_remove_basket_cleaning_items_and_dirty_towels2
 * @property integer $pedicure_remove_empty_glasses2
 * @property integer $manicure_bar_draw_up_products2
 * @property integer $manicure_bar_empty_trash2
 * @property integer $manicure_bar_clean_all_surfaces_with_a_disinfectant2
 * @property integer $manicure_bar_clean_and_organize_nail_polish_racks2
 * @property integer $manicure_bar_empty_used_towel_bascket2
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
 * @property integer $hammam_clean_and_sanitize_all_basins2
 * @property integer $hammam_clean_a_tiled_surfaces_with_a_disinfectant2
 * @property integer $hammam_check_ventilation_ac_is_working2
 * @property integer $hammam_check_aroma_system_is_working2
 * @property integer $hammam_sanitize_all_surfaces_with_clorox_and_detol2
 * @property integer $hammam_draw_up_the_decoration2
 * @property integer $hammam_clean_water_drean_and_put_flash_and_clorox2
 * @property integer $hammam_refill_aroma_in_the_burners2
 * @property integer $hammam_refill_spray_aroma_for_hammam2
 * @property integer $hammam_light_the_candles2
 * @property integer $hammam_the_towels_must_be_clean_flufy_and_perfumed2
 * @property integer $hammam_check_temperature2
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
 * @property integer $massage_clean_carpet2
 * @property integer $massage_clean_and_sanitize_all_basins2
 * @property integer $massage_clean_surrounding_basin2
 * @property integer $massage_check_smell_liners_of_the_bed2
 * @property integer $massage_draw_up_the_decoration2
 * @property integer $massage_empty_trash2
 * @property integer $massage_check_temperature_24_degrees_celsius2
 * @property integer $massage_remove_stains_and_dust_on_surfaces2
 * @property integer $massage_the_towels_must_be_clean_flufy_and_perfumed2
 * @property integer $massage_light_the_candles2
 * @property integer $massage_refill_aroma_in_the_burners2
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
 * @property integer $facial_draw_up_products2
 * @property integer $facial_clean_the_product_containers2
 * @property integer $facial_clean_and_sanitize_sink2
 * @property integer $facial_check_temperature2
 * @property integer $facial_clean_and_sanitize_shower_and_sink_unit_shiny2
 * @property integer $facial_check_face_bowl_water_clean_and_appropriate_decoration_2
 * @property integer $facial_remove_stains_and_dust_on_surfaces2
 * @property integer $facial_the_towels_must_be_clean_flufy_and_perfumed2
 * @property integer $facial_empty_trash2
 * @property integer $facial_light_the_candles2
 * @property integer $facial_refill_aroma_in_the_burners2
 * @property integer $ayurveda_check_ventilation_ac_is_working
 * @property integer $ayurveda_clean_and_sanitize_shower_and_sink
 * @property integer $ayurveda_clean_mirrors
 * @property integer $ayurveda_clean_all_surfaces_with_a_disinfectant
 * @property integer $ayurveda_the_towels_must_be_clean_flufy_and_perfumed
 * @property integer $ayurveda_light_the_candles
 * @property integer $ayurveda_refill_aroma_in_the_burners
 * @property integer $ayurveda_check_temperature
 * @property integer $ayurveda_check_ventilation_ac_is_working2
 * @property integer $ayurveda_clean_and_sanitize_shower_and_sink2
 * @property integer $ayurveda_clean_mirrors2
 * @property integer $ayurveda_clean_all_surfaces_with_a_disinfectant2
 * @property integer $ayurveda_the_towels_must_be_clean_flufy_and_perfumed2
 * @property integer $ayurveda_light_the_candles2
 * @property integer $ayurveda_refill_aroma_in_the_burners2
 * @property integer $ayurveda_check_temperature2
 * @property integer $makeup_sweep_and_mop_floors
 * @property integer $makeup_remove_stains_and_dust_on_surfaces
 * @property integer $makeup_empty_trush
 * @property integer $makeup_clean_and_sanitize_sink
 * @property integer $makeup_clean_mirrors
 * @property integer $makeup_sweep_and_mop_floors2
 * @property integer $makeup_remove_stains_and_dust_on_surfaces2
 * @property integer $makeup_empty_trush2
 * @property integer $makeup_clean_and_sanitize_sink2
 * @property integer $makeup_clean_mirrors2
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $checkedBy
 * @property \backend\models\CommonAreaBackzone[] $commonAreaBackzones
 * @property \backend\models\CommonAreaBreak[] $commonAreaBreaks
 * @property \backend\models\CommonAreaChanging[] $commonAreaChangings
 * @property \backend\models\CommonAreaElevator[] $commonAreaElevators
 * @property \backend\models\CommonAreaHallways[] $commonAreaHallways
 * @property \backend\models\CommonAreaLaundry[] $commonAreaLaundries
 * @property \backend\models\CommonAreaPrayer[] $commonAreaPrayers
 * @property \backend\models\CommonAreaRelaxation[] $commonAreaRelaxations
 * @property \backend\models\CommonAreaToilets[] $commonAreaToilets
 * @property \backend\models\CommonAreaWaiting[] $commonAreaWaitings
 * @property \backend\models\CommonAreaWelcome[] $commonAreaWelcomes
 * @property \backend\models\EntranceArea[] $entranceAreas
 * @property \backend\models\ProductBarArea[] $productBarAreas
 * @property \backend\models\ReceptionArea[] $receptionAreas
 */
class CommonArea extends \yii\db\ActiveRecord
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
            'updatedBy',
            'checkedBy',
            'commonAreaBackzones',
            'commonAreaBreaks',
            'commonAreaChangings',
            'commonAreaElevators',
            'commonAreaHallways',
            'commonAreaLaundries',
            'commonAreaPrayers',
            'commonAreaRelaxations',
            'commonAreaToilets',
            'commonAreaWaitings',
            'commonAreaWelcomes',
            'entranceAreas',
            'productBarAreas',
            'receptionAreas',
            'branch'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'shift_am','shift_date','branch_id', 'shift_pm'], 'required'],
            [['checked_by', 'created_at', 'updated_at', 'branch_id','updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['lock', 'hair_sweep_and_mop_floors', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha', 'hair_remove_stains_and_dust_on_surfaces', 'hair_clean_mirrors', 'hair_clean_cart_and_trolleys', 'hair_clean_drawers_and_cabinets', 'hair_empty_trash', 'hair_detect_and_change_busted_light', 'shampoo_sweep_and_mop_floors', 'shampoo_clean_under_chairs_from_hair_and_put_leader', 'shampoo_clean_sinks_from_hair_and_product_residue', 'shampoo_clean_shampoo_bowls', 'shampoo_empty_trash', 'shampoo_remove_stains_and_dust_on_surfaces', 'shampoo_clean_mirrors', 'shampoo_clean_the_product_containers', 'shampoo_empty_towel_basket', 'shampoo_detect_and_change_busted_light', 'treatment_sweep_and_mop_floors', 'treatment_clean_under_chairs_from_hair_and_put_leader', 'treatment_clean_sinks_from_hair_and_product_residue', 'treatment_empty_trash', 'treatment_remove_stains_and_dust_on_surfaces', 'treatment_draw_up_the_decoration', 'treatment_clean_mixed_bowls', 'treatment_clean_mirrors', 'treatment_clean_the_product_containers', 'treatment_empty_used_towel_bascket', 'treatment_clean_the_product_containers2', 'treatment_detect_and_change_busted_light', 'pedicure_the_curtains_should_be_clean', 'pedicure_sweep_and_mop_floors', 'pedicure_clean_under_chairs__and_put_leader', 'pedicure_clean_and_sanitize_sink', 'pedicure_empty_trash', 'pedicure_remove_stains_and_dust_on_surfaces', 'pedicure_remove_basket_cleaning_items_and_dirty_towels', 'pedicure_remove_empty_glasses', 'manicure_bar_draw_up_products', 'manicure_bar_empty_trash', 'manicure_bar_clean_all_surfaces_with_a_disinfectant', 'manicure_bar_clean_and_organize_nail_polish_racks', 'manicure_bar_empty_used_towel_bascket', 'hair_sweep_and_mop_floors2', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for2', 'hair_remove_stains_and_dust_on_surfaces2', 'hair_clean_mirrors2', 'hair_clean_cart_and_trolleys2', 'hair_clean_drawers_and_cabinets2', 'hair_empty_trash2', 'hair_detect_and_change_busted_light2', 'shampoo_sweep_and_mop_floors2', 'shampoo_clean_under_chairs_from_hair_and_put_leader2', 'shampoo_clean_sinks_from_hair_and_product_residue2', 'shampoo_clean_shampoo_bowls2', 'shampoo_empty_trash2', 'shampoo_remove_stains_and_dust_on_surfaces2', 'shampoo_clean_mirrors2', 'shampoo_clean_the_product_containers2', 'shampoo_empty_towel_basket2', 'shampoo_detect_and_change_busted_light2', 'treatment_sweep_and_mop_floors2', 'treatment_clean_under_chairs_from_hair_and_put_leader2', 'treatment_clean_sinks_from_hair_and_product_residue2', 'treatment_empty_trash2', 'treatment_remove_stains_and_dust_on_surfaces2', 'treatment_draw_up_the_decoration2', 'treatment_clean_mixed_bowls2', 'treatment_clean_mirrors2', 'treatment_clean_the_product_container2', 'treatment_empty_used_towel_bascket2', 'treatment_clean_the_product_containers22', 'treatment_detect_and_change_busted_light2', 'pedicure_the_curtains_should_be_clean2', 'pedicure_sweep_and_mop_floors2', 'pedicure_clean_under_chairs__and_put_leader2', 'pedicure_clean_and_sanitize_sink2', 'pedicure_empty_trash2', 'pedicure_remove_stains_and_dust_on_surfaces2', 'pedicure_remove_basket_cleaning_items_and_dirty_towels2', 'pedicure_remove_empty_glasses2', 'manicure_bar_draw_up_products2', 'manicure_bar_empty_trash2', 'manicure_bar_clean_all_surfaces_with_a_disinfectant2', 'manicure_bar_clean_and_organize_nail_polish_racks2', 'manicure_bar_empty_used_towel_bascket2', 'hammam_clean_and_sanitize_all_basins', 'hammam_clean_a_tiled_surfaces_with_a_disinfectant', 'hammam_check_ventilation_ac_is_working', 'hammam_check_aroma_system_is_working', 'hammam_sanitize_all_surfaces_with_clorox_and_detol', 'hammam_draw_up_the_decoration', 'hammam_clean_water_drean_and_put_flash_and_clorox', 'hammam_refill_aroma_in_the_burners', 'hammam_refill_spray_aroma_for_hammam', 'hammam_light_the_candles', 'hammam_the_towels_must_be_clean_flufy_and_perfumed', 'hammam_check_temperature', 'hammam_clean_and_sanitize_all_basins2', 'hammam_clean_a_tiled_surfaces_with_a_disinfectant2', 'hammam_check_ventilation_ac_is_working2', 'hammam_check_aroma_system_is_working2', 'hammam_sanitize_all_surfaces_with_clorox_and_detol2', 'hammam_draw_up_the_decoration2', 'hammam_clean_water_drean_and_put_flash_and_clorox2', 'hammam_refill_aroma_in_the_burners2', 'hammam_refill_spray_aroma_for_hammam2', 'hammam_light_the_candles2', 'hammam_the_towels_must_be_clean_flufy_and_perfumed2', 'hammam_check_temperature2', 'massage_clean_carpets', 'massage_clean_and_sanitize_all_basins', 'massage_clean_surrounding_basin', 'massage_check_smell_liners_of_the_bed', 'massage_draw_up_the_decoration', 'massage_empty_trash', 'massage_check_temperature_24_degrees_celsius', 'massage_remove_stains_and_dust_on_surfaces', 'massage_the_towels_must_be_clean_flufy_and_perfumed', 'massage_light_the_candles', 'massage_refill_aroma_in_the_burners', 'massage_clean_carpet2', 'massage_clean_and_sanitize_all_basins2', 'massage_clean_surrounding_basin2', 'massage_check_smell_liners_of_the_bed2', 'massage_draw_up_the_decoration2', 'massage_empty_trash2', 'massage_check_temperature_24_degrees_celsius2', 'massage_remove_stains_and_dust_on_surfaces2', 'massage_the_towels_must_be_clean_flufy_and_perfumed2', 'massage_light_the_candles2', 'massage_refill_aroma_in_the_burners2', 'facial_draw_up_products', 'facial_clean_the_product_containers', 'facial_clean_and_sanitize_sink', 'facial_check_temperature', 'facial_clean_and_sanitize_shower_and_sink_unit_shiny', 'facial_check_face_bowl_water_clean_and_appropriate_decoration_', 'facial_remove_stains_and_dust_on_surfaces', 'facial_the_towels_must_be_clean_flufy_and_perfumed', 'facial_empty_trash', 'facial_light_the_candles', 'facial_refill_aroma_in_the_burners', 'facial_draw_up_products2', 'facial_clean_the_product_containers2', 'facial_clean_and_sanitize_sink2', 'facial_check_temperature2', 'facial_clean_and_sanitize_shower_and_sink_unit_shiny2', 'facial_check_face_bowl_water_clean_and_appropriate_decoration_2', 'facial_remove_stains_and_dust_on_surfaces2', 'facial_the_towels_must_be_clean_flufy_and_perfumed2', 'facial_empty_trash2', 'facial_light_the_candles2', 'facial_refill_aroma_in_the_burners2', 'ayurveda_check_ventilation_ac_is_working', 'ayurveda_clean_and_sanitize_shower_and_sink', 'ayurveda_clean_mirrors', 'ayurveda_clean_all_surfaces_with_a_disinfectant', 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed', 'ayurveda_light_the_candles', 'ayurveda_refill_aroma_in_the_burners', 'ayurveda_check_temperature', 'ayurveda_check_ventilation_ac_is_working2', 'ayurveda_clean_and_sanitize_shower_and_sink2', 'ayurveda_clean_mirrors2', 'ayurveda_clean_all_surfaces_with_a_disinfectant2', 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed2', 'ayurveda_light_the_candles2', 'ayurveda_refill_aroma_in_the_burners2', 'ayurveda_check_temperature2', 'makeup_sweep_and_mop_floors', 'makeup_remove_stains_and_dust_on_surfaces', 'makeup_empty_trush', 'makeup_clean_and_sanitize_sink', 'makeup_clean_mirrors', 'makeup_sweep_and_mop_floors2', 'makeup_remove_stains_and_dust_on_surfaces2', 'makeup_empty_trush2', 'makeup_clean_and_sanitize_sink2', 'makeup_clean_mirrors2'], 'default', 'value' => '0'],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_area';
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
            'checked_by' => Yii::t('hstone', 'Checked By'),
            'shift_am' => Yii::t('hstone', 'Shift Am'),
            'shift_pm' => Yii::t('hstone', 'Shift Pm'),
            'shift_date' => Yii::t('hstone', 'Shift Date'),
            'lock' => Yii::t('hstone', 'Lock'),
            'hair_sweep_and_mop_floors' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha' => Yii::t('hstone', 'Clean under chairs from hair and put leader conditionner for chair'),
            'hair_remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'hair_clean_mirrors' => Yii::t('hstone', 'Clean Mirrors'),
            'hair_clean_cart_and_trolleys' => Yii::t('hstone', 'Clean Cart And Trolleys'),
            'hair_clean_drawers_and_cabinets' => Yii::t('hstone', 'Clean Drawers And Cabinets'),
            'hair_empty_trash' => Yii::t('hstone', 'Empty Trash'),
            'hair_detect_and_change_busted_light' => Yii::t('hstone', 'Detect And Change Busted Light'),

            'hair_sweep_and_mop_floors2' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'clean_under_chairs_from_hair_and_put_leader_conditionner_for2' => Yii::t('hstone', 'Clean under chairs from hair and put leader conditionner for chair'),
            'hair_remove_stains_and_dust_on_surfaces2' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'hair_clean_mirrors2' => Yii::t('hstone', 'Clean Mirrors'),
            'hair_clean_cart_and_trolleys2' => Yii::t('hstone', 'Clean Cart And Trolleys'),
            'hair_clean_drawers_and_cabinets2' => Yii::t('hstone', 'Clean Drawers And Cabinets'),
            'hair_empty_trash2' => Yii::t('hstone', 'Empty Trash'),
            'hair_detect_and_change_busted_light2' => Yii::t('hstone', 'Detect And Change Busted Light'),


            'shampoo_sweep_and_mop_floors' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'shampoo_clean_under_chairs_from_hair_and_put_leader' => Yii::t('hstone', 'Clean under chairs from hair and put leader conditionner for chair'),
            'shampoo_clean_sinks_from_hair_and_product_residue' => Yii::t('hstone', 'Clean Sinks From Hair And Product Residue'),
            'shampoo_clean_shampoo_bowls' => Yii::t('hstone', 'Clean Shampoo Bowls'),
            'shampoo_empty_trash' => Yii::t('hstone', 'Empty Trash'),
            'shampoo_remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'shampoo_clean_mirrors' => Yii::t('hstone', 'Clean Mirrors'),
            'shampoo_clean_the_product_containers' => Yii::t('hstone', 'Clean The Product Containers'),
            'shampoo_empty_towel_basket' => Yii::t('hstone', 'Empty Towel Basket'),
            'shampoo_detect_and_change_busted_light' => Yii::t('hstone', 'Detect And Change Busted Light'),

            'shampoo_sweep_and_mop_floors2' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'shampoo_clean_under_chairs_from_hair_and_put_leader2' => Yii::t('hstone', 'Clean under chairs from hair and put leader conditionner for chair'),
            'shampoo_clean_sinks_from_hair_and_product_residue2' => Yii::t('hstone', 'Clean Sinks From Hair And Product Residue'),
            'shampoo_clean_shampoo_bowls2' => Yii::t('hstone', 'Clean Shampoo Bowls'),
            'shampoo_empty_trash2' => Yii::t('hstone', 'Empty Trash'),
            'shampoo_remove_stains_and_dust_on_surfaces2' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'shampoo_clean_mirrors2' => Yii::t('hstone', 'Clean Mirrors'),
            'shampoo_clean_the_product_containers2' => Yii::t('hstone', 'Clean The Product Containers'),
            'shampoo_empty_towel_basket2' => Yii::t('hstone', 'Empty Towel Basket'),
            'shampoo_detect_and_change_busted_light2' => Yii::t('hstone', 'Detect And Change Busted Light'),



            'treatment_sweep_and_mop_floors' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'treatment_clean_under_chairs_from_hair_and_put_leader' => Yii::t('hstone', 'Clean Under Chairs From Hair And Put Leader'),
            'treatment_clean_sinks_from_hair_and_product_residue' => Yii::t('hstone', 'Clean Sinks From Hair And Product Residue'),
            'treatment_empty_trash' => Yii::t('hstone', 'Empty Trash'),
            'treatment_remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'treatment_draw_up_the_decoration' => Yii::t('hstone', 'Draw Up The Decoration'),
            'treatment_clean_mixed_bowls' => Yii::t('hstone', 'Clean Mixed Bowls'),
            'treatment_clean_mirrors' => Yii::t('hstone', 'Clean Mirrors'),
            'treatment_clean_the_product_containers' => Yii::t('hstone', 'Clean The Product Containers'),
            'treatment_empty_used_towel_bascket' => Yii::t('hstone', 'Empty Used Towel Bascket'),
            'treatment_clean_the_product_containers2' => Yii::t('hstone', 'Clean The Product Containers'),
            'treatment_detect_and_change_busted_light' => Yii::t('hstone', 'Detect And Change Busted Light'),

            'treatment_sweep_and_mop_floors2' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'treatment_clean_under_chairs_from_hair_and_put_leader2' => Yii::t('hstone', 'Clean Under Chairs From Hair And Put Leader'),
            'treatment_clean_sinks_from_hair_and_product_residue2' => Yii::t('hstone', 'Clean Sinks From Hair And Product Residue'),
            'treatment_empty_trash2' => Yii::t('hstone', 'Empty Trash'),
            'treatment_remove_stains_and_dust_on_surfaces2' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'treatment_draw_up_the_decoration2' => Yii::t('hstone', 'Draw Up The Decoration'),
            'treatment_clean_mixed_bowls2' => Yii::t('hstone', 'Clean Mixed Bowls'),
            'treatment_clean_mirrors2' => Yii::t('hstone', 'Clean Mirrors'),
            'treatment_clean_the_product_container2' => Yii::t('hstone', 'Clean The Product Container'),
            'treatment_empty_used_towel_bascket2' => Yii::t('hstone', 'Empty Used Towel Bascket'),
            'treatment_clean_the_product_containers22' => Yii::t('hstone', 'Clean The Product Containers'),
            'treatment_detect_and_change_busted_light2' => Yii::t('hstone', 'Detect And Change Busted Light'),

            'pedicure_the_curtains_should_be_clean' => Yii::t('hstone', 'The Curtains Should Be Clean'),
            'pedicure_sweep_and_mop_floors' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'pedicure_clean_under_chairs__and_put_leader' => Yii::t('hstone', 'Clean under chairs from hair and put leader conditionner for chair'),
            'pedicure_clean_and_sanitize_sink' => Yii::t('hstone', 'Clean And Sanitize Sink'),
            'pedicure_empty_trash' => Yii::t('hstone', 'Empty Trash'),
            'pedicure_remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'pedicure_remove_basket_cleaning_items_and_dirty_towels' => Yii::t('hstone', 'Remove Basket Cleaning Items And Dirty Towels'),
            'pedicure_remove_empty_glasses' => Yii::t('hstone', 'Remove Empty Glasses'),

            'pedicure_the_curtains_should_be_clean2' => Yii::t('hstone', 'The Curtains Should Be Clean'),
            'pedicure_sweep_and_mop_floors2' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'pedicure_clean_under_chairs__and_put_leader2' => Yii::t('hstone', 'Clean under chairs from hair and put leader conditionner for chair'),
            'pedicure_clean_and_sanitize_sink2' => Yii::t('hstone', 'Clean And Sanitize Sink'),
            'pedicure_empty_trash2' => Yii::t('hstone', 'Empty Trash'),
            'pedicure_remove_stains_and_dust_on_surfaces2' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'pedicure_remove_basket_cleaning_items_and_dirty_towels2' => Yii::t('hstone', 'Remove Basket Cleaning Items And Dirty Towels'),
            'pedicure_remove_empty_glasses2' => Yii::t('hstone', 'Remove Empty Glasses'),


            'manicure_bar_draw_up_products' => Yii::t('hstone', 'Draw Up Products'),
            'manicure_bar_empty_trash' => Yii::t('hstone', 'Empty Trash'),
            'manicure_bar_clean_all_surfaces_with_a_disinfectant' => Yii::t('hstone', 'Clean All Surfaces With A Disinfectant'),
            'manicure_bar_clean_and_organize_nail_polish_racks' => Yii::t('hstone', 'Clean And Organize Nail Polish Racks'),
            'manicure_bar_empty_used_towel_bascket' => Yii::t('hstone', 'Empty Used Towel Bascket'),


            'manicure_bar_draw_up_products2' => Yii::t('hstone', 'Draw Up Products'),
            'manicure_bar_empty_trash2' => Yii::t('hstone', 'Empty Trash'),
            'manicure_bar_clean_all_surfaces_with_a_disinfectant2' => Yii::t('hstone', 'Clean All Surfaces With A Disinfectant'),
            'manicure_bar_clean_and_organize_nail_polish_racks2' => Yii::t('hstone', 'Clean And Organize Nail Polish Racks'),
            'manicure_bar_empty_used_towel_bascket2' => Yii::t('hstone', 'Empty Used Towel Bascket'),


            'hammam_clean_and_sanitize_all_basins' => Yii::t('hstone', 'Clean And Sanitize All Basins'),
            'hammam_clean_a_tiled_surfaces_with_a_disinfectant' => Yii::t('hstone', 'Clean A Tiled Surfaces With A Disinfectant'),
            'hammam_check_ventilation_ac_is_working' => Yii::t('hstone', 'Check Ventilation Ac Is Working'),
            'hammam_check_aroma_system_is_working' => Yii::t('hstone', 'Check Aroma System Is Working'),
            'hammam_sanitize_all_surfaces_with_clorox_and_detol' => Yii::t('hstone', 'Sanitize All Surfaces With Clorox And Detol'),
            'hammam_draw_up_the_decoration' => Yii::t('hstone', 'Draw Up The Decoration'),
            'hammam_clean_water_drean_and_put_flash_and_clorox' => Yii::t('hstone', 'Clean Water Drean And Put Flash And Clorox'),
            'hammam_refill_aroma_in_the_burners' => Yii::t('hstone', 'Refill Aroma In The Burners'),
            'hammam_refill_spray_aroma_for_hammam' => Yii::t('hstone', 'Refill Spray Aroma For Hammam'),
            'hammam_light_the_candles' => Yii::t('hstone', 'Light The Candles'),
            'hammam_the_towels_must_be_clean_flufy_and_perfumed' => Yii::t('hstone', 'The Towels Must Be Clean Flufy And Perfumed'),
            'hammam_check_temperature' => Yii::t('hstone', 'Check Temperature'),
            'hammam_clean_and_sanitize_all_basins2' => Yii::t('hstone', 'Clean And Sanitize All Basins'),
            'hammam_clean_a_tiled_surfaces_with_a_disinfectant2' => Yii::t('hstone', 'Clean A Tiled Surfaces With A Disinfectant'),
            'hammam_check_ventilation_ac_is_working2' => Yii::t('hstone', 'Check Ventilation Ac Is Working'),
            'hammam_check_aroma_system_is_working2' => Yii::t('hstone', 'Check Aroma System Is Working'),
            'hammam_sanitize_all_surfaces_with_clorox_and_detol2' => Yii::t('hstone', 'Sanitize All Surfaces With Clorox And Detol'),
            'hammam_draw_up_the_decoration2' => Yii::t('hstone', 'Draw Up The Decoration'),
            'hammam_clean_water_drean_and_put_flash_and_clorox2' => Yii::t('hstone', 'Clean Water Drean And Put Flash And Clorox'),
            'hammam_refill_aroma_in_the_burners2' => Yii::t('hstone', 'Refill Aroma In The Burners'),
            'hammam_refill_spray_aroma_for_hammam2' => Yii::t('hstone', 'Refill Spray Aroma For Hammam'),
            'hammam_light_the_candles2' => Yii::t('hstone', 'Light The Candles'),
            'hammam_the_towels_must_be_clean_flufy_and_perfumed2' => Yii::t('hstone', 'The Towels Must Be Clean Flufy And Perfumed'),
            'hammam_check_temperature2' => Yii::t('hstone', 'Check Temperature'),


            'massage_clean_carpets' => Yii::t('hstone', 'Clean Carpets'),
            'massage_clean_and_sanitize_all_basins' => Yii::t('hstone', 'Clean And Sanitize All Basins'),
            'massage_clean_surrounding_basin' => Yii::t('hstone', 'Clean Surrounding Basin'),
            'massage_check_smell_liners_of_the_bed' => Yii::t('hstone', 'Check Smell Liners Of The Bed'),
            'massage_draw_up_the_decoration' => Yii::t('hstone', 'Draw Up The Decoration'),
            'massage_empty_trash' => Yii::t('hstone', 'Empty Trash'),
            'massage_check_temperature_24_degrees_celsius' => Yii::t('hstone', 'Check Temperature 24 Degrees Celsius'),
            'massage_remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'massage_the_towels_must_be_clean_flufy_and_perfumed' => Yii::t('hstone', 'The Towels Must Be Clean Flufy And Perfumed'),
            'massage_light_the_candles' => Yii::t('hstone', 'Light The Candles'),
            'massage_refill_aroma_in_the_burners' => Yii::t('hstone', 'Refill Aroma In The Burners'),
            'massage_clean_carpet2' => Yii::t('hstone', 'Clean Carpets'),
            'massage_clean_and_sanitize_all_basins2' => Yii::t('hstone', 'Clean And Sanitize All Basins'),
            'massage_clean_surrounding_basin2' => Yii::t('hstone', 'Clean Surrounding Basin'),
            'massage_check_smell_liners_of_the_bed2' => Yii::t('hstone', 'Check Smell Liners Of The Bed'),
            'massage_draw_up_the_decoration2' => Yii::t('hstone', 'Draw Up The Decoration'),
            'massage_empty_trash2' => Yii::t('hstone', 'Empty Trash'),
            'massage_check_temperature_24_degrees_celsius2' => Yii::t('hstone', 'Check Temperature 24 Degrees Celsius'),
            'massage_remove_stains_and_dust_on_surfaces2' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'massage_the_towels_must_be_clean_flufy_and_perfumed2' => Yii::t('hstone', 'The Towels Must Be Clean Flufy And Perfumed'),
            'massage_light_the_candles2' => Yii::t('hstone', 'Light The Candles'),
            'massage_refill_aroma_in_the_burners2' => Yii::t('hstone', 'Refill Aroma In The Burners'),


            'facial_draw_up_products' => Yii::t('hstone', 'Draw Up Products'),
            'facial_clean_the_product_containers' => Yii::t('hstone', 'Clean The Product Containers'),
            'facial_clean_and_sanitize_sink' => Yii::t('hstone', 'Clean And Sanitize Sink'),
            'facial_check_temperature' => Yii::t('hstone', 'Check Temperature'),
            'facial_clean_and_sanitize_shower_and_sink_unit_shiny' => Yii::t('hstone', 'Clean And Sanitize Shower And Sink Unit Shiny'),
            'facial_check_face_bowl_water_clean_and_appropriate_decoration_' => Yii::t('hstone', 'Check Face Bowl Water Clean And Appropriate Decoration'),
            'facial_remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'facial_the_towels_must_be_clean_flufy_and_perfumed' => Yii::t('hstone', 'The Towels Must Be Clean Flufy And Perfumed'),
            'facial_empty_trash' => Yii::t('hstone', 'Empty Trash'),
            'facial_light_the_candles' => Yii::t('hstone', 'Light The Candles'),
            'facial_refill_aroma_in_the_burners' => Yii::t('hstone', 'Refill Aroma In The Burners'),
            'facial_draw_up_products2' => Yii::t('hstone', 'Draw Up Products'),
            'facial_clean_the_product_containers2' => Yii::t('hstone', 'Clean The Product Containers'),
            'facial_clean_and_sanitize_sink2' => Yii::t('hstone', 'Clean And Sanitize Sink'),
            'facial_check_temperature2' => Yii::t('hstone', 'Check Temperature'),
            'facial_clean_and_sanitize_shower_and_sink_unit_shiny2' => Yii::t('hstone', 'Clean And Sanitize Shower And Sink Unit Shiny'),
            'facial_check_face_bowl_water_clean_and_appropriate_decoration_2' => Yii::t('hstone', 'Check Face Bowl Water Clean And Appropriate Decoration'),
            'facial_remove_stains_and_dust_on_surfaces2' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'facial_the_towels_must_be_clean_flufy_and_perfumed2' => Yii::t('hstone', 'The Towels Must Be Clean Flufy And Perfumed'),
            'facial_empty_trash2' => Yii::t('hstone', 'Empty Trash'),
            'facial_light_the_candles2' => Yii::t('hstone', 'Light The Candles'),
            'facial_refill_aroma_in_the_burners2' => Yii::t('hstone', 'Refill Aroma In The Burners'),


            'ayurveda_check_ventilation_ac_is_working' => Yii::t('hstone', 'Check Ventilation Ac Is Working'),
            'ayurveda_clean_and_sanitize_shower_and_sink' => Yii::t('hstone', 'Clean And Sanitize Shower And Sink'),
            'ayurveda_clean_mirrors' => Yii::t('hstone', 'Clean Mirrors'),
            'ayurveda_clean_all_surfaces_with_a_disinfectant' => Yii::t('hstone', 'Clean All Surfaces With A Disinfectant'),
            'ayurveda_the_towels_must_be_clean_flufy_and_perfumed' => Yii::t('hstone', 'The Towels Must Be Clean Flufy And Perfumed'),
            'ayurveda_light_the_candles' => Yii::t('hstone', 'Light The Candles'),
            'ayurveda_refill_aroma_in_the_burners' => Yii::t('hstone', 'Refill Aroma In The Burners'),
            'ayurveda_check_temperature' => Yii::t('hstone', 'Check Temperature'),
            'ayurveda_check_ventilation_ac_is_working2' => Yii::t('hstone', 'Check Ventilation Ac Is Working'),
            'ayurveda_clean_and_sanitize_shower_and_sink2' => Yii::t('hstone', 'Clean And Sanitize Shower And Sink'),
            'ayurveda_clean_mirrors2' => Yii::t('hstone', 'Clean Mirrors'),
            'ayurveda_clean_all_surfaces_with_a_disinfectant2' => Yii::t('hstone', 'Clean All Surfaces With A Disinfectant'),
            'ayurveda_the_towels_must_be_clean_flufy_and_perfumed2' => Yii::t('hstone', 'The Towels Must Be Clean Flufy And Perfumed'),
            'ayurveda_light_the_candles2' => Yii::t('hstone', 'Light The Candles'),
            'ayurveda_refill_aroma_in_the_burners2' => Yii::t('hstone', 'Refill Aroma In The Burners'),
            'ayurveda_check_temperature2' => Yii::t('hstone', 'Check Temperature'),


            'makeup_sweep_and_mop_floors' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'makeup_remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'makeup_empty_trush' => Yii::t('hstone', 'Empty Trush'),
            'makeup_clean_and_sanitize_sink' => Yii::t('hstone', 'Clean And Sanitize Sink'),
            'makeup_clean_mirrors' => Yii::t('hstone', 'Clean Mirrors'),
            'makeup_sweep_and_mop_floors2' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'makeup_remove_stains_and_dust_on_surfaces2' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'makeup_empty_trush2' => Yii::t('hstone', 'Empty Trush'),
            'makeup_clean_and_sanitize_sink2' => Yii::t('hstone', 'Clean And Sanitize Sink'),
            'makeup_clean_mirrors2' => Yii::t('hstone', 'Clean Mirrors'),
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
    public function getCheckedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'checked_by']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaBackzones()
    {
        return $this->hasMany(\backend\models\CommonAreaBackzone::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaBreaks()
    {
        return $this->hasMany(\backend\models\CommonAreaBreak::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaChangings()
    {
        return $this->hasMany(\backend\models\CommonAreaChanging::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaElevators()
    {
        return $this->hasMany(\backend\models\CommonAreaElevator::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaHallways()
    {
        return $this->hasMany(\backend\models\CommonAreaHallways::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaLaundries()
    {
        return $this->hasMany(\backend\models\CommonAreaLaundry::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaPrayers()
    {
        return $this->hasMany(\backend\models\CommonAreaPrayer::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaRelaxations()
    {
        return $this->hasMany(\backend\models\CommonAreaRelaxation::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaToilets()
    {
        return $this->hasMany(\backend\models\CommonAreaToilets::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaWaitings()
    {
        return $this->hasMany(\backend\models\CommonAreaWaiting::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaWelcomes()
    {
        return $this->hasMany(\backend\models\CommonAreaWelcome::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntranceAreas()
    {
        return $this->hasMany(\backend\models\Entrancearea::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductBarAreas()
    {
        return $this->hasMany(\backend\models\ProductBarArea::className(), ['shift_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceptionAreas()
    {
        return $this->hasMany(\backend\models\ReceptionArea::className(), ['shift_id' => 'id']);
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
                'createdByAttribute' => 'checked_by',
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
     * @return \backend\models\CommonAreaQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\CommonareaQuery(get_called_class());
        return $query->where(['common_area.deleted_by' => 0]);
    }
}
