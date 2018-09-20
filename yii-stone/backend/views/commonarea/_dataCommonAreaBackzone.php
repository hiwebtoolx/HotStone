<?php
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;

    $dataProvider = new ArrayDataProvider([
        'allModels' => $model->commonAreaBackzones,
        'key' => 'id'
    ]);
    $gridColumns = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
        'backzone_check_the_place_is_clean_no_object_no_trash',
        'backzone_sweep_and_mop_floors',
        'backzone_clean_and_sanitize_a_big_trush_countainer',
        'backzone_clean_and_sanitize_sink',
        'shift_am',
        'shift_pm',
        ['attribute' => 'lock', 'visible' => false],
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'common-area-backzone'
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
