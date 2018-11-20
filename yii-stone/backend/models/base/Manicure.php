<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "manicure".
 *
 * @property integer $id
 * @property integer $turn_on_lights
 * @property integer $read_salon_logbook_hand_over_and_plan_the_day
 * @property integer $clean_sanitize_and_organize_salon_station
 * @property integer $receive_supplies_and_products_for_the_station
 * @property integer $turn_on_equipment_when_necessary
 * @property integer $sterilize_nipper_cuticle_nail_pusher_in_autoclave
 * @property integer $make_sure_that_all_linens_to_be_used_at_that_station_are_fresh
 * @property integer $organize_newspapers_magazines_promotional_materials
 * @property integer $clean_and_wipe_pedicure_chairs_manicure_stations
 * @property integer $clean_and_organize_nail_polish_racks
 * @property integer $sweep_mop_floors
 * @property integer $make_sure_there_are_no_busted_light_bulbs
 * @property integer $keep_consultation_forms_inside_drawers
 * @property integer $prepare_consultations_forms_with_name_of_client_on_hard_doard
 * @property integer $file_consultation_forms_after_finish
 * @property integer $be_sure_services_try_and_bowls_are_clean_and_organized
 * @property integer $check_baskets_of_technicien_are_clean_and_organized
 * @property integer $clean_and_organize_drawers_as_training
 * @property integer $services_try_should_be_clean_and_organized_and_no_damaged
 * @property integer $check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge
 * @property integer $wipe_pedicure_chair_with_conditionner
 * @property integer $disposible_towel
 * @property integer $tissue_box
 * @property integer $nail_brush
 * @property integer $cotton
 * @property integer $acetone
 * @property integer $cuticul_remover
 * @property integer $nail_nipper
 * @property integer $nail_cuter
 * @property integer $nail_fail
 * @property integer $pusher
 * @property integer $hand_scrub
 * @property integer $hand_mask
 * @property integer $hand_feet_lotion
 * @property integer $plastic_nilon
 * @property integer $lemon
 * @property integer $herbal_salt
 * @property integer $hand_soak
 * @property integer $parafine
 * @property integer $nail_polish
 * @property integer $nail_vitamin
 * @property integer $towels_for_hand_and_for_feet
 * @property integer $disposible_slippers
 * @property integer $nail_divider
 * @property integer $hand_bowl
 * @property integer $do_necessary_cleaning_and_station_reset
 * @property integer $empty_trash_bins_and_replace_fresh_liners
 * @property integer $ensure_quiet_interaction_with_the_customer_during_the_performanc
 * @property integer $perform_service_according_to_standard
 * @property integer $use_products_according_to_standard_recipes
 * @property integer $remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash
 * @property integer $sterilize_tools_and_materials
 * @property integer $ensure_that_supplies_tools_and_products_are_organized
 * @property integer $if_there_is_not_enough_supplies_and_products
 * @property integer $make_sure_that_all_tools_and_materials_to_be_used_in__are_availa
 * @property integer $stock_as_needed
 * @property integer $write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi
 * @property integer $send_to_laundry_area_dirty_linens
 * @property integer $conduct_day_end_inventory_of_selected_items
 * @property integer $turn_off_all_lights
 * @property string $notes
 * @property integer $checked_by
 * @property string $shift_am
 * @property string $shift_pm
 * @property string $shift_date
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_at
 * @property integer $deleted_by
 * @property integer $lock
 * @property integer $turn_on_lights2
 * @property integer $read_salon_logbook_hand_over_and_plan_the_day2
 * @property integer $clean_sanitize_and_organize_salon_station2
 * @property integer $receive_supplies_and_products_for_the_station2
 * @property integer $turn_on_equipment_when_necessary2
 * @property integer $sterilize_nipper_cuticle_nail_pusher_in_autoclave2
 * @property integer $make_sure_that_all_linens_to_be_used_at_that_station_are_fresh2
 * @property integer $organize_newspapers_magazines_promotional_materials2
 * @property integer $clean_and_wipe_pedicure_chairs_manicure_stations2
 * @property integer $clean_and_organize_nail_polish_racks2
 * @property integer $sweep_mop_floors2
 * @property integer $make_sure_there_are_no_busted_light_bulbs2
 * @property integer $keep_consultation_forms_inside_drawers2
 * @property integer $prepare_consultations_forms_with_name_of_client_on_hard_doard2
 * @property integer $file_consultation_forms_after_finish2
 * @property integer $be_sure_services_try_and_bowls_are_clean_and_organized2
 * @property integer $check_baskets_of_technicien_are_clean_and_organized2
 * @property integer $clean_and_organize_drawers_as_training2
 * @property integer $services_try_should_be_clean_and_organized_and_no_damaged2
 * @property integer $check_cleaning_basket_for_each_station_clorox_fairy_detol2
 * @property integer $wipe_pedicure_chair_with_conditionner2
 *
 * @property \backend\models\User $checkedBy
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 */
class Manicure extends \yii\db\ActiveRecord
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
            [[ 'branch_id','shift_am', 'shift_pm', 'shift_date'], 'required'],
            [['notes'], 'string'],
            [['checked_by', 'created_at', 'updated_at','branch_id', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['turn_on_lights', 'read_salon_logbook_hand_over_and_plan_the_day', 'clean_sanitize_and_organize_salon_station', 'receive_supplies_and_products_for_the_station', 'turn_on_equipment_when_necessary', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh', 'organize_newspapers_magazines_promotional_materials', 'clean_and_wipe_pedicure_chairs_manicure_stations', 'clean_and_organize_nail_polish_racks', 'sweep_mop_floors', 'make_sure_there_are_no_busted_light_bulbs', 'keep_consultation_forms_inside_drawers', 'prepare_consultations_forms_with_name_of_client_on_hard_doard', 'file_consultation_forms_after_finish', 'be_sure_services_try_and_bowls_are_clean_and_organized', 'check_baskets_of_technicien_are_clean_and_organized', 'clean_and_organize_drawers_as_training', 'services_try_should_be_clean_and_organized_and_no_damaged', 'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge', 'wipe_pedicure_chair_with_conditionner', 'disposible_towel', 'tissue_box', 'nail_brush', 'cotton', 'acetone', 'cuticul_remover', 'nail_nipper', 'nail_cuter', 'nail_fail', 'pusher', 'hand_scrub', 'hand_mask', 'hand_feet_lotion', 'plastic_nilon', 'lemon', 'herbal_salt', 'hand_soak', 'parafine', 'nail_polish', 'nail_vitamin', 'towels_for_hand_and_for_feet', 'disposible_slippers', 'nail_divider', 'hand_bowl', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash', 'sterilize_tools_and_materials', 'ensure_that_supplies_tools_and_products_are_organized', 'if_there_is_not_enough_supplies_and_products', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', 'stock_as_needed', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi', 'send_to_laundry_area_dirty_linens', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights', 'lock', 'turn_on_lights2', 'read_salon_logbook_hand_over_and_plan_the_day2', 'clean_sanitize_and_organize_salon_station2', 'receive_supplies_and_products_for_the_station2', 'turn_on_equipment_when_necessary2', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave2', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh2', 'organize_newspapers_magazines_promotional_materials2', 'clean_and_wipe_pedicure_chairs_manicure_stations2', 'clean_and_organize_nail_polish_racks2', 'sweep_mop_floors2', 'make_sure_there_are_no_busted_light_bulbs2', 'keep_consultation_forms_inside_drawers2', 'prepare_consultations_forms_with_name_of_client_on_hard_doard2', 'file_consultation_forms_after_finish2', 'be_sure_services_try_and_bowls_are_clean_and_organized2', 'check_baskets_of_technicien_are_clean_and_organized2', 'clean_and_organize_drawers_as_training2', 'services_try_should_be_clean_and_organized_and_no_damaged2', 'check_cleaning_basket_for_each_station_clorox_fairy_detol2', 'wipe_pedicure_chair_with_conditionner2'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manicure';
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

            'turn_on_lights' => Yii::t('hstone', 'Turn on lights.'),
            'read_salon_logbook_hand_over_and_plan_the_day' => Yii::t('hstone', 'Read Salon logbook hand-over and plan the day. Be sure to enact on important concerns written on the logbook'),
            'clean_sanitize_and_organize_salon_station' => Yii::t('hstone', 'Clean, sanitize and organize salon station.'),
            'receive_supplies_and_products_for_the_station' => Yii::t('hstone', 'Receive supplies and products for the station from the in charge. '),
            'turn_on_equipment_when_necessary' => Yii::t('hstone', 'Turn on equipment when necessary (tool sanitizer). '),
            'sterilize_nipper_cuticle_nail_pusher_in_autoclave' => Yii::t('hstone', 'Sterilize Nipper, cuticle nail pusher in autoclave and insert inside sterilize pouch'),
            'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh' => Yii::t('hstone', 'Make sure that all linens to be used at that station are fresh.'),
            'organize_newspapers_magazines_promotional_materials' => Yii::t('hstone', 'Organize newspapers, magazines, promotional materials.'),
            'clean_and_wipe_pedicure_chairs_manicure_stations' => Yii::t('hstone', 'Clean and wipe pedicure chairs, manicure stations.'),
            'clean_and_organize_nail_polish_racks' => Yii::t('hstone', 'Clean and organize nail polish racks.'),
            'sweep_mop_floors' => Yii::t('hstone', 'Sweep & mop floors.'),
            'make_sure_there_are_no_busted_light_bulbs' => Yii::t('hstone', 'Make sure there are no busted light bulbs. Replace when necessary.'),
            'keep_consultation_forms_inside_drawers' => Yii::t('hstone', 'Keep consultation forms inside drawers'),
            'prepare_consultations_forms_with_name_of_client_on_hard_doard' => Yii::t('hstone', 'Prepare consultations forms with name of client on hard doard'),
            'file_consultation_forms_after_finish' => Yii::t('hstone', 'File consultation forms after finish'),
            'be_sure_services_try_and_bowls_are_clean_and_organized' => Yii::t('hstone', 'Be sure services try and bowls are clean and organized'),
            'check_baskets_of_technicien_are_clean_and_organized' => Yii::t('hstone', 'Check baskets of technicien are clean and organized'),
            'clean_and_organize_drawers_as_training' => Yii::t('hstone', 'Clean and organize drawers as training'),
            'services_try_should_be_clean_and_organized_and_no_damaged' => Yii::t('hstone', 'Services try should be clean and organized and no damaged'),
            'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge' => Yii::t('hstone', 'Check cleaning basket for each station : clorox, fairy, Detol, sponge'),
            'wipe_pedicure_chair_with_conditionner' => Yii::t('hstone', 'Wipe pedicure chair with conditionner'),

            'turn_on_lights2' => Yii::t('hstone', 'Turn on lights.'),
            'read_salon_logbook_hand_over_and_plan_the_day2' => Yii::t('hstone', 'Read Salon logbook hand-over and plan the day. Be sure to enact on important concerns written on the logbook'),
            'clean_sanitize_and_organize_salon_station2' => Yii::t('hstone', 'Clean, sanitize and organize salon station.'),
            'receive_supplies_and_products_for_the_station2' => Yii::t('hstone', 'Receive supplies and products for the station from the in charge. '),
            'turn_on_equipment_when_necessary2' => Yii::t('hstone', 'Turn on equipment when necessary (tool sanitizer). '),
            'sterilize_nipper_cuticle_nail_pusher_in_autoclave2' => Yii::t('hstone', 'Sterilize Nipper, cuticle nail pusher in autoclave and insert inside sterilize pouch'),
            'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh2' => Yii::t('hstone', 'Make sure that all linens to be used at that station are fresh.'),
            'organize_newspapers_magazines_promotional_materials2' => Yii::t('hstone', 'Organize newspapers, magazines, promotional materials.'),
            'clean_and_wipe_pedicure_chairs_manicure_stations2' => Yii::t('hstone', 'Clean and wipe pedicure chairs, manicure stations.'),
            'clean_and_organize_nail_polish_racks2' => Yii::t('hstone', 'Clean and organize nail polish racks.'),
            'sweep_mop_floors2' => Yii::t('hstone', 'Sweep & mop floors.'),
            'make_sure_there_are_no_busted_light_bulbs2' => Yii::t('hstone', 'Make sure there are no busted light bulbs. Replace when necessary.'),
            'keep_consultation_forms_inside_drawers2' => Yii::t('hstone', 'Keep consultation forms inside drawers'),
            'prepare_consultations_forms_with_name_of_client_on_hard_doard2' => Yii::t('hstone', 'Prepare consultations forms with name of client on hard doard'),
            'file_consultation_forms_after_finish2' => Yii::t('hstone', 'File consultation forms after finish'),
            'be_sure_services_try_and_bowls_are_clean_and_organized2' => Yii::t('hstone', 'Be sure services try and bowls are clean and organized'),
            'check_baskets_of_technicien_are_clean_and_organized2' => Yii::t('hstone', 'Check baskets of technicien are clean and organized'),
            'clean_and_organize_drawers_as_training2' => Yii::t('hstone', 'Clean and organize drawers as training'),
            'services_try_should_be_clean_and_organized_and_no_damaged2' => Yii::t('hstone', 'Services try should be clean and organized and no damaged'),
            'check_cleaning_basket_for_each_station_clorox_fairy_detol2' => Yii::t('hstone', 'Check cleaning basket for each station : clorox, fairy, Detol, sponge'),
            'wipe_pedicure_chair_with_conditionner2' => Yii::t('hstone', 'Wipe pedicure chair with conditionner'),


            'disposible_towel' => Yii::t('hstone', 'Disposible Towel'),
            'tissue_box' => Yii::t('hstone', 'Tissue Box'),
            'nail_brush' => Yii::t('hstone', 'Nail Brush'),
            'cotton' => Yii::t('hstone', 'Cotton'),
            'acetone' => Yii::t('hstone', 'Acetone'),
            'cuticul_remover' => Yii::t('hstone', 'Cuticul Remover'),
            'nail_nipper' => Yii::t('hstone', 'Nail Nipper'),
            'nail_cuter' => Yii::t('hstone', 'Nail Cuter'),
            'nail_fail' => Yii::t('hstone', 'Nail Fail'),
            'pusher' => Yii::t('hstone', 'Pusher'),
            'hand_scrub' => Yii::t('hstone', 'Hand Scrub'),
            'hand_mask' => Yii::t('hstone', 'Hand Mask'),
            'hand_feet_lotion' => Yii::t('hstone', 'Hand Feet Lotion'),
            'plastic_nilon' => Yii::t('hstone', 'Plastic Nilon'),
            'lemon' => Yii::t('hstone', 'Lemon'),
            'herbal_salt' => Yii::t('hstone', 'Herbal Salt'),
            'hand_soak' => Yii::t('hstone', 'Hand Soak'),
            'parafine' => Yii::t('hstone', 'Parafine'),
            'nail_polish' => Yii::t('hstone', 'Nail Polish'),
            'nail_vitamin' => Yii::t('hstone', 'Nail Vitamin'),
            'towels_for_hand_and_for_feet' => Yii::t('hstone', 'Towels For Hand And For Feet'),
            'disposible_slippers' => Yii::t('hstone', 'Disposible Slippers'),
            'nail_divider' => Yii::t('hstone', 'Nail Divider'),
            'hand_bowl' => Yii::t('hstone', 'Hand Bowl'),
            'do_necessary_cleaning_and_station_reset' => Yii::t('hstone', 'Do Necessary Cleaning And Station Reset'),
            'empty_trash_bins_and_replace_fresh_liners' => Yii::t('hstone', 'Empty Trash Bins And Replace Fresh Liners'),
            'ensure_quiet_interaction_with_the_customer_during_the_performanc' => Yii::t('hstone', 'Ensure quiet interaction with the customer during the performance of service.'),
            'perform_service_according_to_standard' => Yii::t('hstone', 'Perform Service According To Standard'),
            'use_products_according_to_standard_recipes' => Yii::t('hstone', 'Use Products According To Standard Recipes'),
            'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash' => Yii::t('hstone', 'Remove dirty dishes, cups and glasses; take to cofee shop to wash and dry.'),
            'sterilize_tools_and_materials' => Yii::t('hstone', 'Sterilize tools and materials'),
            'ensure_that_supplies_tools_and_products_are_organized' => Yii::t('hstone', 'Ensure that supplies, tools and/or products are organized in their respective compartments/cabinet.'),
            'if_there_is_not_enough_supplies_and_products' => Yii::t('hstone', 'If there is not enough supplies and products, request for stocks to supervisor/manager.'),
            'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa' => Yii::t('hstone', 'Make sure that all tools and materials to be used in  are available, clean, sanitized and organized.'),
            'stock_as_needed' => Yii::t('hstone', 'Stock As Needed'),
            'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi' => Yii::t('hstone', 'Write on logbook to hand over concerns to the next day first shift.'),
            'send_to_laundry_area_dirty_linens' => Yii::t('hstone', 'Send To Laundry Area Dirty Linens'),
            'conduct_day_end_inventory_of_selected_items' => Yii::t('hstone', 'Conduct Day End Inventory Of Selected Items'),
            'turn_off_all_lights' => Yii::t('hstone', 'Turn Off All Lights'),
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
     * @return \backend\models\ManicureQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\ManicureQuery(get_called_class());
        return $query->where(['manicure.deleted_by' => 0]);
    }
}
