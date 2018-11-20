<?php

namespace backend\models;

use Yii;
use \backend\models\base\FrontHouse as BaseFrontHouse;

/**
 * This is the model class for table "front_house".
 */
class FrontHouse extends BaseFrontHouse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [[ 'branch_id','shift_am', 'shift_pm', 'shift_date'], 'required'],
            [['notes'], 'string'],
            [['updated_by', 'deleted_by','branch_id', 'deleted_at', 'created_at', 'updated_at', 'checked_by'], 'integer'],
            [['turn_on_lights', 'turn_off_alarm', 'read_foh_logbook', 'organize_newspapers', 'indoor_plants', 'clean_and_wipe_chairs', 'sweep_mop_floors', 'no_busted_light_bulbs', 'turn_on_tv', 'turn_on_pos', 'receive_cashiers', 'scan_days_appointment', 'print_therapists_schedule', 'brochures_are_available', 'print_customer_appointments', 'prepare_food_canapes', 'prepare_tea_bags', 'brew_coffee', 'necessary_cleaning', 'empty_trash_bins', 'ensure_lively_interaction', 'remove_dirty_dishes', 'hand_over_of_pos', 'write_on_logbook', 'put_all_used_gift_certificates', 'close_pos', 'empty_trash_bins_and_sanitize', 'throw_out_dated_newspapers', 'turn_off_all_lights', 'set_on_alarm_system', 'lock_the_door', 'lock'], 'default', 'value' => '0'],
            [['shift_am', 'shift_pm', 'shift_date'], 'string', 'max' => 255],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }

}
