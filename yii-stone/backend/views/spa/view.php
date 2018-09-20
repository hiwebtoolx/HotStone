<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Spa */

$this->title = $model->shift_date .' - '. $model->shift_am.' to '.$model->shift_pm;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Spas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spa-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Spa').' : '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
<?=             
             Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . Yii::t('stone', 'PDF'), 
                ['pdf', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'target' => '_blank',
                    'data-toggle' => 'tooltip',
                    'title' => Yii::t('stone', 'Will open the generated PDF file in a new window')
                ]
            )?>
            <?= Html::a(Yii::t('stone', 'Save As New'), ['save-as-new', 'id' => $model->id], ['class' => 'btn btn-info']) ?>            
            <?= Html::a(Yii::t('stone', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('stone', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('stone', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'checkedBy.username',
            'label' => Yii::t('stone', 'Checked By'),
        ],
        'shift_am',
        'shift_pm',
        'shift_date',

                ['attribute' => 'turn_on_dim_lights',
                            'value' => function($model){
                                return $model->turn_on_dim_lights == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                        ],
        ['attribute' => 'read_spa_logbook_handover',
                    'value' => function($model){
                        return $model->read_spa_logbook_handover == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'facial_room',
                    'value' => function($model){
                        return $model->facial_room == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'massage_room',
                    'value' => function($model){
                        return $model->massage_room == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_bath',
                    'value' => function($model){
                        return $model->hammam_bath == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'ayurveda_room',
                    'value' => function($model){
                        return $model->ayurveda_room == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'ayurveda_room',
                    'value' => function($model){
                        return $model->ayurveda_room == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'relaxation_room',
                    'value' => function($model){
                        return $model->relaxation_room == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'lit_candles_and_aroma_burners',
                    'value' => function($model){
                        return $model->lit_candles_and_aroma_burners == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_ventilation_ac_is_working',
                    'value' => function($model){
                        return $model->check_ventilation_ac_is_working == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_Aroma_system_is_working',
                    'value' => function($model){
                        return $model->check_Aroma_system_is_working == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_hammam_steamer_is_working',
                    'value' => function($model){
                        return $model->check_hammam_steamer_is_working == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_smell_drain',
                    'value' => function($model){
                        return $model->check_smell_drain == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'receive_supplies_and_products',
                    'value' => function($model){
                        return $model->receive_supplies_and_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'be_sure_that_all_equipment',
                    'value' => function($model){
                        return $model->be_sure_that_all_equipment == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'turn_on_equipment_when_necessary',
                    'value' => function($model){
                        return $model->turn_on_equipment_when_necessary == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_water_temperature',
                    'value' => function($model){
                        return $model->check_water_temperature == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'make_sure_that_all_linens_to_fresh',
                    'value' => function($model){
                        return $model->make_sure_that_all_linens_to_fresh == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'clean_and_wipe_facial_chairs_and_mirrors',
                    'value' => function($model){
                        return $model->clean_and_wipe_facial_chairs_and_mirrors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'set_massage_beds',
                    'value' => function($model){
                        return $model->set_massage_beds == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'make_sure_that_all_cart_and_trolleys_are_clean',
                    'value' => function($model){
                        return $model->make_sure_that_all_cart_and_trolleys_are_clean == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'prepare_hot_towels_and_robes',
                    'value' => function($model){
                        return $model->prepare_hot_towels_and_robes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_temperature_humidity',
                    'value' => function($model){
                        return $model->check_temperature_humidity == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'make_sure_there_are_no_busted_light_bulbs',
                    'value' => function($model){
                        return $model->make_sure_there_are_no_busted_light_bulbs == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_supplies_and_products',
                    'value' => function($model){
                        return $model->check_supplies_and_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'face_towels',
                    'value' => function($model){
                        return $model->face_towels == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'cotton',
                    'value' => function($model){
                        return $model->cotton == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'ear_cotton',
                    'value' => function($model){
                        return $model->ear_cotton == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hair_band',
                    'value' => function($model){
                        return $model->hair_band == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'cleanser',
                    'value' => function($model){
                        return $model->cleanser == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'make_up_remover',
                    'value' => function($model){
                        return $model->make_up_remover == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'face_wach',
                    'value' => function($model){
                        return $model->face_wach == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'tonic',
                    'value' => function($model){
                        return $model->tonic == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'facial_scrub',
                    'value' => function($model){
                        return $model->facial_scrub == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'mask_different_skin_type',
                    'value' => function($model){
                        return $model->mask_different_skin_type == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'massage_cream_or_oil',
                    'value' => function($model){
                        return $model->massage_cream_or_oil == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'ampoule',
                    'value' => function($model){
                        return $model->ampoule == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'distilate_water',
                    'value' => function($model){
                        return $model->distilate_water == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_facial_unit_is_working',
                    'value' => function($model){
                        return $model->check_facial_unit_is_working == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'disposable_towels',
                    'value' => function($model){
                        return $model->disposable_towels == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'handheld_mirrors',
                    'value' => function($model){
                        return $model->handheld_mirrors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'spoon',
                    'value' => function($model){
                        return $model->spoon == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'mixing_bowl',
                    'value' => function($model){
                        return $model->mixing_bowl == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'towel_bowl',
                    'value' => function($model){
                        return $model->towel_bowl == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'disposable_gloves',
                    'value' => function($model){
                        return $model->disposable_gloves == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'robes_towels',
                    'value' => function($model){
                        return $model->robes_towels == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'disposible_panty',
                    'value' => function($model){
                        return $model->disposible_panty == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'disposible_bra',
                    'value' => function($model){
                        return $model->disposible_bra == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'disposible_slippers',
                    'value' => function($model){
                        return $model->disposible_slippers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'candles',
                    'value' => function($model){
                        return $model->candles == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'aroma',
                    'value' => function($model){
                        return $model->aroma == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'plastic_sheets',
                    'value' => function($model){
                        return $model->plastic_sheets == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_morrocan_lifa',
                    'value' => function($model){
                        return $model->hammam_morrocan_lifa == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_robes_towels',
                    'value' => function($model){
                        return $model->hammam_robes_towels == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_disposible_panty',
                    'value' => function($model){
                        return $model->hammam_disposible_panty == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_disposible_bra',
                    'value' => function($model){
                        return $model->hammam_disposible_bra == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_disposible_slippers',
                    'value' => function($model){
                        return $model->hammam_disposible_slippers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_products',
                    'value' => function($model){
                        return $model->hammam_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_candles',
                    'value' => function($model){
                        return $model->hammam_candles == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_aroma',
                    'value' => function($model){
                        return $model->hammam_aroma == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_plastic_sheets',
                    'value' => function($model){
                        return $model->hammam_plastic_sheets == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'body_treatment_products',
                    'value' => function($model){
                        return $model->body_treatment_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'body_robes_towels',
                    'value' => function($model){
                        return $model->body_robes_towels == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'body_disposible_panty',
                    'value' => function($model){
                        return $model->body_disposible_panty == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'body_disposible_bra',
                    'value' => function($model){
                        return $model->body_disposible_bra == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'body_disposible_slippers',
                    'value' => function($model){
                        return $model->body_disposible_slippers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'body_products_for_body_treatment',
                    'value' => function($model){
                        return $model->body_products_for_body_treatment == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'body_candles',
                    'value' => function($model){
                        return $model->body_candles == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'body_aroma',
                    'value' => function($model){
                        return $model->body_aroma == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'body_plastic_sheets',
                    'value' => function($model){
                        return $model->body_plastic_sheets == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'moroccan_tea_herbal_tea',
                    'value' => function($model){
                        return $model->moroccan_tea_herbal_tea == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'water_detox_water',
                    'value' => function($model){
                        return $model->water_detox_water == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'cake_snacks',
                    'value' => function($model){
                        return $model->cake_snacks == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'do_necessary_cleaning_and_station_reset',
                    'value' => function($model){
                        return $model->do_necessary_cleaning_and_station_reset == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'empty_trash_bins_and_replace_fresh_liners',
                    'value' => function($model){
                        return $model->empty_trash_bins_and_replace_fresh_liners == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'ensure_quiet_interaction_with_the_customer_during_the_performanc',
                    'value' => function($model){
                        return $model->ensure_quiet_interaction_with_the_customer_during_the_performanc == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'ensure_that_supplies_tools_and_or_products',
                    'value' => function($model){
                        return $model->ensure_that_supplies_tools_and_or_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'is_not_enough_supplies_and_products_request_for_stocks',
                    'value' => function($model){
                        return $model->is_not_enough_supplies_and_products_request_for_stocks == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'all_tools_and_materials_to_be_used_in__are_available',
                    'value' => function($model){
                        return $model->all_tools_and_materials_to_be_used_in__are_available == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'stock_as_needed',
                    'value' => function($model){
                        return $model->stock_as_needed == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'perform_service_according_to_standard',
                    'value' => function($model){
                        return $model->perform_service_according_to_standard == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'use_products_according_to_standard_recipes',
                    'value' => function($model){
                        return $model->use_products_according_to_standard_recipes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'remove_dirty_dishes_cups_and_glasses',
                    'value' => function($model){
                        return $model->remove_dirty_dishes_cups_and_glasses == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'sterilize_tools_and_materials',
                    'value' => function($model){
                        return $model->sterilize_tools_and_materials == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first',
                    'value' => function($model){
                        return $model->write_on_logbook_to_hand_over_concerns_to_the_next_day_first == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'send_to_laundry_area_dirty_linens_used_towles',
                    'value' => function($model){
                        return $model->send_to_laundry_area_dirty_linens_used_towles == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'conduct_day_end_inventory_of_selected_items',
                    'value' => function($model){
                        return $model->conduct_day_end_inventory_of_selected_items == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'turn_off_all_lights_and_ac',
                    'value' => function($model){
                        return $model->turn_off_all_lights_and_ac == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'keep_ventilation_open',
                    'value' => function($model){
                        return $model->keep_ventilation_open == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'be_sure_bowls_is_empty_and_clean',
                    'value' => function($model){
                        return $model->be_sure_bowls_is_empty_and_clean == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'empty_trash',
                    'value' => function($model){
                        return $model->empty_trash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],

        'notes:ntext',

        ['attribute' => 'lock', 'visible' => false],

                ['attribute' => 'turn_on_dim_lights2',
                            'value' => function($model){
                                return $model->turn_on_dim_lights2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                        ],
        ['attribute' => 'read_spa_logbook_handover2',
                    'value' => function($model){
                        return $model->read_spa_logbook_handover2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'facial_room2',
                    'value' => function($model){
                        return $model->facial_room2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'massage_room2',
                    'value' => function($model){
                        return $model->massage_room2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'hammam_bath2',
                    'value' => function($model){
                        return $model->hammam_bath2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'ayurveda_room2',
                    'value' => function($model){
                        return $model->ayurveda_room2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'relaxation_room2',
                    'value' => function($model){
                        return $model->relaxation_room2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'lit_candles_and_aroma_burners2',
                    'value' => function($model){
                        return $model->lit_candles_and_aroma_burners2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_ventilation_ac_is_working2',
                    'value' => function($model){
                        return $model->check_ventilation_ac_is_working2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_Aroma_system_is_working2',
                    'value' => function($model){
                        return $model->check_Aroma_system_is_working2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_hammam_steamer_is_working2',
                    'value' => function($model){
                        return $model->check_hammam_steamer_is_working2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_smell_drain2',
                    'value' => function($model){
                        return $model->check_smell_drain2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'receive_supplies_and_products2',
                    'value' => function($model){
                        return $model->receive_supplies_and_products2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'be_sure_that_all_equipment2',
                    'value' => function($model){
                        return $model->be_sure_that_all_equipment2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'turn_on_equipment_when_necessary2',
                    'value' => function($model){
                        return $model->turn_on_equipment_when_necessary2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_water_temperature2',
                    'value' => function($model){
                        return $model->check_water_temperature2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'make_sure_that_all_linens_to_fresh2',
                    'value' => function($model){
                        return $model->make_sure_that_all_linens_to_fresh2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'clean_and_wipe_facial_chairs_and_mirrors2',
                    'value' => function($model){
                        return $model->clean_and_wipe_facial_chairs_and_mirrors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'set_massage_beds2',
                    'value' => function($model){
                        return $model->set_massage_beds2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'make_sure_that_all_cart_and_trolleys_are_clean2',
                    'value' => function($model){
                        return $model->make_sure_that_all_cart_and_trolleys_are_clean2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'sweep_and_mop_floors2',
                    'value' => function($model){
                        return $model->sweep_and_mop_floors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'prepare_hot_towels_and_robes2',
                    'value' => function($model){
                        return $model->prepare_hot_towels_and_robes2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'check_temperature_humidity2',
                    'value' => function($model){
                        return $model->check_temperature_humidity2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
        ['attribute' => 'make_sure_there_are_no_busted_light_bulbs2',
                    'value' => function($model){
                        return $model->make_sure_there_are_no_busted_light_bulbs2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>


</div>
