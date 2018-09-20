<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\HairMakeup */

$this->title = $model->shift_date .' - '. $model->shift_am.' to '.$model->shift_pm;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Hair Makeups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hair-makeup-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Hair Makeup').' '. Html::encode($this->title) ?></h2>
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
            ['attribute' => 'read_salon_logbook_hand_over',
                'value' => function($model){
                    return $model->read_salon_logbook_hand_over == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_sanitize',
                'value' => function($model){
                    return $model->clean_sanitize == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'receive_supplies_and_products',
                'value' => function($model){
                    return $model->receive_supplies_and_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_all_equipment',
                'value' => function($model){
                    return $model->check_all_equipment == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'turn_on_equipment',
                'value' => function($model){
                    return $model->turn_on_equipment == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_water_supply',
                'value' => function($model){
                    return $model->check_water_supply == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_drawers',
                'value' => function($model){
                    return $model->check_drawers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_that_all_linens',
                'value' => function($model){
                    return $model->make_sure_that_all_linens == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'organize_newspapers',
                'value' => function($model){
                    return $model->organize_newspapers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_and_wipe_salon',
                'value' => function($model){
                    return $model->clean_and_wipe_salon == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_and_wipe_shampoo_bowls',
                'value' => function($model){
                    return $model->clean_and_wipe_shampoo_bowls == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_and_sanitize_make_up_brush',
                'value' => function($model){
                    return $model->clean_and_sanitize_make_up_brush == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'cart_and_trolleys_are_clean',
                'value' => function($model){
                    return $model->cart_and_trolleys_are_clean == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'sweep_mop_floors',
                'value' => function($model){
                    return $model->sweep_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'combs_and_brushes_are_clean',
                'value' => function($model){
                    return $model->combs_and_brushes_are_clean == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_that_all_scissors_are_sharp',
                'value' => function($model){
                    return $model->make_sure_that_all_scissors_are_sharp == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_there_are_no_busted_light_bulbs',
                'value' => function($model){
                    return $model->make_sure_there_are_no_busted_light_bulbs == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hot_cabinet_is_full_with_towel',
                'value' => function($model){
                    return $model->hot_cabinet_is_full_with_towel == 0 ? Yii::t('stone' , 'No'):Yii::t('stone' , 'Yes');  }
            ],

            ['attribute' => 'turn_on_lights2',
                'value' => function($model){
                    return $model->turn_on_lights2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],

            ['attribute' => 'check_supplies_and_products',
                'value' => function($model){
                    return $model->check_supplies_and_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'mixing_bowls',
                'value' => function($model){
                    return $model->mixing_bowls == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'aprons',
                'value' => function($model){
                    return $model->aprons == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'water_sprayers',
                'value' => function($model){
                    return $model->water_sprayers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'applicator_brushes',
                'value' => function($model){
                    return $model->applicator_brushes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'paper_towels',
                'value' => function($model){
                    return $model->paper_towels == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'handheld_mirrors',
                'value' => function($model){
                    return $model->handheld_mirrors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'rubber_gloves',
                'value' => function($model){
                    return $model->rubber_gloves == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'plastic_gloves',
                'value' => function($model){
                    return $model->plastic_gloves == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoos',
                'value' => function($model){
                    return $model->shampoos == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'conditioners',
                'value' => function($model){
                    return $model->conditioners == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_straightening_and_perming_kits',
                'value' => function($model){
                    return $model->hair_straightening_and_perming_kits == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'styling_gels',
                'value' => function($model){
                    return $model->styling_gels == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'serums',
                'value' => function($model){
                    return $model->serums == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'mousse',
                'value' => function($model){
                    return $model->mousse == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_colors',
                'value' => function($model){
                    return $model->hair_colors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_spray',
                'value' => function($model){
                    return $model->hair_spray == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_extensions',
                'value' => function($model){
                    return $model->hair_extensions == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_up_remover',
                'value' => function($model){
                    return $model->make_up_remover == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'cotton',
                'value' => function($model){
                    return $model->cotton == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'tissu',
                'value' => function($model){
                    return $model->tissu == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'ear_cotton',
                'value' => function($model){
                    return $model->ear_cotton == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'moisturizing_cream',
                'value' => function($model){
                    return $model->moisturizing_cream == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'face_scrub',
                'value' => function($model){
                    return $model->face_scrub == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'eclat_ampoule',
                'value' => function($model){
                    return $model->eclat_ampoule == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'the_eyelashes',
                'value' => function($model){
                    return $model->the_eyelashes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'glow_for_eyelashes',
                'value' => function($model){
                    return $model->glow_for_eyelashes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'tweezer',
                'value' => function($model){
                    return $model->tweezer == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'small_cisor',
                'value' => function($model){
                    return $model->small_cisor == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'makeup_fixator',
                'value' => function($model){
                    return $model->makeup_fixator == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'makeup_brush',
                'value' => function($model){
                    return $model->makeup_brush == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'foundation_Minimum_3_pigment',
                'value' => function($model){
                    return $model->foundation_Minimum_3_pigment == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'eye_shadow',
                'value' => function($model){
                    return $model->eye_shadow == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'blusher',
                'value' => function($model){
                    return $model->blusher == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'mascara',
                'value' => function($model){
                    return $model->mascara == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'eyeliner',
                'value' => function($model){
                    return $model->eyeliner == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'eyebrow_color',
                'value' => function($model){
                    return $model->eyebrow_color == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'customer_robe',
                'value' => function($model){
                    return $model->customer_robe == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hand_sanitazer',
                'value' => function($model){
                    return $model->hand_sanitazer == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hand_wash',
                'value' => function($model){
                    return $model->hand_wash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'high_lighter',
                'value' => function($model){
                    return $model->high_lighter == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'contouring',
                'value' => function($model){
                    return $model->contouring == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'concealer',
                'value' => function($model){
                    return $model->concealer == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'do_necessary_cleaning_and_station_reset',
                'value' => function($model){
                    return $model->do_necessary_cleaning_and_station_reset == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'empty_trash_bins_and_replace_fresh_liners',
                'value' => function($model){
                    return $model->empty_trash_bins_and_replace_fresh_liners == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'ensure_quiet_interaction_with_the_customer',
                'value' => function($model){
                    return $model->ensure_quiet_interaction_with_the_customer == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'perform_service_according_to_standard',
                'value' => function($model){
                    return $model->perform_service_according_to_standard == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'use_products_according_to_standard_recipes',
                'value' => function($model){
                    return $model->use_products_according_to_standard_recipes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'remove_dirty_dishes_cups',
                'value' => function($model){
                    return $model->remove_dirty_dishes_cups == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'sterilize_tools_and_materials',
                'value' => function($model){
                    return $model->sterilize_tools_and_materials == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'products_are_organized_in_their_respective_compartments',
                'value' => function($model){
                    return $model->products_are_organized_in_their_respective_compartments == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'If_there_is_not_enough_supplies_and_products',
                'value' => function($model){
                    return $model->If_there_is_not_enough_supplies_and_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa',
                'value' => function($model){
                    return $model->make_sure_that_all_tools_and_materials_to_be_used_in__are_availa == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'stock_as_needed',
                'value' => function($model){
                    return $model->stock_as_needed == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'write_on_logbook_to_hand_over_concerns',
                'value' => function($model){
                    return $model->write_on_logbook_to_hand_over_concerns == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
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




            ['attribute' => 'lock', 'visible' => false],

            ['attribute' => 'read_salon_logbook_hand_over2',
                'value' => function($model){
                    return $model->read_salon_logbook_hand_over2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_sanitize2',
                'value' => function($model){
                    return $model->clean_sanitize2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'receive_supplies_and_products2',
                'value' => function($model){
                    return $model->receive_supplies_and_products2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_all_equipment2',
                'value' => function($model){
                    return $model->check_all_equipment2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'turn_on_equipment2',
                'value' => function($model){
                    return $model->turn_on_equipment2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_water_supply2',
                'value' => function($model){
                    return $model->check_water_supply2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_drawers2',
                'value' => function($model){
                    return $model->check_drawers2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_that_all_linens2',
                'value' => function($model){
                    return $model->make_sure_that_all_linens2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'organize_newspapers2',
                'value' => function($model){
                    return $model->organize_newspapers2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_and_wipe_salon2',
                'value' => function($model){
                    return $model->clean_and_wipe_salon2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_and_wipe_shampoo_bowls2',
                'value' => function($model){
                    return $model->clean_and_wipe_shampoo_bowls2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_and_sanitize_make_up_brush2',
                'value' => function($model){
                    return $model->clean_and_sanitize_make_up_brush2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'cart_and_trolleys_are_clean2',
                'value' => function($model){
                    return $model->cart_and_trolleys_are_clean2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'sweep_mop_floors2',
                'value' => function($model){
                    return $model->sweep_mop_floors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'combs_and_brushes_are_clean2',
                'value' => function($model){
                    return $model->combs_and_brushes_are_clean2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_that_all_scissors_are_sharp2',
                'value' => function($model){
                    return $model->make_sure_that_all_scissors_are_sharp2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'make_sure_there_are_no_busted_light_bulbs2',
                'value' => function($model){
                    return $model->make_sure_there_are_no_busted_light_bulbs2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hot_cabinet_is_full_with_towel2',
                'value' => function($model){
                    return $model->hot_cabinet_is_full_with_towel2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],

            'notes:ntext',
        ];
        echo DetailView::widget([
            'model' => $model,
            'attributes' => $gridColumn
        ]);
        ?>
    </div>
</div>
