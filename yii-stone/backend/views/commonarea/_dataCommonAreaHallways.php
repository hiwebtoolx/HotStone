<?php
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;

    $dataProvider = new ArrayDataProvider([
        'allModels' => $model->commonAreaHallways,
        'key' => 'id'
    ]);
    $gridColumns = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
        'sweep_and_mop_floors',
        'clean_carpets',
        'remove_stains_and_dust_on_surfaces',
        'clean_pictures',
        'clean_mirrors',
        'remove_dead_flowers',
        'water_plants',
        'clean_light_switches_and_area_around_switch_on_the_wall',
        'dust_lamps',
        'detect_and_change_busted_light',
        'light_the_candles',
        'refill_aroma_in_the_burners',
        'shift_am',
        'shift_pm',
        ['attribute' => 'lock', 'visible' => false],
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'common-area-hallways'
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
