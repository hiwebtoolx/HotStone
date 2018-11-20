<div class="form-group" id="add-common-area-break">
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
    'formName' => 'CommonAreaBreak',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'break_sweep_and_mop_floors' => ['type' => TabularForm::INPUT_RADIO,
            'label' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'break_clean_furniture_dust' => ['type' => TabularForm::INPUT_RADIO,
            'label' => Yii::t('hstone', 'Clean Furniture Dust'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'break_clean_the_fridge_and_microwave' => ['type' => TabularForm::INPUT_RADIO,
            'label' => Yii::t('hstone', 'Clean The Fridge And Microwave'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        "created_at" => [
            'type' => TabularForm::INPUT_HIDDEN,
            'columnOptions' => ['hidden'=>true],
            'value' => time()
        ],
        "lock" => ['type' => TabularForm::INPUT_RADIO, 'columnOptions' => ['hidden'=>true]],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaBreak(' . $key . '); return false;', 'id' => 'common-area-break-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaBreak()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

