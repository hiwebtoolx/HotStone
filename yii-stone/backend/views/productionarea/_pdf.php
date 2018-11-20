<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductionArea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Production Areas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="production-area-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Production Area').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
        <?php
        $gridColumn = [
            ['attribute' => 'id', 'visible' => false],

            ['attribute' => 'turn_on_lights',
                'value' => function($model){
                    return $model->turn_on_lights == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }],
            ['attribute' => 'read_salon_logbook',
                'value' => function($model){
                    return $model->read_salon_logbook == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_sanitize',
                'value' => function($model){
                    return $model->clean_sanitize == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],

            ['attribute' => 'receive_supplies',
                'value' => function($model){
                    return $model->receive_supplies == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_all_equipment',
                'value' => function($model){
                    return $model->check_all_equipment == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'turn_on_equipment',
                'value' => function($model){
                    return $model->turn_on_equipment == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'sterilize_foot_rock',
                'value' => function($model){
                    return $model->sterilize_foot_rock == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'organize_retail',
                'value' => function($model){
                    return $model->organize_retail == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'sweep_mop_floors',
                'value' => function($model){
                    return $model->sweep_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'tools_and_containers_in_the_preparation',
                'value' => function($model){
                    return $model->tools_and_containers_in_the_preparation == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_temperature',
                'value' => function($model){
                    return $model->check_temperature == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'ensure_that_ingredients',
                'value' => function($model){
                    return $model->ensure_that_ingredients == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'ingredients_in_containers_are_properly_labeled',
                'value' => function($model){
                    return $model->ingredients_in_containers_are_properly_labeled == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'no_busted_light_bulbs',
                'value' => function($model){
                    return $model->no_busted_light_bulbs == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'check_supplies_and_products',
                'value' => function($model){
                    return $model->check_supplies_and_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'greek_yoghurt',
                'value' => function($model){
                    return $model->greek_yoghurt == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'fresh_ginger',
                'value' => function($model){
                    return $model->fresh_ginger == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'cucumber',
                'value' => function($model){
                    return $model->cucumber == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'lemon',
                'value' => function($model){
                    return $model->lemon == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'frech_flowers',
                'value' => function($model){
                    return $model->frech_flowers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'mud',
                'value' => function($model){
                    return $model->mud == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'black_soap',
                'value' => function($model){
                    return $model->black_soap == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],

            ['attribute' => 'massage_oil',
                'value' => function($model){
                    return $model->massage_oil == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'oat_mail_mask',
                'value' => function($model){
                    return $model->oat_mail_mask == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'body_scrub',
                'value' => function($model){
                    return $model->body_scrub == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'lulur_scrub',
                'value' => function($model){
                    return $model->lulur_scrub == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'body_lotion',
                'value' => function($model){
                    return $model->body_lotion == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shampo',
                'value' => function($model){
                    return $model->shampo == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'conditionner',
                'value' => function($model){
                    return $model->conditionner == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'shower_gel',
                'value' => function($model){
                    return $model->shower_gel == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'bloosom_water',
                'value' => function($model){
                    return $model->bloosom_water == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'amber_salt',
                'value' => function($model){
                    return $model->amber_salt == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'henna',
                'value' => function($model){
                    return $model->henna == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'oriental_bokhour',
                'value' => function($model){
                    return $model->oriental_bokhour == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'gold',
                'value' => function($model){
                    return $model->gold == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'pearl',
                'value' => function($model){
                    return $model->pearl == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'activator',
                'value' => function($model){
                    return $model->activator == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'cellulate_cream',
                'value' => function($model){
                    return $model->cellulate_cream == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'cweed_wrap',
                'value' => function($model){
                    return $model->cweed_wrap == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'record_waste',
                'value' => function($model){
                    return $model->record_waste == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'do_necessary_cleaning',
                'value' => function($model){
                    return $model->do_necessary_cleaning == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'empty_trash',
                'value' => function($model){
                    return $model->empty_trash == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'ensure_quiet_interaction',
                'value' => function($model){
                    return $model->ensure_quiet_interaction == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'perform_service',
                'value' => function($model){
                    return $model->perform_service == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'use_products',
                'value' => function($model){
                    return $model->use_products == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'write_on_logbook_to_hand_over',
                'value' => function($model){
                    return $model->write_on_logbook_to_hand_over == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'send_to_laundry',
                'value' => function($model){
                    return $model->send_to_laundry == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'deplug_herbal_steamer',
                'value' => function($model){
                    return $model->deplug_herbal_steamer == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'clean_product_bowls',
                'value' => function($model){
                    return $model->clean_product_bowls == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'put_herbal_pack',
                'value' => function($model){
                    return $model->put_herbal_pack == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
            ['attribute' => 'turn_off_all_lights',
                'value' => function($model){
                    return $model->turn_off_all_lights == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');  }
            ],
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
    
    <div class="row">
<?php
if($providerProductionAreaOpening->totalCount){
    $gridColumnProductionAreaOpening = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
                'turn_on_lights',
        'shift_time',
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
        ['attribute' => 'lock', 'visible' => false],
    ];
    echo Gridview::widget([
        'dataProvider' => $providerProductionAreaOpening,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode(Yii::t('stone', 'Production Area Opening')),
        ],
        'panelHeadingTemplate' => '<h4>{heading}</h4>{summary}',
        'toggleData' => false,
        'columns' => $gridColumnProductionAreaOpening
    ]);
}
?>
    </div>
</div>
