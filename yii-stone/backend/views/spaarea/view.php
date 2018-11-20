<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Spaarea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Spaareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spaarea-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Spaarea').' '. Html::encode($this->title) ?></h2>
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
        'hammam_clean_and_sanitize_all_basins',
        'hammam_clean_a_tiled_surfaces_with_a_disinfectant',
        'hammam_check_ventilation_ac_is_working',
        'hammam_check_aroma_system_is_working',
        'hammam_sanitize_all_surfaces_with_clorox_and_detol',
        'hammam_draw_up_the_decoration',
        'hammam_clean_water_drean_and_put_flash_and_clorox',
        'hammam_refill_aroma_in_the_burners',
        'hammam_refill_spray_aroma_for_hammam',
        'hammam_light_the_candles',
        'hammam_the_towels_must_be_clean_flufy_and_perfumed',
        'hammam_check_temperature',
        'massage_clean_carpets',
        'massage_clean_and_sanitize_all_basins',
        'massage_clean_surrounding_basin',
        'massage_check_smell_liners_of_the_bed',
        'massage_draw_up_the_decoration',
        'massage_empty_trash',
        'massage_check_temperature_24_degrees_celsius',
        'massage_remove_stains_and_dust_on_surfaces',
        'massage_the_towels_must_be_clean_flufy_and_perfumed',
        'massage_light_the_candles',
        'massage_refill_aroma_in_the_burners',
        'facial_draw_up_products',
        'facial_clean_the_product_containers',
        'facial_clean_and_sanitize_sink',
        'facial_check_temperature',
        'facial_clean_and_sanitize_shower_and_sink_unit_shiny',
        'facial_check_face_bowl_water_clean_and_appropriate_decoration_',
        'facial_remove_stains_and_dust_on_surfaces',
        'facial_the_towels_must_be_clean_flufy_and_perfumed',
        'facial_empty_trash',
        'facial_light_the_candles',
        'facial_refill_aroma_in_the_burners',
        'ayurveda_check_ventilation_ac_is_working',
        'ayurveda_clean_and_sanitize_shower_and_sink',
        'ayurveda_clean_mirrors',
        'ayurveda_clean_all_surfaces_with_a_disinfectant',
        'ayurveda_the_towels_must_be_clean_flufy_and_perfumed',
        'ayurveda_light_the_candles',
        'ayurveda_refill_aroma_in_the_burners',
        'ayurveda_check_temperature',
        'makeup_sweep_and_mop_floors',
        'makeup_remove_stains_and_dust_on_surfaces',
        'makeup_empty_trush',
        'makeup_clean_and_sanitize_sink',
        'makeup_clean_mirrors',
        [
            'attribute' => 'checkedBy.username',
            'label' => Yii::t('stone', 'Checked By'),
        ],
        'shift_am',
        'shift_pm',
        'shift_date',
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
        'model' => $model->updatedBy,
        'attributes' => $gridColumnUser    ]);
    ?>
</div>
