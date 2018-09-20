<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "production_area".
 *
 * @property integer $id
 * @property integer $turn_on_lights
 * @property integer $read_salon_logbook
 * @property integer $clean_sanitize
 * @property integer $receive_supplies
 * @property integer $check_all_equipment
 * @property integer $turn_on_equipment
 * @property integer $sterilize_foot_rock
 * @property integer $organize_retail
 * @property integer $sweep_mop_floors
 * @property integer $tools_and_containers_in_the_preparation
 * @property integer $check_temperature
 * @property integer $ensure_that_ingredients
 * @property integer $ingredients_in_containers_are_properly_labeled
 * @property integer $no_busted_light_bulbs
 * @property integer $turn_on_lights2
 * @property integer $shift_time2
 * @property integer $read_salon_logbook2
 * @property integer $clean_sanitize2
 * @property integer $receive_supplies2
 * @property integer $check_all_equipment2
 * @property integer $turn_on_equipment2
 * @property integer $sterilize_foot_rock2
 * @property integer $organize_retail2
 * @property integer $sweep_mop_floors2
 * @property integer $tools_and_containers_in_the_preparation2
 * @property integer $check_temperature2
 * @property integer $ensure_that_ingredients2
 * @property integer $ingredients_in_containers_are_properly_labeled2
 * @property integer $check_supplies_and_products
 * @property integer $greek_yoghurt
 * @property integer $fresh_ginger
 * @property integer $cucumber
 * @property integer $lemon
 * @property integer $frech_flowers
 * @property integer $mud
 * @property integer $black_soap
 * @property integer $massage_oil
 * @property integer $oat_mail_mask
 * @property integer $body_scrub
 * @property integer $lulur_scrub
 * @property integer $body_lotion
 * @property integer $shampo
 * @property integer $conditionner
 * @property integer $shower_gel
 * @property integer $bloosom_water
 * @property integer $amber_salt
 * @property integer $henna
 * @property integer $oriental_bokhour
 * @property integer $gold
 * @property integer $pearl
 * @property integer $activator
 * @property integer $cellulate_cream
 * @property integer $cweed_wrap
 * @property integer $record_waste
 * @property integer $do_necessary_cleaning
 * @property integer $empty_trash
 * @property integer $ensure_quiet_interaction
 * @property integer $perform_service
 * @property integer $use_products
 * @property integer $write_on_logbook_to_hand_over
 * @property integer $send_to_laundry
 * @property integer $deplug_herbal_steamer
 * @property integer $clean_product_bowls
 * @property integer $put_herbal_pack
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
 * @property \backend\models\ProductionAreaOpening[] $productionAreaOpenings
 */
class ProductionArea extends \yii\db\ActiveRecord
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
            'productionAreaOpenings',
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
            [['checked_by', 'created_at','branch_id' ,'updated_at',  'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['turn_on_lights', 'read_salon_logbook', 'clean_sanitize', 'receive_supplies', 'check_all_equipment', 'turn_on_equipment', 'sterilize_foot_rock', 'organize_retail', 'sweep_mop_floors', 'tools_and_containers_in_the_preparation', 'check_temperature', 'ensure_that_ingredients', 'ingredients_in_containers_are_properly_labeled', 'no_busted_light_bulbs', 'turn_on_lights2', 'shift_time2', 'read_salon_logbook2', 'clean_sanitize2', 'receive_supplies2', 'check_all_equipment2', 'turn_on_equipment2', 'sterilize_foot_rock2', 'organize_retail2', 'sweep_mop_floors2', 'tools_and_containers_in_the_preparation2', 'check_temperature2', 'ensure_that_ingredients2', 'ingredients_in_containers_are_properly_labeled2', 'check_supplies_and_products', 'greek_yoghurt', 'fresh_ginger', 'cucumber', 'lemon', 'frech_flowers', 'mud', 'black_soap', 'massage_oil', 'oat_mail_mask', 'body_scrub', 'lulur_scrub', 'body_lotion', 'shampo', 'conditionner', 'shower_gel', 'bloosom_water', 'amber_salt', 'henna', 'oriental_bokhour', 'gold', 'pearl', 'activator', 'cellulate_cream', 'cweed_wrap', 'record_waste', 'do_necessary_cleaning', 'empty_trash', 'ensure_quiet_interaction', 'perform_service', 'use_products', 'write_on_logbook_to_hand_over', 'send_to_laundry', 'deplug_herbal_steamer', 'clean_product_bowls', 'put_herbal_pack', 'turn_off_all_lights', 'lock'],  'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'production_area';
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
            'read_salon_logbook' => Yii::t('hstone', 'Read Salon logbook hand-over and plan the day. Be sure to enact on important concerns written on the logbook.'),
            'clean_sanitize' => Yii::t('hstone', 'Clean, sanitize and organize salon station.'),
            'receive_supplies' => Yii::t('hstone', 'Receive supplies and products for the station from the in charge.'),
            'check_all_equipment' => Yii::t('hstone', 'Check all equipment if they are in good working condition'),
            'turn_on_equipment' => Yii::t('hstone', 'Turn on equipment when necessary ( hearbal steamer, fridge, mixer)'),
            'sterilize_foot_rock' => Yii::t('hstone', 'Sterilize foot rock in UV light and put in sterilize pouch'),
            'organize_retail' => Yii::t('hstone', 'Organize retail products and promotional materials.	'),
            'sweep_mop_floors' => Yii::t('hstone', 'Sweep & mop floors.'),
            'tools_and_containers_in_the_preparation' => Yii::t('hstone', 'Make sure that all tools and containers in the preparation of products are available, clean and organized.'),
            'check_temperature' => Yii::t('hstone', 'Check temperature of fridge. Use Temperature Log.'),
            'ensure_that_ingredients' => Yii::t('hstone', 'Ensure that ingredients and products stored in fridge are organized and poperly labeled with production, expiry dates and date of opening.'),
            'ingredients_in_containers_are_properly_labeled' => Yii::t('hstone', 'Make sure that ingredients in containers are properly labeled.'),
            'no_busted_light_bulbs' => Yii::t('hstone', 'Make sure there are no busted light bulbs. Replace when necessary.'),
            'turn_on_lights2' => Yii::t('hstone', 'Turn On Lights'),
            'shift_time2' => Yii::t('hstone', 'Shift Time'),
            'read_salon_logbook2' => Yii::t('hstone', 'Read Salon logbook hand-over and plan the day. Be sure to enact on important concerns written on the logbook.'),
            'clean_sanitize2' => Yii::t('hstone', 'Clean, sanitize and organize salon station.'),
            'receive_supplies2' => Yii::t('hstone', 'Receive supplies and products for the station from the in charge.	'),
            'check_all_equipment2' => Yii::t('hstone', 'Check all equipment if they are in good working condition'),
            'turn_on_equipment2' => Yii::t('hstone', 'Turn on equipment when necessary ( hearbal steamer, fridge, mixer)'),
            'sterilize_foot_rock2' => Yii::t('hstone', 'Sterilize foot rock in UV light and put in sterilize pouch	'),
            'organize_retail2' => Yii::t('hstone', 'Organize retail products and promotional materials.l'),
            'sweep_mop_floors2' => Yii::t('hstone', 'Sweep & mop floors.'),
            'no_busted_light_bulbs2' => Yii::t('hstone', 'Make sure there are no busted light bulbs. Replace when necessary.'),
            'tools_and_containers_in_the_preparation2' => Yii::t('hstone', 'Make sure that all tools and containers in the preparation of products are available, clean and organized.'),
            'check_temperature2' => Yii::t('hstone', 'Check temperature of fridge. Use Temperature Log.'),
            'ensure_that_ingredients2' => Yii::t('hstone', 'Ensure that ingredients and products stored in fridge are organized and poperly labeled with production, expiry dates and date of opening.'),
            'ingredients_in_containers_are_properly_labeled2' => Yii::t('hstone', 'Make sure that ingredients in containers are properly labeled.'),
            'check_supplies_and_products' => Yii::t('hstone', 'Check Supplies And Products'),
            'greek_yoghurt' => Yii::t('hstone', 'Greek Yoghurt'),
            'fresh_ginger' => Yii::t('hstone', 'Fresh Ginger'),
            'cucumber' => Yii::t('hstone', 'Cucumber'),
            'lemon' => Yii::t('hstone', 'Lemon'),
            'frech_flowers' => Yii::t('hstone', 'Frech Flowers'),
            'mud' => Yii::t('hstone', 'Mud'),
            'black_soap' => Yii::t('hstone', 'Black Soap'),
            'massage_oil' => Yii::t('hstone', 'Massage Oil'),
            'oat_mail_mask' => Yii::t('hstone', 'Oat Mail Mask'),
            'body_scrub' => Yii::t('hstone', 'Body Scrub'),
            'lulur_scrub' => Yii::t('hstone', 'Lulur Scrub'),
            'body_lotion' => Yii::t('hstone', 'Body Lotion'),
            'shampo' => Yii::t('hstone', 'Shampo'),
            'conditionner' => Yii::t('hstone', 'Conditionner'),
            'shower_gel' => Yii::t('hstone', 'Shower Gel'),
            'bloosom_water' => Yii::t('hstone', 'Bloosom Water'),
            'amber_salt' => Yii::t('hstone', 'Amber Salt'),
            'henna' => Yii::t('hstone', 'Henna'),
            'oriental_bokhour' => Yii::t('hstone', 'Oriental Bokhour'),
            'gold' => Yii::t('hstone', 'Gold'),
            'pearl' => Yii::t('hstone', 'Pearl'),
            'activator' => Yii::t('hstone', 'Activator'),
            'cellulate_cream' => Yii::t('hstone', 'Cellulate Cream'),
            'cweed_wrap' => Yii::t('hstone', 'Cweed Wrap'),
            'record_waste' => Yii::t('hstone', 'Record waste/expired items. Use Expired/Wate Form.'),
            'do_necessary_cleaning' => Yii::t('hstone', 'Do necessary cleaning and station reset.'),
            'empty_trash' => Yii::t('hstone', 'Empty trash bins and replace fresh liners.'),
            'ensure_quiet_interaction' => Yii::t('hstone', 'Ensure quiet interaction with the customer during the performance of service.'),
            'perform_service' => Yii::t('hstone', 'Perform service according to standard.	'),
            'use_products' => Yii::t('hstone', 'Use products according to standard recipes.'),
            'write_on_logbook_to_hand_over' => Yii::t('hstone', 'Write on logbook to hand over concerns to the next day first shift.'),
            'send_to_laundry' => Yii::t('hstone', 'Send to laundry area dirty linens.'),
            'deplug_herbal_steamer' => Yii::t('hstone', 'Deplug herbal steamer'	),
            'clean_product_bowls' => Yii::t('hstone', 'Clean product bowls, spoon and knife and replace in cabinet'),
            'put_herbal_pack' => Yii::t('hstone', 'Put herbal pack in the fridge'),
            'turn_off_all_lights' => Yii::t('hstone', 'Turn off all lights'),
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
     * @return \yii\db\ActiveQuery
     */
    public function getProductionAreaOpenings()
    {
        return $this->hasMany(\backend\models\ProductionAreaOpening::className(), ['shift_id' => 'id']);
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
     * @return \backend\models\ProductionAreaQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\ProductionAreaQuery(get_called_class());
        return $query->where(['production_area.deleted_by' => 0]);
    }
}