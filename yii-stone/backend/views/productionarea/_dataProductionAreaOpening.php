<?php
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;

    $dataProvider = new ArrayDataProvider([
        'allModels' => $model->productionAreaOpenings,
        'key' => 'id'
    ]);
    $gridColumns = [
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
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'production-area-opening'
        ],
    ];
    
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'containerOptions' => ['style' => 'overflow: auto'],
        'pjax' => true,
        'beforeHeader' => [
            [
                'options' => ['class' => 'skip-export']
            ]
        ],
        'export' => [
            'fontAwesome' => true
        ],
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
        'persistResize' => false,
    ]);
