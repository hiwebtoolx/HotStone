<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Salonarea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Salonareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salonarea-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Salonarea').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
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
        'shift_am',
        'shift_pm',
        'shift_date',
        [
                'attribute' => 'checkedBy.username',
                'label' => Yii::t('stone', 'Checked By')
            ],
        ['attribute' => 'lock', 'visible' => false],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
