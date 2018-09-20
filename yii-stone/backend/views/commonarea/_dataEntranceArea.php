<?php
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;

    $dataProvider = new ArrayDataProvider([
        'allModels' => $model->entranceAreas,
        'key' => 'id'
    ]);
    $gridColumns = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
//        [
//
//           'attribute' => 'remove_stains_on_floors',
//            'label' => 'test' ,
//            //'value' => 'remove_stains_on_floors'
//
//        ].
        'clean_the_fountains',
        'wipe_baseboards_of_the_door',
        'clean_the_wall_fixtures',
        'clean_the_sign',
        'check_sign_light',
        ['attribute' => 'lock', 'visible' => false],
        'shift_am',
        'shift_pm',
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'entrance-area'
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
