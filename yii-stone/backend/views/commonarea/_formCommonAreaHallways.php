<div class="form-group" id="add-common-area-hallways">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'CommonAreaHallways',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'sweep_and_mop_floors' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'clean_carpets' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean Carpets'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'remove_stains_and_dust_on_surfaces' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'clean_pictures' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean Pictures'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'clean_mirrors' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean Mirrors'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'remove_dead_flowers' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Remove Dead Flowers'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'water_plants' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Water Plants'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'clean_light_switches_and_area_around_switch_on_the_wall' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean Light Switches And Area Around Switch On The Wall'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'dust_lamps' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Dust Lamps'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'detect_and_change_busted_light' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Detect And Change Busted Light'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'light_the_candles' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Light The Candles'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'refill_aroma_in_the_burners' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Refill Aroma In The Burners'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],

        "lock" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaHallways(' . $key . '); return false;', 'id' => 'common-area-hallways-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaHallways()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

