<?php
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;

    $dataProvider = new ArrayDataProvider([
        'allModels' => $model->commonAreaToilets,
        'key' => 'id'
    ]);
    $gridColumns = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
        'toilet_clean_and_sanitize_sink',
        'toilet_clean_a_tiled_surfaces_with_a_disinfectant',
        'toilet_clean_toilets_inside_and_out',
        'toilet_check_the_good_smell',
        'toreplenish_consumable_items__soap_toilet_rolls_paper_towels_etc',
        'toilet_clean_the_dispensers_and_other_wall_fixtures',
        'clean_the_exterior_of_trash_containers_especially_surfaces_touch',
        'toilet_seats_to_be_cleaned_on_both_sides_using_a_disinfectant',
        'toilet_sweep_and_mop_floors',
        'toilet_check_toilet_flushing_is_fuctioning',
        'shift_am',
        'shift_pm',
        ['attribute' => 'lock', 'visible' => false],
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'common-area-toilets'
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
