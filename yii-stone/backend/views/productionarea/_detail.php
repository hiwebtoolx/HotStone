<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductionArea */

?>
<div class="production-area-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->id) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'turn_on_lights',
        'read_salon_logbook',
        'clean_sanitize',
        'receive_supplies',
        'check_all_equipment',
        'turn_on_equipment',
        'sterilize_foot_rock',
        'organize_retail',
        'sweep_mop_floors',
        'tools_and_containers_in_the_preparation',
        'check_temperature',
        'ensure_that_ingredients',
        'ingredients_in_containers_are_properly_labeled',
        'no_busted_light_bulbs',
        'check_supplies_and_products',
        'greek_yoghurt',
        'fresh_ginger',
        'cucumber',
        'lemon',
        'frech_flowers',
        'mud',
        'black_soap',
        'massage_oil',
        'oat_mail_mask',
        'body_scrub',
        'lulur_scrub',
        'body_lotion',
        'shampo',
        'conditionner',
        'shower_gel',
        'bloosom_water',
        'amber_salt',
        'henna',
        'oriental_bokhour',
        'gold',
        'pearl',
        'activator',
        'cellulate_cream',
        'cweed_wrap',
        'record_waste',
        'do_necessary_cleaning',
        'empty_trash',
        'ensure_quiet_interaction',
        'perform_service',
        'use_products',
        'write_on_logbook_to_hand_over',
        'send_to_laundry',
        'deplug_herbal_steamer',
        'clean_product_bowls',
        'put_herbal_pack',
        'turn_off_all_lights',
        'notes:ntext',
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
</div>