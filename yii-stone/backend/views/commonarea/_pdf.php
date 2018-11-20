<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\CommonArea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Common Area'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="common-area-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Common Area').' '. Html::encode($this->title) ?></h2>
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
            ['attribute' => 'lock', 'visible' => false],
            ['attribute' => 'hair_sweep_and_mop_floors',
                'value' => function($model){
                    return $model->hair_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha',
                'value' => function($model){
                    return $model->clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_remove_stains_and_dust_on_surfaces',
                'value' => function($model){
                    return $model->hair_remove_stains_and_dust_on_surfaces == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_clean_mirrors',
                'value' => function($model){
                    return $model->hair_clean_mirrors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_clean_cart_and_trolleys',
                'value' => function($model){
                    return $model->hair_clean_cart_and_trolleys == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_clean_drawers_and_cabinets',
                'value' => function($model){
                    return $model->hair_clean_drawers_and_cabinets == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_empty_trash',
                'value' => function($model){
                    return $model->hair_empty_trash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_detect_and_change_busted_light',
                'value' => function($model){
                    return $model->hair_detect_and_change_busted_light == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_sweep_and_mop_floors',
                'value' => function($model){
                    return $model->shampoo_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_under_chairs_from_hair_and_put_leader',
                'value' => function($model){
                    return $model->shampoo_clean_under_chairs_from_hair_and_put_leader == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_sinks_from_hair_and_product_residue',
                'value' => function($model){
                    return $model->shampoo_clean_sinks_from_hair_and_product_residue == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_shampoo_bowls',
                'value' => function($model){
                    return $model->shampoo_clean_shampoo_bowls == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_empty_trash',
                'value' => function($model){
                    return $model->shampoo_empty_trash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_remove_stains_and_dust_on_surfaces',
                'value' => function($model){
                    return $model->shampoo_remove_stains_and_dust_on_surfaces == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_mirrors',
                'value' => function($model){
                    return $model->shampoo_clean_mirrors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_the_product_containers',
                'value' => function($model){
                    return $model->shampoo_clean_the_product_containers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_empty_towel_basket',
                'value' => function($model){
                    return $model->shampoo_empty_towel_basket == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_detect_and_change_busted_light',
                'value' => function($model){
                    return $model->shampoo_detect_and_change_busted_light == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_sweep_and_mop_floors',
                'value' => function($model){
                    return $model->treatment_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_under_chairs_from_hair_and_put_leader',
                'value' => function($model){
                    return $model->treatment_clean_under_chairs_from_hair_and_put_leader == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_sinks_from_hair_and_product_residue',
                'value' => function($model){
                    return $model->treatment_clean_sinks_from_hair_and_product_residue == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_empty_trash',
                'value' => function($model){
                    return $model->treatment_empty_trash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_remove_stains_and_dust_on_surfaces',
                'value' => function($model){
                    return $model->treatment_remove_stains_and_dust_on_surfaces == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_draw_up_the_decoration',
                'value' => function($model){
                    return $model->treatment_draw_up_the_decoration == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_mixed_bowls',
                'value' => function($model){
                    return $model->treatment_clean_mixed_bowls == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_mirrors',
                'value' => function($model){
                    return $model->treatment_clean_mirrors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_the_product_containers',
                'value' => function($model){
                    return $model->treatment_clean_the_product_containers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_empty_used_towel_bascket',
                'value' => function($model){
                    return $model->treatment_empty_used_towel_bascket == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_the_product_containers2',
                'value' => function($model){
                    return $model->treatment_clean_the_product_containers2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_detect_and_change_busted_light',
                'value' => function($model){
                    return $model->treatment_detect_and_change_busted_light == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_the_curtains_should_be_clean',
                'value' => function($model){
                    return $model->pedicure_the_curtains_should_be_clean == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_sweep_and_mop_floors',
                'value' => function($model){
                    return $model->pedicure_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_clean_under_chairs__and_put_leader',
                'value' => function($model){
                    return $model->pedicure_clean_under_chairs__and_put_leader == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_clean_and_sanitize_sink',
                'value' => function($model){
                    return $model->pedicure_clean_and_sanitize_sink == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_empty_trash',
                'value' => function($model){
                    return $model->pedicure_empty_trash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_remove_stains_and_dust_on_surfaces',
                'value' => function($model){
                    return $model->pedicure_remove_stains_and_dust_on_surfaces == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_remove_basket_cleaning_items_and_dirty_towels',
                'value' => function($model){
                    return $model->pedicure_remove_basket_cleaning_items_and_dirty_towels == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_remove_empty_glasses',
                'value' => function($model){
                    return $model->pedicure_remove_empty_glasses == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_draw_up_products',
                'value' => function($model){
                    return $model->manicure_bar_draw_up_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_empty_trash',
                'value' => function($model){
                    return $model->manicure_bar_empty_trash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_clean_all_surfaces_with_a_disinfectant',
                'value' => function($model){
                    return $model->manicure_bar_clean_all_surfaces_with_a_disinfectant == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_clean_and_organize_nail_polish_racks',
                'value' => function($model){
                    return $model->manicure_bar_clean_and_organize_nail_polish_racks == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_empty_used_towel_bascket',
                'value' => function($model){
                    return $model->manicure_bar_empty_used_towel_bascket == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_sweep_and_mop_floors2',
                'value' => function($model){
                    return $model->hair_sweep_and_mop_floors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_under_chairs_from_hair_and_put_leader_conditionner_for2',
                'value' => function($model){
                    return $model->clean_under_chairs_from_hair_and_put_leader_conditionner_for2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_remove_stains_and_dust_on_surfaces2',
                'value' => function($model){
                    return $model->hair_remove_stains_and_dust_on_surfaces2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_clean_mirrors2',
                'value' => function($model){
                    return $model->hair_clean_mirrors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_clean_cart_and_trolleys2',
                'value' => function($model){
                    return $model->hair_clean_cart_and_trolleys2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_clean_drawers_and_cabinets2',
                'value' => function($model){
                    return $model->hair_clean_drawers_and_cabinets2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_empty_trash2',
                'value' => function($model){
                    return $model->hair_empty_trash2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'hair_detect_and_change_busted_light2',
                'value' => function($model){
                    return $model->hair_detect_and_change_busted_light2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_sweep_and_mop_floors2',
                'value' => function($model){
                    return $model->shampoo_sweep_and_mop_floors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_under_chairs_from_hair_and_put_leader2',
                'value' => function($model){
                    return $model->shampoo_clean_under_chairs_from_hair_and_put_leader2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_sinks_from_hair_and_product_residue2',
                'value' => function($model){
                    return $model->shampoo_clean_sinks_from_hair_and_product_residue2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_shampoo_bowls2',
                'value' => function($model){
                    return $model->shampoo_clean_shampoo_bowls2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_empty_trash2',
                'value' => function($model){
                    return $model->shampoo_empty_trash2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_remove_stains_and_dust_on_surfaces2',
                'value' => function($model){
                    return $model->shampoo_remove_stains_and_dust_on_surfaces2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_mirrors2',
                'value' => function($model){
                    return $model->shampoo_clean_mirrors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_clean_the_product_containers2',
                'value' => function($model){
                    return $model->shampoo_clean_the_product_containers2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_empty_towel_basket2',
                'value' => function($model){
                    return $model->shampoo_empty_towel_basket2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampoo_detect_and_change_busted_light2',
                'value' => function($model){
                    return $model->shampoo_detect_and_change_busted_light2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_sweep_and_mop_floors2',
                'value' => function($model){
                    return $model->treatment_sweep_and_mop_floors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_under_chairs_from_hair_and_put_leader2',
                'value' => function($model){
                    return $model->treatment_clean_under_chairs_from_hair_and_put_leader2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_sinks_from_hair_and_product_residue2',
                'value' => function($model){
                    return $model->treatment_clean_sinks_from_hair_and_product_residue2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_empty_trash2',
                'value' => function($model){
                    return $model->treatment_empty_trash2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_remove_stains_and_dust_on_surfaces2',
                'value' => function($model){
                    return $model->treatment_remove_stains_and_dust_on_surfaces2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_draw_up_the_decoration2',
                'value' => function($model){
                    return $model->treatment_draw_up_the_decoration2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_mixed_bowls2',
                'value' => function($model){
                    return $model->treatment_clean_mixed_bowls2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_mirrors2',
                'value' => function($model){
                    return $model->treatment_clean_mirrors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_the_product_container2',
                'value' => function($model){
                    return $model->treatment_clean_the_product_container2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_empty_used_towel_bascket2',
                'value' => function($model){
                    return $model->treatment_empty_used_towel_bascket2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_clean_the_product_containers22',
                'value' => function($model){
                    return $model->treatment_clean_the_product_containers22 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'treatment_detect_and_change_busted_light2',
                'value' => function($model){
                    return $model->treatment_detect_and_change_busted_light2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_the_curtains_should_be_clean2',
                'value' => function($model){
                    return $model->pedicure_the_curtains_should_be_clean2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_sweep_and_mop_floors2',
                'value' => function($model){
                    return $model->pedicure_sweep_and_mop_floors2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_clean_under_chairs__and_put_leader2',
                'value' => function($model){
                    return $model->pedicure_clean_under_chairs__and_put_leader2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_clean_and_sanitize_sink2',
                'value' => function($model){
                    return $model->pedicure_clean_and_sanitize_sink2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_empty_trash2',
                'value' => function($model){
                    return $model->pedicure_empty_trash2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_remove_stains_and_dust_on_surfaces2',
                'value' => function($model){
                    return $model->pedicure_remove_stains_and_dust_on_surfaces2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_remove_basket_cleaning_items_and_dirty_towels2',
                'value' => function($model){
                    return $model->pedicure_remove_basket_cleaning_items_and_dirty_towels2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pedicure_remove_empty_glasses2',
                'value' => function($model){
                    return $model->pedicure_remove_empty_glasses2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_draw_up_products2',
                'value' => function($model){
                    return $model->manicure_bar_draw_up_products2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_empty_trash2',
                'value' => function($model){
                    return $model->manicure_bar_empty_trash2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_clean_all_surfaces_with_a_disinfectant2',
                'value' => function($model){
                    return $model->manicure_bar_clean_all_surfaces_with_a_disinfectant2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_clean_and_organize_nail_polish_racks2',
                'value' => function($model){
                    return $model->manicure_bar_clean_and_organize_nail_polish_racks2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'manicure_bar_empty_used_towel_bascket2',
                'value' => function($model){
                    return $model->manicure_bar_empty_used_towel_bascket2 == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
        ];
        echo DetailView::widget([
            'model' => $model,
            'attributes' => $gridColumn
        ]);
        ?>
    </div>


    <div class="row">
        <?php
        if($providerCommonAreaBackzone->totalCount){
            $gridColumnCommonAreaBackzone = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'backzone_check_the_place_is_clean_no_object_no_trash',
                    'value' => function($model){
                        return $model->backzone_check_the_place_is_clean_no_object_no_trash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'backzone_sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->backzone_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'backzone_clean_and_sanitize_a_big_trush_countainer',
                    'value' => function($model){
                        return $model->backzone_clean_and_sanitize_a_big_trush_countainer == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'backzone_clean_and_sanitize_sink',
                    'value' => function($model){
                        return $model->backzone_clean_and_sanitize_sink == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],

                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaBackzone,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-backzone']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Backzone')),
                ],
                'columns' => $gridColumnCommonAreaBackzone
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaBreak->totalCount){
            $gridColumnCommonAreaBreak = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'break_sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->break_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'break_clean_furniture_dust',
                    'value' => function($model){
                        return $model->break_clean_furniture_dust == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'break_clean_the_fridge_and_microwave',
                    'value' => function($model){
                        return $model->break_clean_the_fridge_and_microwave == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaBreak,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-break']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Break')),
                ],
                'columns' => $gridColumnCommonAreaBreak
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaChanging->totalCount){
            $gridColumnCommonAreaChanging = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                [
                    'attribute' => 'shift.id',
                    'label' => Yii::t('stone', 'Shift')
                    , 'visible' => false
                ],
                ['attribute' => 'changing_sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->changing_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'changing_clean_carpets',
                    'value' => function($model){
                        return $model->changing_clean_carpets == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'changing_collect_dirty_towels_and_give_it_to_the_laundry_service',
                    'value' => function($model){
                        return $model->changing_collect_dirty_towels_and_give_it_to_the_laundry_service == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'changing_collect_used_footwear_and_put_it_in_red_container',
                    'value' => function($model){
                        return $model->changing_collect_used_footwear_and_put_it_in_red_container == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'provide_towels_disposables_panty_bra_and_slippers_in_cabinetscha',
                    'value' => function($model){
                        return $model->provide_towels_disposables_panty_bra_and_slippers_in_cabinetscha == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaChanging,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-changing']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Changing')),
                ],
                'columns' => $gridColumnCommonAreaChanging
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaElevator->totalCount){
            $gridColumnCommonAreaElevator = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'elevator_clean_the_elevator',
                    'value' => function($model){
                        return $model->elevator_clean_the_elevator == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'elevator_clean_the_door_exterior_the_door_interior',
                    'value' => function($model){
                        return $model->elevator_clean_the_door_exterior_the_door_interior == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'elevator_clean_buttons_carefully',
                    'value' => function($model){
                        return $model->elevator_clean_buttons_carefully == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaElevator,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-elevator']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Elevator')),
                ],
                'columns' => $gridColumnCommonAreaElevator
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaHallways->totalCount){
            $gridColumnCommonAreaHallways = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_carpets',
                    'value' => function($model){
                        return $model->clean_carpets == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'remove_stains_and_dust_on_surfaces',
                    'value' => function($model){
                        return $model->remove_stains_and_dust_on_surfaces == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_pictures',
                    'value' => function($model){
                        return $model->clean_pictures == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_mirrors',
                    'value' => function($model){
                        return $model->clean_mirrors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'remove_dead_flowers',
                    'value' => function($model){
                        return $model->remove_dead_flowers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'water_plants',
                    'value' => function($model){
                        return $model->water_plants == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_light_switches_and_area_around_switch_on_the_wall',
                    'value' => function($model){
                        return $model->clean_light_switches_and_area_around_switch_on_the_wall == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'dust_lamps',
                    'value' => function($model){
                        return $model->dust_lamps == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'detect_and_change_busted_light',
                    'value' => function($model){
                        return $model->detect_and_change_busted_light == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'light_the_candles',
                    'value' => function($model){
                        return $model->light_the_candles == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'refill_aroma_in_the_burners',
                    'value' => function($model){
                        return $model->refill_aroma_in_the_burners == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaHallways,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-hallways']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Hallways')),
                ],
                'columns' => $gridColumnCommonAreaHallways
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaLaundry->totalCount){
            $gridColumnCommonAreaLaundry = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'laundry_be_sure_organize_and_clean_',
                    'value' => function($model){
                        return $model->laundry_be_sure_organize_and_clean_ == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'laundry_sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->laundry_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'laundry_check_washing_and_dryer_machine_functioning_well',
                    'value' => function($model){
                        return $model->laundry_check_washing_and_dryer_machine_functioning_well == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaLaundry,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-laundry']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Laundry')),
                ],
                'columns' => $gridColumnCommonAreaLaundry
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaPrayer->totalCount){
            $gridColumnCommonAreaPrayer = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'prayer_clean_carpets',
                    'value' => function($model){
                        return $model->prayer_clean_carpets == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'prayer_check_the_good_smell',
                    'value' => function($model){
                        return $model->prayer_check_the_good_smell == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'check_the_prayer_clothes_smell_good_and_clean_and_make_schedule_',
                    'value' => function($model){
                        return $model->check_the_prayer_clothes_smell_good_and_clean_and_make_schedule_ == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],

                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaPrayer,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-prayer']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Prayer')),
                ],
                'columns' => $gridColumnCommonAreaPrayer
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaRelaxation->totalCount){
            $gridColumnCommonAreaRelaxation = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'relaxation_sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->relaxation_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'relaxation_clean_furniture_dust',
                    'value' => function($model){
                        return $model->relaxation_clean_furniture_dust == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'relaxation_remove_stains_and_dust_on_surfaces',
                    'value' => function($model){
                        return $model->relaxation_remove_stains_and_dust_on_surfaces == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'relaxation_empty_trash',
                    'value' => function($model){
                        return $model->relaxation_empty_trash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'relaxation_light_the_candles',
                    'value' => function($model){
                        return $model->relaxation_light_the_candles == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'relaxation_refill_aroma_in_the_burners',
                    'value' => function($model){
                        return $model->relaxation_refill_aroma_in_the_burners == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'relaxation_draw_up_the_decoration',
                    'value' => function($model){
                        return $model->relaxation_draw_up_the_decoration == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'relaxation_check_temperature_25_degrees_celsius',
                    'value' => function($model){
                        return $model->relaxation_check_temperature_25_degrees_celsius == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'relaxation_clean_mirrors',
                    'value' => function($model){
                        return $model->relaxation_clean_mirrors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaRelaxation,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-relaxation']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Relaxation')),
                ],
                'columns' => $gridColumnCommonAreaRelaxation
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaToilets->totalCount){
            $gridColumnCommonAreaToilets = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'toilet_clean_and_sanitize_sink',
                    'value' => function($model){
                        return $model->toilet_clean_and_sanitize_sink == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'toilet_clean_a_tiled_surfaces_with_a_disinfectant',
                    'value' => function($model){
                        return $model->toilet_clean_a_tiled_surfaces_with_a_disinfectant == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'toilet_clean_toilets_inside_and_out',
                    'value' => function($model){
                        return $model->toilet_clean_toilets_inside_and_out == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'toilet_check_the_good_smell',
                    'value' => function($model){
                        return $model->toilet_check_the_good_smell == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'toreplenish_consumable_items__soap_toilet_rolls_paper_towels_etc',
                    'value' => function($model){
                        return $model->toreplenish_consumable_items__soap_toilet_rolls_paper_towels_etc == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'toilet_clean_the_dispensers_and_other_wall_fixtures',
                    'value' => function($model){
                        return $model->toilet_clean_the_dispensers_and_other_wall_fixtures == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_the_exterior_of_trash_containers_especially_surfaces_touch',
                    'value' => function($model){
                        return $model->clean_the_exterior_of_trash_containers_especially_surfaces_touch == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'toilet_seats_to_be_cleaned_on_both_sides_using_a_disinfectant',
                    'value' => function($model){
                        return $model->toilet_seats_to_be_cleaned_on_both_sides_using_a_disinfectant == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'toilet_sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->toilet_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'toilet_check_toilet_flushing_is_fuctioning',
                    'value' => function($model){
                        return $model->toilet_check_toilet_flushing_is_fuctioning == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaToilets,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-toilets']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Toilets')),
                ],
                'columns' => $gridColumnCommonAreaToilets
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaWaiting->totalCount){
            $gridColumnCommonAreaWaiting = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'waiting_sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->waiting_sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'waiting_clean_tables_and_edges_of_tables',
                    'value' => function($model){
                        return $model->waiting_clean_tables_and_edges_of_tables == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'waiting_organize_magazines_and_promotional_materials',
                    'value' => function($model){
                        return $model->waiting_organize_magazines_and_promotional_materials == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'waiting_clean_the_chairs_used_by_visitors_make_sure_to_clean',
                    'value' => function($model){
                        return $model->waiting_clean_the_chairs_used_by_visitors_make_sure_to_clean == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'waiting_light_the_candles',
                    'value' => function($model){
                        return $model->waiting_light_the_candles == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'waiting_refill_aroma_in_the_burners',
                    'value' => function($model){
                        return $model->waiting_refill_aroma_in_the_burners == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'waiting_remove_empty_glasses',
                    'value' => function($model){
                        return $model->waiting_remove_empty_glasses == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaWaiting,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-waiting']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Waiting')),
                ],
                'columns' => $gridColumnCommonAreaWaiting
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerCommonAreaWelcome->totalCount){
            $gridColumnCommonAreaWelcome = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'bars_remove_stains_and_dust_on_surfaces',
                    'value' => function($model){
                        return $model->bars_remove_stains_and_dust_on_surfaces == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'bars_draw_up_the_decoration',
                    'value' => function($model){
                        return $model->bars_draw_up_the_decoration == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'bars_prepare_food_canapes',
                    'value' => function($model){
                        return $model->bars_prepare_food_canapes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'bars_prepare_tea_bags_sugar_cups_and_saucers',
                    'value' => function($model){
                        return $model->bars_prepare_tea_bags_sugar_cups_and_saucers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'bars_prepare_tea_bags_sugar_cups_and_saucers',
                    'value' => function($model){
                        return $model->bars_prepare_tea_bags_sugar_cups_and_saucers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerCommonAreaWelcome,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-common-area-welcome']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Common Area Welcome')),
                ],
                'columns' => $gridColumnCommonAreaWelcome
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerEntranceArea->totalCount){
            $gridColumnEntranceArea = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'remove_stains_on_floors',
                    'value' => function($model){
                        return $model->remove_stains_on_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_the_fountains',
                    'value' => function($model){
                        return $model->clean_the_fountains == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'wipe_baseboards_of_the_door',
                    'value' => function($model){
                        return $model->wipe_baseboards_of_the_door == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_the_wall_fixtures',
                    'value' => function($model){
                        return $model->clean_the_wall_fixtures == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_the_sign',
                    'value' => function($model){
                        return $model->clean_the_sign == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'check_sign_light',
                    'value' => function($model){
                        return $model->check_sign_light == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'lock', 'visible' => false],
                'shift_am',
                'shift_pm',
            ];
            echo Gridview::widget([
                'dataProvider' => $providerEntranceArea,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-entrance-area']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Entrance Area')),
                ],
                'columns' => $gridColumnEntranceArea
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerProductBarArea->totalCount){
            $gridColumnProductBarArea = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'remove_stains_and_dust_on_surfaces',
                    'value' => function($model){
                        return $model->remove_stains_and_dust_on_surfaces == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_and_sanitize_sink',
                    'value' => function($model){
                        return $model->clean_and_sanitize_sink == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'draw_up_the_decoration',
                    'value' => function($model){
                        return $model->draw_up_the_decoration == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_the_product_containers',
                    'value' => function($model){
                        return $model->clean_the_product_containers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],

                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerProductBarArea,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-product-bar-area']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Product Bar Area')),
                ],
                'columns' => $gridColumnProductBarArea
            ]);
        }
        ?>

    </div>

    <div class="row">
        <?php
        if($providerReceptionArea->totalCount){
            $gridColumnReceptionArea = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                ['attribute' => 'sweep_and_mop_floors',
                    'value' => function($model){
                        return $model->sweep_and_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_the_chairs_used_by_staff',
                    'value' => function($model){
                        return $model->clean_the_chairs_used_by_staff == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_behind_desk',
                    'value' => function($model){
                        return $model->clean_behind_desk == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'clean_the_computer_keyboard_mouse_and_telephone',
                    'value' => function($model){
                        return $model->clean_the_computer_keyboard_mouse_and_telephone == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'dust_chair',
                    'value' => function($model){
                        return $model->dust_chair == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],
                ['attribute' => 'remove_stains_and_dust_on_surfaces',
                    'value' => function($model){
                        return $model->remove_stains_and_dust_on_surfaces == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
                ],

                'notes:ntext',
                'shift_am',
                'shift_pm',
                ['attribute' => 'lock', 'visible' => false],
            ];
            echo Gridview::widget([
                'dataProvider' => $providerReceptionArea,
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-reception-area']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode(Yii::t('stone', 'Reception Area')),
                ],
                'columns' => $gridColumnReceptionArea
            ]);
        }
        ?>

    </div>
</div>
