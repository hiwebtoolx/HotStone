<div class="form-group" id="add-common-area-toilets">
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
    'formName' => 'CommonAreaToilets',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'toilet_clean_and_sanitize_sink' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean and sanitize sink'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'toilet_clean_a_tiled_surfaces_with_a_disinfectant' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean a tiled surfaces with a disinfectant'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'toilet_clean_toilets_inside_and_out' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean toilets inside and out'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'toilet_check_the_good_smell' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Check the good smell'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'toreplenish_consumable_items__soap_toilet_rolls_paper_towels_etc' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Replenish consumable items (soap, toilet rolls, paper towels etc)'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'toilet_clean_the_dispensers_and_other_wall_fixtures' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean the dispensers and other wall fixtures  '),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'clean_the_exterior_of_trash_containers_especially_surfaces_touch' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean the exterior of trash containers, especially surfaces touched by people'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'toilet_seats_to_be_cleaned_on_both_sides_using_a_disinfectant' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Toilet seats to be cleaned on both sides using a disinfectant'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'toilet_sweep_and_mop_floors' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Sweep and mop floors'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'toilet_check_toilet_flushing_is_fuctioning' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Check toilet flushing is fuctioning'),
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
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaToilets(' . $key . '); return false;', 'id' => 'common-area-toilets-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaToilets()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

