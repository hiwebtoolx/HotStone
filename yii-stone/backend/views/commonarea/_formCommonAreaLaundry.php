<div class="form-group" id="add-common-area-laundry">
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
    'formName' => 'CommonAreaLaundry',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'laundry_be_sure_organize_and_clean_' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Be Sure Organize And Clean'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'laundry_sweep_and_mop_floors' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'laundry_check_washing_and_dryer_machine_functioning_well' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Check Washing And Dryer Machine Functioning Well'),
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
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaLaundry(' . $key . '); return false;', 'id' => 'common-area-laundry-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaLaundry()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

