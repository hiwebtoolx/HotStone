<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "hair_makeup".
 *
 * @property integer $id
 * @property integer $turn_on_lights
 * @property integer $read_salon_logbook_hand_over
 * @property integer $clean_sanitize
 * @property integer $receive_supplies_and_products
 * @property integer $check_all_equipment
 * @property integer $turn_on_equipment
 * @property integer $check_water_supply
 * @property integer $check_drawers
 * @property integer $make_sure_that_all_linens
 * @property integer $organize_newspapers
 * @property integer $clean_and_wipe_salon
 * @property integer $clean_and_wipe_shampoo_bowls
 * @property integer $clean_and_sanitize_make_up_brush
 * @property integer $cart_and_trolleys_are_clean
 * @property integer $sweep_mop_floors
 * @property integer $combs_and_brushes_are_clean
 * @property integer $make_sure_that_all_scissors_are_sharp
 * @property integer $make_sure_there_are_no_busted_light_bulbs
 * @property integer $hot_cabinet_is_full_with_towel
 * @property integer $turn_on_lights2
 * @property integer $check_supplies_and_products
 * @property integer $mixing_bowls
 * @property integer $aprons
 * @property integer $water_sprayers
 * @property integer $applicator_brushes
 * @property integer $paper_towels
 * @property integer $handheld_mirrors
 * @property integer $rubber_gloves
 * @property integer $plastic_gloves
 * @property integer $shampoos
 * @property integer $conditioners
 * @property integer $hair_straightening_and_perming_kits
 * @property integer $styling_gels
 * @property integer $serums
 * @property integer $mousse
 * @property integer $hair_colors
 * @property integer $hair_spray
 * @property integer $hair_extensions
 * @property integer $make_up_remover
 * @property integer $cotton
 * @property integer $tissu
 * @property integer $ear_cotton
 * @property integer $moisturizing_cream
 * @property integer $face_scrub
 * @property integer $eclat_ampoule
 * @property integer $the_eyelashes
 * @property integer $glow_for_eyelashes
 * @property integer $tweezer
 * @property integer $small_cisor
 * @property integer $makeup_fixator
 * @property integer $makeup_brush
 * @property integer $foundation_Minimum_3_pigment
 * @property integer $eye_shadow
 * @property integer $blusher
 * @property integer $mascara
 * @property integer $eyeliner
 * @property integer $eyebrow_color
 * @property integer $customer_robe
 * @property integer $hand_sanitazer
 * @property integer $hand_wash
 * @property integer $high_lighter
 * @property integer $contouring
 * @property integer $concealer
 * @property integer $do_necessary_cleaning_and_station_reset
 * @property integer $empty_trash_bins_and_replace_fresh_liners
 * @property integer $ensure_quiet_interaction_with_the_customer
 * @property integer $perform_service_according_to_standard
 * @property integer $use_products_according_to_standard_recipes
 * @property integer $remove_dirty_dishes_cups
 * @property integer $sterilize_tools_and_materials
 * @property integer $products_are_organized_in_their_respective_compartments
 * @property integer $If_there_is_not_enough_supplies_and_products
 * @property integer $make_sure_that_all_tools_and_materials_to_be_used_in__are_availa
 * @property integer $stock_as_needed
 * @property integer $write_on_logbook_to_hand_over_concerns
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
 * @property integer $deleted_by
 * @property integer $deleted_at
 * @property integer $lock
 * @property integer $read_salon_logbook_hand_over2
 * @property integer $clean_sanitize2
 * @property integer $receive_supplies_and_products2
 * @property integer $check_all_equipment2
 * @property integer $turn_on_equipment2
 * @property integer $check_water_supply2
 * @property integer $check_drawers2
 * @property integer $make_sure_that_all_linens2
 * @property integer $organize_newspapers2
 * @property integer $clean_and_wipe_salon2
 * @property integer $clean_and_wipe_shampoo_bowls2
 * @property integer $clean_and_sanitize_make_up_brush2
 * @property integer $cart_and_trolleys_are_clean2
 * @property integer $sweep_mop_floors2
 * @property integer $combs_and_brushes_are_clean2
 * @property integer $make_sure_that_all_scissors_are_sharp2
 * @property integer $make_sure_there_are_no_busted_light_bulbs2
 * @property integer $hot_cabinet_is_full_with_towel2
 *
 * @property \backend\models\User $checkedBy
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 */
class HairMakeup extends \yii\db\ActiveRecord
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
            [[ 'shift_am', 'shift_pm', 'branch_id' ,'shift_date' ], 'required'],
            [['notes'], 'string'],
            [['checked_by', 'created_at', 'updated_at', 'branch_id','updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['turn_on_lights', 'read_salon_logbook_hand_over', 'clean_sanitize', 'receive_supplies_and_products', 'check_all_equipment', 'turn_on_equipment', 'check_water_supply', 'check_drawers', 'make_sure_that_all_linens', 'organize_newspapers', 'clean_and_wipe_salon', 'clean_and_wipe_shampoo_bowls', 'clean_and_sanitize_make_up_brush', 'cart_and_trolleys_are_clean', 'sweep_mop_floors', 'combs_and_brushes_are_clean', 'make_sure_that_all_scissors_are_sharp', 'make_sure_there_are_no_busted_light_bulbs', 'hot_cabinet_is_full_with_towel', 'turn_on_lights2', 'check_supplies_and_products', 'mixing_bowls', 'aprons', 'water_sprayers', 'applicator_brushes', 'paper_towels', 'handheld_mirrors', 'rubber_gloves', 'plastic_gloves', 'shampoos', 'conditioners', 'hair_straightening_and_perming_kits', 'styling_gels', 'serums', 'mousse', 'hair_colors', 'hair_spray', 'hair_extensions', 'make_up_remover', 'cotton', 'tissu', 'ear_cotton', 'moisturizing_cream', 'face_scrub', 'eclat_ampoule', 'the_eyelashes', 'glow_for_eyelashes', 'tweezer', 'small_cisor', 'makeup_fixator', 'makeup_brush', 'foundation_Minimum_3_pigment', 'eye_shadow', 'blusher', 'mascara', 'eyeliner', 'eyebrow_color', 'customer_robe', 'hand_sanitazer', 'hand_wash', 'high_lighter', 'contouring', 'concealer', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups', 'sterilize_tools_and_materials', 'products_are_organized_in_their_respective_compartments', 'If_there_is_not_enough_supplies_and_products', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', 'stock_as_needed', 'write_on_logbook_to_hand_over_concerns', 'send_to_laundry_area_dirty_linens', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights', 'lock', 'read_salon_logbook_hand_over2', 'clean_sanitize2', 'receive_supplies_and_products2', 'check_all_equipment2', 'turn_on_equipment2', 'check_water_supply2', 'check_drawers2', 'make_sure_that_all_linens2', 'organize_newspapers2', 'clean_and_wipe_salon2', 'clean_and_wipe_shampoo_bowls2', 'clean_and_sanitize_make_up_brush2', 'cart_and_trolleys_are_clean2', 'sweep_mop_floors2', 'combs_and_brushes_are_clean2', 'make_sure_that_all_scissors_are_sharp2', 'make_sure_there_are_no_busted_light_bulbs2', 'hot_cabinet_is_full_with_towel2'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hair_makeup';
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

            'turn_on_lights' => Yii::t('hstone', 'Turn On Lights'),
            'read_salon_logbook_hand_over' => Yii::t('hstone', 'Read Salon logbook hand-over and plan the day. Be sure to enact on important concerns written on the logbook.'),
            'clean_sanitize' => Yii::t('hstone', 'Clean, sanitize and organize salon station.'),
            'receive_supplies_and_products' => Yii::t('hstone', 'Receive supplies and products for the station from the in charge.'),
            'check_all_equipment' => Yii::t('hstone', 'Check all equipment if they are in good working condition including hair dryers, hood dryers, tool sanitizer,  hair straightener, hair dryer, hot cabinet,  ac and ventilation'),
            'turn_on_equipment' => Yii::t('hstone', 'Turn on equipment when necessary (tool sanitizer).'),
            'check_water_supply' => Yii::t('hstone', 'Check water supply, smell and temperature. Report immediately if any abnormality. Temperature must be betweeen 43 to 46 degrees F.'),
            'check_drawers' => Yii::t('hstone', 'Check drawers are clean and organized'),
            'make_sure_that_all_linens' => Yii::t('hstone', 'Make sure that all linens to be used at that station are fresh.'),
            'organize_newspapers' => Yii::t('hstone', 'Organize newspapers, magazines, promotional materials.'),
            'clean_and_wipe_salon' => Yii::t('hstone', 'Clean and wipe salon stations, chairs, mirrors.'),
            'clean_and_wipe_shampoo_bowls' => Yii::t('hstone', 'Clean and wipe shampoo bowls. '),
            'clean_and_sanitize_make_up_brush' => Yii::t('hstone', 'Clean and sanitize Make up brush '),
            'cart_and_trolleys_are_clean' => Yii::t('hstone', 'Make sure that all cart and trolleys are clean and organized'),
            'sweep_mop_floors' => Yii::t('hstone', 'Sweep & mop floors.'),
            'combs_and_brushes_are_clean' => Yii::t('hstone', 'Make sure that all combs and brushes are clean and sanitized.'),
            'make_sure_that_all_scissors_are_sharp' => Yii::t('hstone', 'Make sure that all scissors are sharp, clean and sanitized.'),
            'make_sure_there_are_no_busted_light_bulbs' => Yii::t('hstone', 'Make sure there are no busted light bulbs. Replace when necessary.'),
            'hot_cabinet_is_full_with_towel' => Yii::t('hstone', 'Hot cabinet is full with towel'),

            'turn_on_lights2' => Yii::t('hstone', 'Turn On Lights'),
            'read_salon_logbook_hand_over2' => Yii::t('hstone', 'Read Salon logbook hand-over and plan the day. Be sure to enact on important concerns written on the logbook.'),
            'clean_sanitize2' => Yii::t('hstone', 'Clean, sanitize and organize salon station.'),
            'receive_supplies_and_products2' => Yii::t('hstone', 'Receive supplies and products for the station from the in charge.'),
            'check_all_equipment2' => Yii::t('hstone', 'Check all equipment if they are in good working condition including hair dryers, hood dryers, tool sanitizer,  hair straightener, hair dryer, hot cabinet,  ac and ventilation'),
            'turn_on_equipment2' => Yii::t('hstone', 'Turn on equipment when necessary (tool sanitizer).'),
            'check_water_supply2' => Yii::t('hstone', 'Check water supply, smell and temperature. Report immediately if any abnormality. Temperature must be betweeen 43 to 46 degrees F.'),
            'check_drawers2' => Yii::t('hstone', 'Check drawers are clean and organized'),
            'make_sure_that_all_linens2' => Yii::t('hstone', 'Make sure that all linens to be used at that station are fresh.'),
            'organize_newspapers2' => Yii::t('hstone', 'Organize newspapers, magazines, promotional materials.'),
            'clean_and_wipe_salon2' => Yii::t('hstone', 'Clean and wipe salon stations, chairs, mirrors.'),
            'clean_and_wipe_shampoo_bowls2' => Yii::t('hstone', 'Clean and wipe shampoo bowls. '),
            'clean_and_sanitize_make_up_brush2' => Yii::t('hstone', 'Clean and sanitize Make up brush '),
            'cart_and_trolleys_are_clean2' => Yii::t('hstone', 'Make sure that all cart and trolleys are clean and organized'),
            'sweep_mop_floors2' => Yii::t('hstone', 'Sweep & mop floors.'),
            'combs_and_brushes_are_clean2' => Yii::t('hstone', 'Make sure that all combs and brushes are clean and sanitized.'),
            'make_sure_that_all_scissors_are_sharp2' => Yii::t('hstone', 'Make sure that all scissors are sharp, clean and sanitized.'),
            'make_sure_there_are_no_busted_light_bulbs2' => Yii::t('hstone', 'Make sure there are no busted light bulbs. Replace when necessary.'),
            'hot_cabinet_is_full_with_towel2' => Yii::t('hstone', 'Hot cabinet is full with towel'),


            'check_supplies_and_products' => Yii::t('hstone', 'Check Supplies And Products'),
            'mixing_bowls' => Yii::t('hstone', 'Mixing Bowls'),
            'aprons' => Yii::t('hstone', 'Aprons'),
            'water_sprayers' => Yii::t('hstone', 'Water Sprayers'),
            'applicator_brushes' => Yii::t('hstone', 'Applicator Brushes'),
            'paper_towels' => Yii::t('hstone', 'Paper Towels'),
            'handheld_mirrors' => Yii::t('hstone', 'Handheld Mirrors'),
            'rubber_gloves' => Yii::t('hstone', 'Rubber Gloves'),
            'plastic_gloves' => Yii::t('hstone', 'Plastic Gloves'),
            'shampoos' => Yii::t('hstone', 'Shampoos'),
            'conditioners' => Yii::t('hstone', 'Conditioners'),
            'hair_straightening_and_perming_kits' => Yii::t('hstone', 'Hair Straightening And Perming Kits'),
            'styling_gels' => Yii::t('hstone', 'Styling Gels'),
            'serums' => Yii::t('hstone', 'Serums'),
            'mousse' => Yii::t('hstone', 'Mousse'),
            'hair_colors' => Yii::t('hstone', 'Hair Colors'),
            'hair_spray' => Yii::t('hstone', 'Hair Spray'),
            'hair_extensions' => Yii::t('hstone', 'Hair Extensions'),
            'make_up_remover' => Yii::t('hstone', 'Make Up Remover'),
            'cotton' => Yii::t('hstone', 'Cotton'),
            'tissu' => Yii::t('hstone', 'Tissu'),
            'ear_cotton' => Yii::t('hstone', 'Ear Cotton'),
            'moisturizing_cream' => Yii::t('hstone', 'Moisturizing Cream'),
            'face_scrub' => Yii::t('hstone', 'Face Scrub'),
            'eclat_ampoule' => Yii::t('hstone', 'Eclat Ampoule'),
            'the_eyelashes' => Yii::t('hstone', 'The Eyelashes'),
            'glow_for_eyelashes' => Yii::t('hstone', 'Glow For Eyelashes'),
            'tweezer' => Yii::t('hstone', 'Tweezer'),
            'small_cisor' => Yii::t('hstone', 'Small Cisor'),
            'makeup_fixator' => Yii::t('hstone', 'Makeup Fixator'),
            'makeup_brush' => Yii::t('hstone', 'Makeup Brush'),
            'foundation_Minimum_3_pigment' => Yii::t('hstone', 'Foundation Minmum 3 pigment (wite, meduim and dark)'),
            'eye_shadow' => Yii::t('hstone', 'Eye Shadow'),
            'blusher' => Yii::t('hstone', 'Blusher'),
            'mascara' => Yii::t('hstone', 'Mascara'),
            'eyeliner' => Yii::t('hstone', 'Eyeliner'),
            'eyebrow_color' => Yii::t('hstone', 'Eyebrow Color'),
            'customer_robe' => Yii::t('hstone', 'Customer Robe'),
            'hand_sanitazer' => Yii::t('hstone', 'Hand Sanitazer'),
            'hand_wash' => Yii::t('hstone', 'Hand Wash'),
            'high_lighter' => Yii::t('hstone', 'High Lighter'),
            'contouring' => Yii::t('hstone', 'Contouring'),
            'concealer' => Yii::t('hstone', 'Concealer'),
            'do_necessary_cleaning_and_station_reset' => Yii::t('hstone', 'Do Necessary Cleaning And Station Reset'),
            'empty_trash_bins_and_replace_fresh_liners' => Yii::t('hstone', 'Empty Trash Bins And Replace Fresh Liners'),
            'ensure_quiet_interaction_with_the_customer' => Yii::t('hstone', 'Ensure quiet interaction with the customer during the performance of service.'),
            'perform_service_according_to_standard' => Yii::t('hstone', 'Perform Service According To Standard'),
            'use_products_according_to_standard_recipes' => Yii::t('hstone', 'Use Products According To Standard Recipes'),
            'remove_dirty_dishes_cups' => Yii::t('hstone', 'Remove dirty dishes, cups and glasses; take to cofee shop to wash and dry.'),
            'sterilize_tools_and_materials' => Yii::t('hstone', 'Sterilize Tools And Materials'),
            'products_are_organized_in_their_respective_compartments' => Yii::t('hstone', 'Ensure that supplies, tools and/or products are organized in their respective compartments/cabinet.'),
            'If_there_is_not_enough_supplies_and_products' => Yii::t('hstone', 'If there is not enough supplies and products, request for stocks to supervisor/manager.'),
            'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa' => Yii::t('hstone', 'Make sure that all tools and materials to be used in  are available, clean, sanitized and organized.'),
            'stock_as_needed' => Yii::t('hstone', 'Stock As Needed'),
            'write_on_logbook_to_hand_over_concerns' => Yii::t('hstone', 'Write on logbook to hand over concerns to the next day first shift.'),
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
     * @return \backend\models\HairMakeupQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\HairMakeupQuery(get_called_class());
        return $query->where(['hair_makeup.deleted_by' => 0]);
    }
}
