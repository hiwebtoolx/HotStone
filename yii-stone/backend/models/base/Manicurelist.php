<?php

namespace backend\models\base;

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
 *
 * @property \backend\models\User $checkedBy
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 */
class Manicurelist extends \yii\db\ActiveRecord
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
            [['turn_on_lights', 'read_salon_logbook_hand_over_and_plan_the_day', 'clean_sanitize_and_organize_salon_station', 'receive_supplies_and_products_for_the_station', 'turn_on_equipment_when_necessary', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh', 'organize_newspapers_magazines_promotional_materials', 'clean_and_wipe_pedicure_chairs_manicure_stations', 'clean_and_organize_nail_polish_racks', 'sweep_mop_floors', 'make_sure_there_are_no_busted_light_bulbs', 'keep_consultation_forms_inside_drawers', 'prepare_consultations_forms_with_name_of_client_on_hard_doard', 'file_consultation_forms_after_finish', 'be_sure_services_try_and_bowls_are_clean_and_organized', 'check_baskets_of_technicien_are_clean_and_organized', 'clean_and_organize_drawers_as_training', 'services_try_should_be_clean_and_organized_and_no_damaged', 'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge', 'wipe_pedicure_chair_with_conditionner', 'disposible_towel', 'tissue_box', 'nail_brush', 'cotton', 'acetone', 'cuticul_remover', 'nail_nipper', 'nail_cuter', 'nail_fail', 'pusher', 'hand_scrub', 'hand_mask', 'hand_feet_lotion', 'plastic_nilon', 'lemon', 'herbal_salt', 'hand_soak', 'parafine', 'nail_polish', 'nail_vitamin', 'towels_for_hand_and_for_feet', 'disposible_slippers', 'nail_divider', 'hand_bowl', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash', 'sterilize_tools_and_materials', 'ensure_that_supplies_tools_and_products_are_organized', 'if_there_is_not_enough_supplies_and_products', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', 'stock_as_needed', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi', 'send_to_laundry_area_dirty_linens', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights', 'notes', 'checked_by', 'shift_am', 'shift_pm', 'shift_date', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by', 'lock'], 'required'],
            [['notes'], 'string'],
            [['checked_by', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['turn_on_lights', 'read_salon_logbook_hand_over_and_plan_the_day', 'clean_sanitize_and_organize_salon_station', 'receive_supplies_and_products_for_the_station', 'turn_on_equipment_when_necessary', 'sterilize_nipper_cuticle_nail_pusher_in_autoclave', 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh', 'organize_newspapers_magazines_promotional_materials', 'clean_and_wipe_pedicure_chairs_manicure_stations', 'clean_and_organize_nail_polish_racks', 'sweep_mop_floors', 'make_sure_there_are_no_busted_light_bulbs', 'keep_consultation_forms_inside_drawers', 'prepare_consultations_forms_with_name_of_client_on_hard_doard', 'file_consultation_forms_after_finish', 'be_sure_services_try_and_bowls_are_clean_and_organized', 'check_baskets_of_technicien_are_clean_and_organized', 'clean_and_organize_drawers_as_training', 'services_try_should_be_clean_and_organized_and_no_damaged', 'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge', 'wipe_pedicure_chair_with_conditionner', 'disposible_towel', 'tissue_box', 'nail_brush', 'cotton', 'acetone', 'cuticul_remover', 'nail_nipper', 'nail_cuter', 'nail_fail', 'pusher', 'hand_scrub', 'hand_mask', 'hand_feet_lotion', 'plastic_nilon', 'lemon', 'herbal_salt', 'hand_soak', 'parafine', 'nail_polish', 'nail_vitamin', 'towels_for_hand_and_for_feet', 'disposible_slippers', 'nail_divider', 'hand_bowl', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer_during_the_performanc', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash', 'sterilize_tools_and_materials', 'ensure_that_supplies_tools_and_products_are_organized', 'if_there_is_not_enough_supplies_and_products', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', 'stock_as_needed', 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi', 'send_to_laundry_area_dirty_linens', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
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
            'id' => Yii::t('stone', 'ID'),
            'turn_on_lights' => Yii::t('stone', 'Turn On Lights'),
            'read_salon_logbook_hand_over_and_plan_the_day' => Yii::t('stone', 'Read Salon Logbook Hand Over And Plan The Day'),
            'clean_sanitize_and_organize_salon_station' => Yii::t('stone', 'Clean Sanitize And Organize Salon Station'),
            'receive_supplies_and_products_for_the_station' => Yii::t('stone', 'Receive Supplies And Products For The Station'),
            'turn_on_equipment_when_necessary' => Yii::t('stone', 'Turn On Equipment When Necessary'),
            'sterilize_nipper_cuticle_nail_pusher_in_autoclave' => Yii::t('stone', 'Sterilize Nipper Cuticle Nail Pusher In Autoclave'),
            'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh' => Yii::t('stone', 'Make Sure That All Linens To Be Used At That Station Are Fresh'),
            'organize_newspapers_magazines_promotional_materials' => Yii::t('stone', 'Organize Newspapers Magazines Promotional Materials'),
            'clean_and_wipe_pedicure_chairs_manicure_stations' => Yii::t('stone', 'Clean And Wipe Pedicure Chairs Manicure Stations'),
            'clean_and_organize_nail_polish_racks' => Yii::t('stone', 'Clean And Organize Nail Polish Racks'),
            'sweep_mop_floors' => Yii::t('stone', 'Sweep Mop Floors'),
            'make_sure_there_are_no_busted_light_bulbs' => Yii::t('stone', 'Make Sure There Are No Busted Light Bulbs'),
            'keep_consultation_forms_inside_drawers' => Yii::t('stone', 'Keep Consultation Forms Inside Drawers'),
            'prepare_consultations_forms_with_name_of_client_on_hard_doard' => Yii::t('stone', 'Prepare Consultations Forms With Name Of Client On Hard Doard'),
            'file_consultation_forms_after_finish' => Yii::t('stone', 'File Consultation Forms After Finish'),
            'be_sure_services_try_and_bowls_are_clean_and_organized' => Yii::t('stone', 'Be Sure Services Try And Bowls Are Clean And Organized'),
            'check_baskets_of_technicien_are_clean_and_organized' => Yii::t('stone', 'Check Baskets Of Technicien Are Clean And Organized'),
            'clean_and_organize_drawers_as_training' => Yii::t('stone', 'Clean And Organize Drawers As Training'),
            'services_try_should_be_clean_and_organized_and_no_damaged' => Yii::t('stone', 'Services Try Should Be Clean And Organized And No Damaged'),
            'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge' => Yii::t('stone', 'Check Cleaning Basket For Each Station Clorox Fairy Detol Sponge'),
            'wipe_pedicure_chair_with_conditionner' => Yii::t('stone', 'Wipe Pedicure Chair With Conditionner'),
            'disposible_towel' => Yii::t('stone', 'Disposible Towel'),
            'tissue_box' => Yii::t('stone', 'Tissue Box'),
            'nail_brush' => Yii::t('stone', 'Nail Brush'),
            'cotton' => Yii::t('stone', 'Cotton'),
            'acetone' => Yii::t('stone', 'Acetone'),
            'cuticul_remover' => Yii::t('stone', 'Cuticul Remover'),
            'nail_nipper' => Yii::t('stone', 'Nail Nipper'),
            'nail_cuter' => Yii::t('stone', 'Nail Cuter'),
            'nail_fail' => Yii::t('stone', 'Nail Fail'),
            'pusher' => Yii::t('stone', 'Pusher'),
            'hand_scrub' => Yii::t('stone', 'Hand Scrub'),
            'hand_mask' => Yii::t('stone', 'Hand Mask'),
            'hand_feet_lotion' => Yii::t('stone', 'Hand Feet Lotion'),
            'plastic_nilon' => Yii::t('stone', 'Plastic Nilon'),
            'lemon' => Yii::t('stone', 'Lemon'),
            'herbal_salt' => Yii::t('stone', 'Herbal Salt'),
            'hand_soak' => Yii::t('stone', 'Hand Soak'),
            'parafine' => Yii::t('stone', 'Parafine'),
            'nail_polish' => Yii::t('stone', 'Nail Polish'),
            'nail_vitamin' => Yii::t('stone', 'Nail Vitamin'),
            'towels_for_hand_and_for_feet' => Yii::t('stone', 'Towels For Hand And For Feet'),
            'disposible_slippers' => Yii::t('stone', 'Disposible Slippers'),
            'nail_divider' => Yii::t('stone', 'Nail Divider'),
            'hand_bowl' => Yii::t('stone', 'Hand Bowl'),
            'do_necessary_cleaning_and_station_reset' => Yii::t('stone', 'Do Necessary Cleaning And Station Reset'),
            'empty_trash_bins_and_replace_fresh_liners' => Yii::t('stone', 'Empty Trash Bins And Replace Fresh Liners'),
            'ensure_quiet_interaction_with_the_customer_during_the_performanc' => Yii::t('stone', 'Ensure Quiet Interaction With The Customer During The Performanc'),
            'perform_service_according_to_standard' => Yii::t('stone', 'Perform Service According To Standard'),
            'use_products_according_to_standard_recipes' => Yii::t('stone', 'Use Products According To Standard Recipes'),
            'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash' => Yii::t('stone', 'Remove Dirty Dishes Cups And Glasses Take To Coffee Shop To Wash'),
            'sterilize_tools_and_materials' => Yii::t('stone', 'Sterilize Tools And Materials'),
            'ensure_that_supplies_tools_and_products_are_organized' => Yii::t('stone', 'Ensure That Supplies Tools And Products Are Organized'),
            'if_there_is_not_enough_supplies_and_products' => Yii::t('stone', 'If There Is Not Enough Supplies And Products'),
            'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa' => Yii::t('stone', 'Make Sure That All Tools And Materials To Be Used In  Are Availa'),
            'stock_as_needed' => Yii::t('stone', 'Stock As Needed'),
            'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi' => Yii::t('stone', 'Write On Logbook To Hand Over Concerns To The Next Day First Shi'),
            'send_to_laundry_area_dirty_linens' => Yii::t('stone', 'Send To Laundry Area Dirty Linens'),
            'conduct_day_end_inventory_of_selected_items' => Yii::t('stone', 'Conduct Day End Inventory Of Selected Items'),
            'turn_off_all_lights' => Yii::t('stone', 'Turn Off All Lights'),
            'notes' => Yii::t('stone', 'Notes'),
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
     * @return \backend\models\ManicurelistQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\ManicurelistQuery(get_called_class());
        return $query->where(['manicure.deleted_by' => 0]);
    }
}
