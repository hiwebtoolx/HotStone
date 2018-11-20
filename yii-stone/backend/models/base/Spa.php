<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "spa".
 *
 * @property integer $id
 * @property integer $turn_on_dim_lights
 * @property integer $read_spa_logbook_handover
 * @property integer $facial_room
 * @property integer $massage_room
 * @property integer $hammam_bath
 * @property integer $ayurveda_room
 * @property integer $relaxation_room
 * @property integer $lit_candles_and_aroma_burners
 * @property integer $check_ventilation_ac_is_working
 * @property integer $check_Aroma_system_is_working
 * @property integer $check_hammam_steamer_is_working
 * @property integer $check_smell_drain
 * @property integer $receive_supplies_and_products
 * @property integer $be_sure_that_all_equipment
 * @property integer $turn_on_equipment_when_necessary
 * @property integer $check_water_temperature
 * @property integer $make_sure_that_all_linens_to_fresh
 * @property integer $clean_and_wipe_facial_chairs_and_mirrors
 * @property integer $set_massage_beds
 * @property integer $make_sure_that_all_cart_and_trolleys_are_clean
 * @property integer $sweep_and_mop_floors
 * @property integer $prepare_hot_towels_and_robes
 * @property integer $check_temperature_humidity
 * @property integer $make_sure_there_are_no_busted_light_bulbs
 * @property integer $check_supplies_and_products
 * @property integer $face_towels
 * @property integer $cotton
 * @property integer $ear_cotton
 * @property integer $hair_band
 * @property integer $cleanser
 * @property integer $make_up_remover
 * @property integer $face_wach
 * @property integer $tonic
 * @property integer $facial_scrub
 * @property integer $mask_different_skin_type
 * @property integer $massage_cream_or_oil
 * @property integer $ampoule
 * @property integer $distilate_water
 * @property integer $check_facial_unit_is_working
 * @property integer $disposable_towels
 * @property integer $handheld_mirrors
 * @property integer $spoon
 * @property integer $mixing_bowl
 * @property integer $towel_bowl
 * @property integer $disposable_gloves
 * @property integer $robes_towels
 * @property integer $disposible_panty
 * @property integer $disposible_bra
 * @property integer $disposible_slippers
 * @property integer $candles
 * @property integer $aroma
 * @property integer $plastic_sheets
 * @property integer $hammam_morrocan_lifa
 * @property integer $hammam_robes_towels
 * @property integer $hammam_disposible_panty
 * @property integer $hammam_disposible_bra
 * @property integer $hammam_disposible_slippers
 * @property integer $hammam_products
 * @property integer $hammam_candles
 * @property integer $hammam_aroma
 * @property integer $hammam_plastic_sheets
 * @property integer $body_treatment_products
 * @property integer $body_robes_towels
 * @property integer $body_disposible_panty
 * @property integer $body_disposible_bra
 * @property integer $body_disposible_slippers
 * @property integer $body_products_for_body_treatment
 * @property integer $body_candles
 * @property integer $body_aroma
 * @property integer $body_plastic_sheets
 * @property integer $moroccan_tea_herbal_tea
 * @property integer $water_detox_water
 * @property integer $cake_snacks
 * @property integer $do_necessary_cleaning_and_station_reset
 * @property integer $empty_trash_bins_and_replace_fresh_liners
 * @property integer $ensure_quiet_interaction_with_the_customer_during_the_performanc
 * @property integer $ensure_that_supplies_tools_and_or_products
 * @property integer $is_not_enough_supplies_and_products_request_for_stocks
 * @property integer $all_tools_and_materials_to_be_used_in__are_available
 * @property integer $stock_as_needed
 * @property integer $perform_service_according_to_standard
 * @property integer $use_products_according_to_standard_recipes
 * @property integer $remove_dirty_dishes_cups_and_glasses
 * @property integer $sterilize_tools_and_materials
 * @property integer $write_on_logbook_to_hand_over_concerns_to_the_next_day_first
 * @property integer $send_to_laundry_area_dirty_linens_used_towles
 * @property integer $conduct_day_end_inventory_of_selected_items
 * @property integer $turn_off_all_lights_and_ac
 * @property integer $keep_ventilation_open
 * @property integer $be_sure_bowls_is_empty_and_clean
 * @property integer $empty_trash
 * @property string $notes
 * @property integer $checked_by
 * @property string $shift_am
 * @property string $shift_pm
 * @property string $shift_date
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 * @property integer $deleted_at
 * @property integer $lock
 * @property integer $turn_on_dim_lights2
 * @property integer $read_spa_logbook_handover2
 * @property integer $facial_room2
 * @property integer $massage_room2
 * @property integer $hammam_bath2
 * @property integer $ayurveda_room2
 * @property integer $relaxation_room2
 * @property integer $lit_candles_and_aroma_burners2
 * @property integer $check_ventilation_ac_is_working2
 * @property integer $check_Aroma_system_is_working2
 * @property integer $check_hammam_steamer_is_working2
 * @property integer $check_smell_drain2
 * @property integer $receive_supplies_and_products2
 * @property integer $be_sure_that_all_equipment2
 * @property integer $turn_on_equipment_when_necessary2
 * @property integer $check_water_temperature2
 * @property integer $make_sure_that_all_linens_to_fresh2
 * @property integer $clean_and_wipe_facial_chairs_and_mirrors2
 * @property integer $set_massage_beds2
 * @property integer $make_sure_that_all_cart_and_trolleys_are_clean2
 * @property integer $sweep_and_mop_floors2
 * @property integer $prepare_hot_towels_and_robes2
 * @property integer $check_temperature_humidity2
 * @property integer $make_sure_there_are_no_busted_light_bulbs2
 *
 * @property \backend\models\User $checkedBy
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 */
class Spa extends \yii\db\ActiveRecord
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
            'updatedBy',
            'branch'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'shift_am', 'shift_pm','branch_id', 'shift_date', ], 'required'],
            [['notes'], 'string'],
            [['checked_by', 'updated_at','branch_id', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['turn_on_dim_lights', 'read_spa_logbook_handover', 'facial_room', 'massage_room', 'hammam_bath', 'ayurveda_room', 'relaxation_room', 'lit_candles_and_aroma_burners', 'check_ventilation_ac_is_working', 'check_Aroma_system_is_working', 'check_hammam_steamer_is_working', 'check_smell_drain', 'receive_supplies_and_products', 'be_sure_that_all_equipment', 'turn_on_equipment_when_necessary', 'check_water_temperature', 'make_sure_that_all_linens_to_fresh', 'clean_and_wipe_facial_chairs_and_mirrors', 'set_massage_beds', 'make_sure_that_all_cart_and_trolleys_are_clean', 'sweep_and_mop_floors', 'prepare_hot_towels_and_robes', 'check_temperature_humidity', 'make_sure_there_are_no_busted_light_bulbs', 'check_supplies_and_products', 'face_towels', 'cotton', 'ear_cotton', 'hair_band', 'cleanser', 'make_up_remover', 'face_wach', 'tonic', 'facial_scrub', 'mask_different_skin_type', 'massage_cream_or_oil', 'ampoule', 'distilate_water', 'check_facial_unit_is_working', 'disposable_towels', 'handheld_mirrors', 'spoon', 'mixing_bowl', 'towel_bowl', 'disposable_gloves', 'robes_towels', 'disposible_panty', 'disposible_bra', 'disposible_slippers', 'candles', 'aroma', 'plastic_sheets', 'hammam_morrocan_lifa', 'hammam_robes_towels', 'hammam_disposible_panty', 'hammam_disposible_bra', 'hammam_disposible_slippers', 'hammam_products', 'hammam_candles', 'hammam_aroma', 'hammam_plastic_sheets', 'body_treatment_products', 'body_robes_towels', 'body_disposible_panty', 'body_disposible_bra', 'body_disposible_slippers', 'body_products_for_body_treatment', 'body_candles', 'body_aroma', 'body_plastic_sheets', 'moroccan_tea_herbal_tea', 'water_detox_water', 'cake_snacks', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', 'ensure_that_supplies_tools_and_or_products', 'is_not_enough_supplies_and_products_request_for_stocks', 'all_tools_and_materials_to_be_used_in__are_available', 'stock_as_needed', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups_and_glasses', 'sterilize_tools_and_materials', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first', 'send_to_laundry_area_dirty_linens_used_towles', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights_and_ac', 'keep_ventilation_open', 'be_sure_bowls_is_empty_and_clean', 'empty_trash', 'lock', 'turn_on_dim_lights2', 'read_spa_logbook_handover2', 'facial_room2', 'massage_room2', 'hammam_bath2', 'ayurveda_room2', 'relaxation_room2', 'lit_candles_and_aroma_burners2', 'check_ventilation_ac_is_working2', 'check_Aroma_system_is_working2', 'check_hammam_steamer_is_working2', 'check_smell_drain2', 'receive_supplies_and_products2', 'be_sure_that_all_equipment2', 'turn_on_equipment_when_necessary2', 'check_water_temperature2', 'make_sure_that_all_linens_to_fresh2', 'clean_and_wipe_facial_chairs_and_mirrors2', 'set_massage_beds2', 'make_sure_that_all_cart_and_trolleys_are_clean2', 'sweep_and_mop_floors2', 'prepare_hot_towels_and_robes2', 'check_temperature_humidity2', 'make_sure_there_are_no_busted_light_bulbs2'],  'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spa';
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

            'turn_on_dim_lights2' => Yii::t('hstone', 'Turn on dim lights/music system.  Music system in Spa area is quiet.'),
            'read_spa_logbook_handover2' => Yii::t('hstone', 'Read Spa logbook hand-over and plan the day. Be sure to enact on important concerns written on the logbook.'),
            'facial_room2' => Yii::t('hstone', 'Facial Room'),
            'massage_room2' => Yii::t('hstone', 'Massage Room'),
            'hammam_bath2' => Yii::t('hstone', 'Hammam/Bath'),
            'ayurveda_room2' => Yii::t('hstone', 'Ayurveda Room'),
            'relaxation_room2' => Yii::t('hstone', 'Relaxation Room'),
            'lit_candles_and_aroma_burners2' => Yii::t('hstone', 'Lit Candles And Aroma Burners'),
            'check_ventilation_ac_is_working2' => Yii::t('hstone', 'Check ventilation / AC is working'),
            'check_Aroma_system_is_working2' => Yii::t('hstone', 'Check  Aroma System Is Working'),
            'check_hammam_steamer_is_working2' => Yii::t('hstone', 'Check Hammam Steamer Is Working'),
            'check_smell_drain2' => Yii::t('hstone', 'Check smell drain ( majary)'),
            'receive_supplies_and_products2' => Yii::t('hstone', 'Receive supplies and products for the station from the in charge. '),
            'be_sure_that_all_equipment2' => Yii::t('hstone', 'Be sure that all equipment if they are in good working condition.'),
            'turn_on_equipment_when_necessary2' => Yii::t('hstone', 'Turn on equipment when necessary ( hot hstone heater)'),
            'check_water_temperature2' => Yii::t('hstone', 'Check water temperature. Report immediately if any abnormality.'),
            'make_sure_that_all_linens_to_fresh2' => Yii::t('hstone', 'Make sure that all linens to be used at that station are fresh.'),
            'clean_and_wipe_facial_chairs_and_mirrors2' => Yii::t('hstone', 'Clean and wipe facial chairs and mirrors.'),
            'set_massage_beds2' => Yii::t('hstone', 'Make sure that all cart and trolleys are clean and organized'),
            'make_sure_that_all_cart_and_trolleys_are_clean2' => Yii::t('hstone', 'Make Sure That All Cart And Trolleys Are Clean'),
            'sweep_and_mop_floors2' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'prepare_hot_towels_and_robes2' => Yii::t('hstone', 'Prepare Hot Towels And Robes'),
            'check_temperature_humidity2' => Yii::t('hstone', 'Check temperature/humidity of the room. Temperature should range between 24 to 25 degrees celsius.'),
            'make_sure_there_are_no_busted_light_bulbs2' => Yii::t('hstone', 'Make sure there are no busted light bulbs. Replace when necessary.'),


            'turn_on_dim_lights' => Yii::t('hstone', 'Turn on dim lights/music system.  Music system in Spa area is quiet.'),
            'read_spa_logbook_handover' => Yii::t('hstone', 'Read Spa logbook hand-over and plan the day. Be sure to enact on important concerns written on the logbook.'),
            'facial_room' => Yii::t('hstone', 'Facial Room'),
            'massage_room' => Yii::t('hstone', 'Massage Room'),
            'hammam_bath' => Yii::t('hstone', 'Hammam/Bath'),
            'ayurveda_room' => Yii::t('hstone', 'Ayurveda Room'),
            'relaxation_room' => Yii::t('hstone', 'Relaxation Room'),
            'lit_candles_and_aroma_burners' => Yii::t('hstone', 'Lit Candles And Aroma Burners'),
            'check_ventilation_ac_is_working' => Yii::t('hstone', 'Check ventilation / AC is working'),
            'check_Aroma_system_is_working' => Yii::t('hstone', 'Check  Aroma System Is Working'),
            'check_hammam_steamer_is_working' => Yii::t('hstone', 'Check Hammam Steamer Is Working'),
            'check_smell_drain' => Yii::t('hstone', 'Check smell drain ( majary)'),
            'receive_supplies_and_products' => Yii::t('hstone', 'Receive supplies and products for the station from the in charge. '),
            'be_sure_that_all_equipment' => Yii::t('hstone', 'Be sure that all equipment if they are in good working condition.'),
            'turn_on_equipment_when_necessary' => Yii::t('hstone', 'Turn on equipment when necessary ( hot hstone heater)'),
            'check_water_temperature' => Yii::t('hstone', 'Check water temperature. Report immediately if any abnormality.'),
            'make_sure_that_all_linens_to_fresh' => Yii::t('hstone', 'Make sure that all linens to be used at that station are fresh.'),
            'clean_and_wipe_facial_chairs_and_mirrors' => Yii::t('hstone', 'Clean and wipe facial chairs and mirrors.'),
            'set_massage_beds' => Yii::t('hstone', 'Make sure that all cart and trolleys are clean and organized'),
            'make_sure_that_all_cart_and_trolleys_are_clean' => Yii::t('hstone', 'Make Sure That All Cart And Trolleys Are Clean'),
            'sweep_and_mop_floors' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'prepare_hot_towels_and_robes' => Yii::t('hstone', 'Prepare Hot Towels And Robes'),
            'check_temperature_humidity' => Yii::t('hstone', 'Check temperature/humidity of the room. Temperature should range between 24 to 25 degrees celsius.'),
            'make_sure_there_are_no_busted_light_bulbs' => Yii::t('hstone', 'Make sure there are no busted light bulbs. Replace when necessary.'),


            'check_supplies_and_products' => Yii::t('hstone', 'Check supplies and products. Make sure it is more than enough for the entire day operations. '),
            'face_towels' => Yii::t('hstone', 'Face Towels'),
            'cotton' => Yii::t('hstone', 'Cotton'),
            'ear_cotton' => Yii::t('hstone', 'Ear Cotton'),
            'hair_band' => Yii::t('hstone', 'Hair Band'),
            'cleanser' => Yii::t('hstone', 'Cleanser'),
            'make_up_remover' => Yii::t('hstone', 'Make Up Remover'),
            'face_wach' => Yii::t('hstone', 'Face Wach'),
            'tonic' => Yii::t('hstone', 'Tonic'),
            'facial_scrub' => Yii::t('hstone', 'Facial Scrub'),
            'mask_different_skin_type' => Yii::t('hstone', 'Mask Different Skin Type'),
            'massage_cream_or_oil' => Yii::t('hstone', 'Massage Cream Or Oil'),
            'ampoule' => Yii::t('hstone', 'Ampoule'),
            'distilate_water' => Yii::t('hstone', 'Distilate Water'),
            'check_facial_unit_is_working' => Yii::t('hstone', 'Check Facial Unit Is Working'),
            'disposable_towels' => Yii::t('hstone', 'Disposable Towels'),
            'handheld_mirrors' => Yii::t('hstone', 'Handheld Mirrors'),
            'spoon' => Yii::t('hstone', 'Spoon'),
            'mixing_bowl' => Yii::t('hstone', 'Mixing Bowl'),
            'towel_bowl' => Yii::t('hstone', 'Towel Bowl'),
            'disposable_gloves' => Yii::t('hstone', 'Disposable Gloves'),
            'robes_towels' => Yii::t('hstone', 'Robes Towels'),
            'disposible_panty' => Yii::t('hstone', 'Disposible Panty'),
            'disposible_bra' => Yii::t('hstone', 'Disposible Bra'),
            'disposible_slippers' => Yii::t('hstone', 'Disposible Slippers'),
            'candles' => Yii::t('hstone', 'Candles'),
            'aroma' => Yii::t('hstone', 'Aroma'),
            'plastic_sheets' => Yii::t('hstone', 'Plastic Sheets'),
            'hammam_morrocan_lifa' => Yii::t('hstone', 'Hammam Morrocan Lifa'),
            'hammam_robes_towels' => Yii::t('hstone', 'Hammam Robes Towels'),
            'hammam_disposible_panty' => Yii::t('hstone', 'Hammam Disposible Panty'),
            'hammam_disposible_bra' => Yii::t('hstone', 'Hammam Disposible Bra'),
            'hammam_disposible_slippers' => Yii::t('hstone', 'Hammam Disposible Slippers'),
            'hammam_products' => Yii::t('hstone', 'Hammam Products'),
            'hammam_candles' => Yii::t('hstone', 'Hammam Candles'),
            'hammam_aroma' => Yii::t('hstone', 'Hammam Aroma'),
            'hammam_plastic_sheets' => Yii::t('hstone', 'Hammam Plastic Sheets'),
            'body_treatment_products' => Yii::t('hstone', 'Body Treatment Products'),
            'body_robes_towels' => Yii::t('hstone', 'Body Robes Towels'),
            'body_disposible_panty' => Yii::t('hstone', 'Body Disposible Panty'),
            'body_disposible_bra' => Yii::t('hstone', 'Body Disposible Bra'),
            'body_disposible_slippers' => Yii::t('hstone', 'Body Disposible Slippers'),
            'body_products_for_body_treatment' => Yii::t('hstone', 'Body Products For Body Treatment'),
            'body_candles' => Yii::t('hstone', 'Body Candles'),
            'body_aroma' => Yii::t('hstone', 'Body Aroma'),
            'body_plastic_sheets' => Yii::t('hstone', 'Body Plastic Sheets'),
            'moroccan_tea_herbal_tea' => Yii::t('hstone', 'Moroccan Tea Herbal Tea'),
            'water_detox_water' => Yii::t('hstone', 'Water Detox Water'),
            'cake_snacks' => Yii::t('hstone', 'Cake Snacks'),
            'do_necessary_cleaning_and_station_reset' => Yii::t('hstone', 'Do Necessary Cleaning And Station Reset'),
            'empty_trash_bins_and_replace_fresh_liners' => Yii::t('hstone', 'Empty Trash Bins And Replace Fresh Liners'),
            'ensure_quiet_interaction_with_the_customer_during_the_performanc' => Yii::t('hstone', 'Ensure quiet interaction with the customer during the performance of service.'),
            'ensure_that_supplies_tools_and_or_products' => Yii::t('hstone', 'Ensure that supplies, tools and/or products are organized in their respective compartments/cabinet.'),
            'is_not_enough_supplies_and_products_request_for_stocks' => Yii::t('hstone', 'If there is not enough supplies and products, request for stocks to supervisor/manager.'),
            'all_tools_and_materials_to_be_used_in__are_available' => Yii::t('hstone', 'Make sure that all tools and materials to be used in  are available, clean, sanitized and organized.'),
            'stock_as_needed' => Yii::t('hstone', 'Stock As Needed'),
            'perform_service_according_to_standard' => Yii::t('hstone', 'Perform Service According To Standard'),
            'use_products_according_to_standard_recipes' => Yii::t('hstone', 'Use Products According To Standard Recipes'),
            'remove_dirty_dishes_cups_and_glasses' => Yii::t('hstone', 'Remove dirty dishes, cups and glasses; take to cofee shop to wash and dry.'),
            'sterilize_tools_and_materials' => Yii::t('hstone', 'Sterilize Tools And Materials'),
            'write_on_logbook_to_hand_over_concerns_to_the_next_day_first' => Yii::t('hstone', 'Write on logbook to hand over concerns to the next day first shift.'),
            'send_to_laundry_area_dirty_linens_used_towles' => Yii::t('hstone', 'Send to laundry area dirty linens, used towles, used slippers and used lifa.'),
            'conduct_day_end_inventory_of_selected_items' => Yii::t('hstone', 'Conduct day-end inventory of selected items.'),
            'turn_off_all_lights_and_ac' => Yii::t('hstone', 'Turn Off All Lights And Ac'),
            'keep_ventilation_open' => Yii::t('hstone', 'Keep Ventilation Open'),
            'be_sure_bowls_is_empty_and_clean' => Yii::t('hstone', 'Be Sure Bowls Is Empty And Clean'),
            'empty_trash' => Yii::t('hstone', 'Empty Trash'),
            'notes' => Yii::t('hstone', 'Notes'),
            'checked_by' => Yii::t('hstone', 'Checked By'),
            'shift_am' => Yii::t('hstone', 'Shift Am'),
            'shift_pm' => Yii::t('hstone', 'Shift Pm'),
            'shift_date' => Yii::t('hstone', 'Shift Date'),
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
    public function getCheckedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'checked_by']);
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
     * @return \backend\models\SpaQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\SpaQuery(get_called_class());
        return $query->where(['spa.deleted_by' => 0]);
    }
}
