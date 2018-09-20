<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\CommonArea */

?>
<div class="common-area-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->id) ?></h2>
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
        'hair_sweep_and_mop_floors',
        'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha',
        'hair_remove_stains_and_dust_on_surfaces',
        'hair_clean_mirrors',
        'hair_clean_cart_and_trolleys',
        'hair_clean_drawers_and_cabinets',
        'hair_empty_trash',
        'hair_detect_and_change_busted_light',
        'shampoo_sweep_and_mop_floors',
        'shampoo_clean_under_chairs_from_hair_and_put_leader',
        'shampoo_clean_sinks_from_hair_and_product_residue',
        'shampoo_clean_shampoo_bowls',
        'shampoo_empty_trash',
        'shampoo_remove_stains_and_dust_on_surfaces',
        'shampoo_clean_mirrors',
        'shampoo_clean_the_product_containers',
        'shampoo_empty_towel_basket',
        'shampoo_detect_and_change_busted_light',
        'treatment_sweep_and_mop_floors',
        'treatment_clean_under_chairs_from_hair_and_put_leader',
        'treatment_clean_sinks_from_hair_and_product_residue',
        'treatment_empty_trash',
        'treatment_remove_stains_and_dust_on_surfaces',
        'treatment_draw_up_the_decoration',
        'treatment_clean_mixed_bowls',
        'treatment_clean_mirrors',
        'treatment_clean_the_product_containers',
        'treatment_empty_used_towel_bascket',
        'treatment_clean_the_product_containers2',
        'treatment_detect_and_change_busted_light',
        'pedicure_the_curtains_should_be_clean',
        'pedicure_sweep_and_mop_floors',
        'pedicure_clean_under_chairs__and_put_leader',
        'pedicure_clean_and_sanitize_sink',
        'pedicure_empty_trash',
        'pedicure_remove_stains_and_dust_on_surfaces',
        'pedicure_remove_basket_cleaning_items_and_dirty_towels',
        'pedicure_remove_empty_glasses',
        'manicure_bar_draw_up_products',
        'manicure_bar_empty_trash',
        'manicure_bar_clean_all_surfaces_with_a_disinfectant',
        'manicure_bar_clean_and_organize_nail_polish_racks',
        'manicure_bar_empty_used_towel_bascket',
        'hair_sweep_and_mop_floors2',
        'clean_under_chairs_from_hair_and_put_leader_conditionner_for2',
        'hair_remove_stains_and_dust_on_surfaces2',
        'hair_clean_mirrors2',
        'hair_clean_cart_and_trolleys2',
        'hair_clean_drawers_and_cabinets2',
        'hair_empty_trash2',
        'hair_detect_and_change_busted_light2',
        'shampoo_sweep_and_mop_floors2',
        'shampoo_clean_under_chairs_from_hair_and_put_leader2',
        'shampoo_clean_sinks_from_hair_and_product_residue2',
        'shampoo_clean_shampoo_bowls2',
        'shampoo_empty_trash2',
        'shampoo_remove_stains_and_dust_on_surfaces2',
        'shampoo_clean_mirrors2',
        'shampoo_clean_the_product_containers2',
        'shampoo_empty_towel_basket2',
        'shampoo_detect_and_change_busted_light2',
        'treatment_sweep_and_mop_floors2',
        'treatment_clean_under_chairs_from_hair_and_put_leader2',
        'treatment_clean_sinks_from_hair_and_product_residue2',
        'treatment_empty_trash2',
        'treatment_remove_stains_and_dust_on_surfaces2',
        'treatment_draw_up_the_decoration2',
        'treatment_clean_mixed_bowls2',
        'treatment_clean_mirrors2',
        'treatment_clean_the_product_container2',
        'treatment_empty_used_towel_bascket2',
        'treatment_clean_the_product_containers22',
        'treatment_detect_and_change_busted_light2',
        'pedicure_the_curtains_should_be_clean2',
        'pedicure_sweep_and_mop_floors2',
        'pedicure_clean_under_chairs__and_put_leader2',
        'pedicure_clean_and_sanitize_sink2',
        'pedicure_empty_trash2',
        'pedicure_remove_stains_and_dust_on_surfaces2',
        'pedicure_remove_basket_cleaning_items_and_dirty_towels2',
        'pedicure_remove_empty_glasses2',
        'manicure_bar_draw_up_products2',
        'manicure_bar_empty_trash2',
        'manicure_bar_clean_all_surfaces_with_a_disinfectant2',
        'manicure_bar_clean_and_organize_nail_polish_racks2',
        'manicure_bar_empty_used_towel_bascket2',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>