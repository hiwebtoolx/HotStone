<div class="form-group" id="add-common-area-backzone">
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
    'formName' => 'CommonAreaBackzone',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'backzone_check_the_place_is_clean_no_object_no_trash' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Check the place is clean, No object, No trush'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'backzone_sweep_and_mop_floors' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Sweep and mop floors'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'backzone_clean_and_sanitize_a_big_trush_countainer' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean and sanitize a big trush countainer'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'backzone_clean_and_sanitize_sink' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean and sanitize sink'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        "created_at" => [
                'type' => TabularForm::INPUT_HIDDEN,
            'columnOptions' => ['hidden'=>true],
            'value' => time()
        ],
        "lock" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaBackzone(' . $key . '); return false;', 'id' => 'common-area-backzone-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaBackzone()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

