<div class="form-group" id="add-common-area-relaxation">
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
    'formName' => 'CommonAreaRelaxation',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'relaxation_sweep_and_mop_floors' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'relaxation_clean_furniture_dust' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean Furniture Dust'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'relaxation_remove_stains_and_dust_on_surfaces' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'relaxation_empty_trash' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Empty Trash'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'relaxation_light_the_candles' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Light The Candles'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'relaxation_refill_aroma_in_the_burners' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Refill Aroma In The Burners'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'relaxation_draw_up_the_decoration' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Draw Up The Decoration'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'relaxation_check_temperature_25_degrees_celsius' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Check temperature 25 degrees celsius'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'relaxation_clean_mirrors' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean Mirrors'),
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
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaRelaxation(' . $key . '); return false;', 'id' => 'common-area-relaxation-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaRelaxation()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

