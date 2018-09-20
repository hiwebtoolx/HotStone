<div class="form-group" id="add-entrance-area">
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
    'formName' => 'EntranceArea',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'remove_stains_on_floors' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Remove stains on floors'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'clean_the_fountains' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' =>Yii::t('hstone', 'Clean the fountains'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'wipe_baseboards_of_the_door' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Wipe baseboards of the door'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'clean_the_wall_fixtures' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean The Wall Fixtures'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'clean_the_sign' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean The Sign'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'check_sign_light' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Check Sign Light'),
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
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowEntranceArea(' . $key . '); return false;', 'id' => 'entrance-area-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowEntranceArea()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

