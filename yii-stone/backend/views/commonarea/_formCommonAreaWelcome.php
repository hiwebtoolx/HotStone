<div class="form-group" id="add-common-area-welcome">
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
    'formName' => 'CommonAreaWelcome',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'bars_remove_stains_and_dust_on_surfaces' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Bars Remove Stains And Dust On Surfaces'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'bars_draw_up_the_decoration' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Bars Draw Up The Decoration'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'bars_prepare_food_canapes' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Bars Prepare Food Canapes'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'bars_prepare_tea_bags_sugar_cups_and_saucers' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Bars Prepare Tea Bags Sugar Cups And Saucers'),
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
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaWelcome(' . $key . '); return false;', 'id' => 'common-area-welcome-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaWelcome()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

