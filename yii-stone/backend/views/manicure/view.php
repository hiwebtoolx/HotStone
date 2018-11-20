<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Manicure */

$this->title = $model->shift_date .' - '. $model->shift_am.' to '.$model->shift_pm;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Manicures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manicure-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Manicure').' '. Html::encode($this->title) ?></h2>
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
            ['attribute' => 'turn_on_lights',
                'value' => function($model){
                    return $model->turn_on_lights == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'read_salon_logbook_hand_over_and_plan_the_day',
                'value' => function($model){
                    return $model->read_salon_logbook_hand_over_and_plan_the_day == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],

            ['attribute' => 'clean_sanitize_and_organize_salon_station',
                'value' => function($model){
                    return $model->clean_sanitize_and_organize_salon_station == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'receive_supplies_and_products_for_the_station',
                'value' => function($model){
                    return $model->receive_supplies_and_products_for_the_station == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'turn_on_equipment_when_necessary',
                'value' => function($model){
                    return $model->turn_on_equipment_when_necessary == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'sterilize_nipper_cuticle_nail_pusher_in_autoclave',
                'value' => function($model){
                    return $model->sterilize_nipper_cuticle_nail_pusher_in_autoclave == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh',
                'value' => function($model){
                    return $model->make_sure_that_all_linens_to_be_used_at_that_station_are_fresh == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'organize_newspapers_magazines_promotional_materials',
                'value' => function($model){
                    return $model->organize_newspapers_magazines_promotional_materials == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_and_wipe_pedicure_chairs_manicure_stations',
                'value' => function($model){
                    return $model->clean_and_wipe_pedicure_chairs_manicure_stations == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_and_organize_nail_polish_racks',
                'value' => function($model){
                    return $model->clean_and_organize_nail_polish_racks == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'sweep_mop_floors',
                'value' => function($model){
                    return $model->sweep_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_there_are_no_busted_light_bulbs',
                'value' => function($model){
                    return $model->make_sure_there_are_no_busted_light_bulbs == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'keep_consultation_forms_inside_drawers',
                'value' => function($model){
                    return $model->keep_consultation_forms_inside_drawers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'prepare_consultations_forms_with_name_of_client_on_hard_doard',
                'value' => function($model){
                    return $model->prepare_consultations_forms_with_name_of_client_on_hard_doard == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'file_consultation_forms_after_finish',
                'value' => function($model){
                    return $model->file_consultation_forms_after_finish == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'be_sure_services_try_and_bowls_are_clean_and_organized',
                'value' => function($model){
                    return $model->be_sure_services_try_and_bowls_are_clean_and_organized == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_baskets_of_technicien_are_clean_and_organized',
                'value' => function($model){
                    return $model->check_baskets_of_technicien_are_clean_and_organized == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_and_organize_drawers_as_training',
                'value' => function($model){
                    return $model->clean_and_organize_drawers_as_training == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'services_try_should_be_clean_and_organized_and_no_damaged',
                'value' => function($model){
                    return $model->services_try_should_be_clean_and_organized_and_no_damaged == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge',
                'value' => function($model){
                    return $model->check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'wipe_pedicure_chair_with_conditionner',
                'value' => function($model){
                    return $model->wipe_pedicure_chair_with_conditionner == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'disposible_towel',
                'value' => function($model){
                    return $model->disposible_towel == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'tissue_box',
                'value' => function($model){
                    return $model->tissue_box == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'nail_brush',
                'value' => function($model){
                    return $model->nail_brush == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'cotton',
                'value' => function($model){
                    return $model->cotton == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'acetone',
                'value' => function($model){
                    return $model->acetone == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'cuticul_remover',
                'value' => function($model){
                    return $model->cuticul_remover == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'nail_nipper',
                'value' => function($model){
                    return $model->nail_nipper == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'nail_cuter',
                'value' => function($model){
                    return $model->nail_cuter == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'nail_fail',
                'value' => function($model){
                    return $model->nail_fail == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pusher',
                'value' => function($model){
                    return $model->pusher == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hand_scrub',
                'value' => function($model){
                    return $model->hand_scrub == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hand_mask',
                'value' => function($model){
                    return $model->hand_mask == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hand_feet_lotion',
                'value' => function($model){
                    return $model->hand_feet_lotion == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'plastic_nilon',
                'value' => function($model){
                    return $model->plastic_nilon == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'lemon',
                'value' => function($model){
                    return $model->lemon == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'herbal_salt',
                'value' => function($model){
                    return $model->herbal_salt == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hand_soak',
                'value' => function($model){
                    return $model->hand_soak == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'parafine',
                'value' => function($model){
                    return $model->parafine == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'nail_polish',
                'value' => function($model){
                    return $model->nail_polish == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'nail_vitamin',
                'value' => function($model){
                    return $model->nail_vitamin == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'towels_for_hand_and_for_feet',
                'value' => function($model){
                    return $model->towels_for_hand_and_for_feet == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'disposible_slippers',
                'value' => function($model){
                    return $model->disposible_slippers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'nail_divider',
                'value' => function($model){
                    return $model->nail_divider == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hand_bowl',
                'value' => function($model){
                    return $model->hand_bowl == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
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
            ['attribute' => 'perform_service_according_to_standard',
                'value' => function($model){
                    return $model->perform_service_according_to_standard == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'use_products_according_to_standard_recipes',
                'value' => function($model){
                    return $model->use_products_according_to_standard_recipes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash',
                'value' => function($model){
                    return $model->remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'sterilize_tools_and_materials',
                'value' => function($model){
                    return $model->sterilize_tools_and_materials == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'ensure_that_supplies_tools_and_products_are_organized',
                'value' => function($model){
                    return $model->ensure_that_supplies_tools_and_products_are_organized == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'if_there_is_not_enough_supplies_and_products',
                'value' => function($model){
                    return $model->if_there_is_not_enough_supplies_and_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa',
                'value' => function($model){
                    return $model->make_sure_that_all_tools_and_materials_to_be_used_in__are_availa == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'stock_as_needed',
                'value' => function($model){
                    return $model->stock_as_needed == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi',
                'value' => function($model){
                    return $model->write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'send_to_laundry_area_dirty_linens',
                'value' => function($model){
                    return $model->send_to_laundry_area_dirty_linens == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'conduct_day_end_inventory_of_selected_items',
                'value' => function($model){
                    return $model->conduct_day_end_inventory_of_selected_items == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'turn_off_all_lights',
                'value' => function($model){
                    return $model->turn_off_all_lights == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],

            'notes:ntext',

            ['attribute' => 'lock', 'visible' => false],
        ];
        echo DetailView::widget([
            'model' => $model,
            'attributes' => $gridColumn
        ]);
        ?>
    </div>


</div>
