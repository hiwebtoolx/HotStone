<?php

namespace backend\models;

use Yii;
use \backend\models\base\ProductionArea as BaseProductionArea;

/**
 * This is the model class for table "production_area".
 */
class ProductionArea extends BaseProductionArea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
            [
                [[ 'branch_id','shift_am', 'shift_pm', 'shift_date', ], 'required'],
                [['notes'], 'string'],
                [['checked_by', 'created_at','branch_id', 'updated_at', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
                [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
                [['turn_on_lights', 'read_salon_logbook', 'clean_sanitize', 'receive_supplies', 'check_all_equipment', 'turn_on_equipment', 'sterilize_foot_rock', 'organize_retail', 'sweep_mop_floors', 'tools_and_containers_in_the_preparation', 'check_temperature', 'ensure_that_ingredients', 'ingredients_in_containers_are_properly_labeled', 'no_busted_light_bulbs', 'turn_on_lights2', 'shift_time2', 'read_salon_logbook2', 'clean_sanitize2', 'receive_supplies2', 'check_all_equipment2', 'turn_on_equipment2', 'sterilize_foot_rock2', 'organize_retail2', 'sweep_mop_floors2', 'tools_and_containers_in_the_preparation2', 'check_temperature2', 'ensure_that_ingredients2', 'ingredients_in_containers_are_properly_labeled2', 'check_supplies_and_products', 'greek_yoghurt', 'fresh_ginger', 'cucumber', 'lemon', 'frech_flowers', 'mud', 'black_soap', 'massage_oil', 'oat_mail_mask', 'body_scrub', 'lulur_scrub', 'body_lotion', 'shampo', 'conditionner', 'shower_gel', 'bloosom_water', 'amber_salt', 'henna', 'oriental_bokhour', 'gold', 'pearl', 'activator', 'cellulate_cream', 'cweed_wrap', 'record_waste', 'do_necessary_cleaning', 'empty_trash', 'ensure_quiet_interaction', 'perform_service', 'use_products', 'write_on_logbook_to_hand_over', 'send_to_laundry', 'deplug_herbal_steamer', 'clean_product_bowls', 'put_herbal_pack', 'turn_off_all_lights', 'lock'], 'default', 'value' => '0'],
                [['lock'], 'mootensai\components\OptimisticLockValidator']
            ]);
    }

}
