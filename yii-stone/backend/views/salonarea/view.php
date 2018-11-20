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
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Salonarea').' '. Html::encode($this->title) ?></h2>
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
            'label' => Yii::t('stone', 'Checked By'),
        ],
        ['attribute' => 'lock', 'visible' => false],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>User<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnUser = [
        ['attribute' => 'id', 'visible' => false],
        'username',
        'email',
        'status',
        'password_hash',
        'auth_key',
        'confirmed_at',
        'unconfirmed_email',
        'blocked_at',
        'registration_ip',
        'flags',
        'last_login_at',
    ];
    echo DetailView::widget([
        'model' => $model->createdBy,
        'attributes' => $gridColumnUser    ]);
    ?>
    <div class="row">
        <h4>User<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnUser = [
        ['attribute' => 'id', 'visible' => false],
        'username',
        'email',
        'status',
        'password_hash',
        'auth_key',
        'confirmed_at',
        'unconfirmed_email',
        'blocked_at',
        'registration_ip',
        'flags',
        'last_login_at',
    ];
    echo DetailView::widget([
        'model' => $model->checkedBy,
        'attributes' => $gridColumnUser    ]);
    ?>
    <div class="row">
        <h4>User<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnUser = [
        ['attribute' => 'id', 'visible' => false],
        'username',
        'email',
        'status',
        'password_hash',
        'auth_key',
        'confirmed_at',
        'unconfirmed_email',
        'blocked_at',
        'registration_ip',
        'flags',
        'last_login_at',
    ];
    echo DetailView::widget([
        'model' => $model->updatedBy,
        'attributes' => $gridColumnUser    ]);
    ?>
</div>
