<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "front_house".
 *
 * @property integer $id
 * @property integer $turn_on_lights
 * @property integer $turn_off_alarm
 * @property integer $read_foh_logbook
 * @property integer $organize_newspapers
 * @property integer $indoor_plants
 * @property integer $clean_and_wipe_chairs
 * @property integer $sweep_mop_floors
 * @property integer $no_busted_light_bulbs
 * @property integer $turn_on_tv
 * @property integer $turn_on_pos
 * @property integer $receive_cashiers
 * @property integer $scan_days_appointment
 * @property integer $print_therapists_schedule
 * @property integer $brochures_are_available
 * @property integer $print_customer_appointments
 * @property integer $prepare_food_canapes
 * @property integer $prepare_tea_bags
 * @property integer $brew_coffee
 * @property integer $necessary_cleaning
 * @property integer $empty_trash_bins
 * @property integer $ensure_lively_interaction
 * @property integer $remove_dirty_dishes
 * @property integer $hand_over_of_pos
 * @property integer $write_on_logbook
 * @property integer $put_all_used_gift_certificates
 * @property integer $close_pos
 * @property integer $empty_trash_bins_and_sanitize
 * @property integer $throw_out_dated_newspapers
 * @property integer $turn_off_all_lights
 * @property integer $set_on_alarm_system
 * @property integer $lock_the_door
 * @property string $notes
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 * @property integer $deleted_at
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $lock
 * @property integer $checked_by
 * @property string $shift_am
 * @property string $shift_pm
 * @property string $shift_date
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $checkedBy
 */
class FrontHouse extends \yii\db\ActiveRecord
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
            'branch'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'branch_id', 'shift_am', 'shift_pm', 'shift_date'], 'required'],
            [['notes'], 'string'],
            [[ 'updated_by', 'deleted_by','branch_id', 'deleted_at', 'created_at', 'updated_at', 'checked_by'], 'integer'],
            [['turn_on_lights', 'turn_off_alarm', 'read_foh_logbook', 'organize_newspapers', 'indoor_plants', 'clean_and_wipe_chairs', 'sweep_mop_floors', 'no_busted_light_bulbs', 'turn_on_tv', 'turn_on_pos', 'receive_cashiers', 'scan_days_appointment', 'print_therapists_schedule', 'brochures_are_available', 'print_customer_appointments', 'prepare_food_canapes', 'prepare_tea_bags', 'brew_coffee', 'necessary_cleaning', 'empty_trash_bins', 'ensure_lively_interaction', 'remove_dirty_dishes', 'hand_over_of_pos', 'write_on_logbook', 'put_all_used_gift_certificates', 'close_pos', 'empty_trash_bins_and_sanitize', 'throw_out_dated_newspapers', 'turn_off_all_lights', 'set_on_alarm_system', 'lock_the_door', 'lock'], 'default', 'value' => '0'],
            [['shift_am', 'shift_pm', 'shift_date'], 'string', 'max' => 255],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'front_house';
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
            'turn_on_lights' => Yii::t('hstone', 'Turn on lights/AC/Aroma/music system.'),
            'turn_off_alarm' => Yii::t('hstone', 'Turn off alarm system'),
            'read_foh_logbook' => Yii::t('hstone', 'Read FOH logbook hand-over and plan the day. Be sure to enact on important concerns written on the logbook.'),
            'organize_newspapers' => Yii::t('hstone', 'Organize newspapers, magazines, promotional materials.'),
            'indoor_plants' => Yii::t('hstone', 'Water indoor plants and place fresh flowers.'),
            'clean_and_wipe_chairs' => Yii::t('hstone', 'Clean and wipe chairs, tables, glass doors and glass walls.'),
            'sweep_mop_floors' => Yii::t('hstone', 'Sweep & mop floors.'),
            'no_busted_light_bulbs' => Yii::t('hstone', 'Make sure there are no busted light bulbs. Replace when necessary.'),
            'turn_on_tv' => Yii::t('hstone', 'Turn on TV. Play Hot stone video playlist.'),
            'turn_on_pos' => Yii::t('hstone', 'Turn on POS. Ensure correct date.'),
            'receive_cashiers' => Yii::t('hstone', 'Receive cashier\'s float from supervisor.'),
            'scan_days_appointment' => Yii::t('hstone', 'Scan day\'s appointment (Salon Iris) and prepare customer consent forms'),
            'print_therapists_schedule' => Yii::t('hstone', 'Print therapists\' daily schedule and give to in-charge.'),
            'brochures_are_available' => Yii::t('hstone', 'Make sure service menu and brochures are available and properly displayed.'),
            'print_customer_appointments' => Yii::t('hstone', 'Print and post customer appointments on the employee bulletin board.'),
            'prepare_food_canapes' => Yii::t('hstone', 'Prepare food canapes.'),
            'prepare_tea_bags' => Yii::t('hstone', 'Prepare tea bags, sugar, cups and saucers.'),
            'brew_coffee' => Yii::t('hstone', 'Brew coffee.'),
            'necessary_cleaning' => Yii::t('hstone', 'Do necessary cleaning and station reset.'),
            'empty_trash_bins' => Yii::t('hstone', 'Empty trash bins and replace fresh liners.'),
            'ensure_lively_interaction' => Yii::t('hstone', 'Ensure lively interaction with the customer during the performance of service.'),
            'remove_dirty_dishes' => Yii::t('hstone', 'Remove dirty dishes, cups and glasses; take to Coffe shop to wash and dry.'),
            'hand_over_of_pos' => Yii::t('hstone', 'Do proper hand-over of POS and cash/credit card sales.'),
            'write_on_logbook' => Yii::t('hstone', 'Write on logbook to hand over concerns to the next day first shift.'),
            'put_all_used_gift_certificates' => Yii::t('hstone', 'Put all used gift certificates, void invoices, complimentary invoices, invoices with discounts into envelope and secure them in them in the safe.'),
            'close_pos' => Yii::t('hstone', 'Close POS. Print the Day\'s Sales report and balance it against cash and credit card sales. Put Cash and Credit Card invoices in an envelope. (to be perofrmed with the in-charge.)'),
            'empty_trash_bins_and_sanitize' => Yii::t('hstone', 'Empty trash bins and sanitize.'),
            'throw_out_dated_newspapers' => Yii::t('hstone', 'Throw out-dated newspapers and magazines and promotional materials.'),
            'turn_off_all_lights' => Yii::t('hstone', 'Turn off all lights/AC/music system.'),
            'set_on_alarm_system' => Yii::t('hstone', 'Set on alarm system.'),
            'lock_the_door' => Yii::t('hstone', 'Lock the door.'),
            'notes' => Yii::t('hstone', 'Notes'),
            'lock' => Yii::t('hstone', 'Lock'),
            'checked_by' => Yii::t('hstone', 'Checked By'),
            'shift_am' => Yii::t('hstone', 'Shift Am'),
            'shift_pm' => Yii::t('hstone', 'Shift Pm'),
            'shift_date' => Yii::t('hstone', 'Shift Date'),
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
     * @return \backend\models\FrontHouseQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\FrontHouseQuery(get_called_class());
        return $query->where(['front_house.deleted_by' => 0]);
    }
}
