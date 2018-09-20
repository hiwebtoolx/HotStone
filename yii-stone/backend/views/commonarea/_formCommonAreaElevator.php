<div class="form-group" id="add-common-area-elevator">
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
    'formName' => 'CommonAreaElevator',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'elevator_clean_the_elevator' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean the elevator'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'elevator_clean_the_door_exterior_the_door_interior' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hhstone', 'Clean the door exterior, the door interior'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'elevator_clean_buttons_carefully' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean buttons carefully'),
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
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaElevator(' . $key . '); return false;', 'id' => 'common-area-elevator-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaElevator()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

