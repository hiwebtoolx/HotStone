<div class="form-group" id="add-common-area-waiting">
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
    'formName' => 'CommonAreaWaiting',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'waiting_sweep_and_mop_floors' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Sweep and mop floors'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'waiting_clean_tables_and_edges_of_tables' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean tables and edges of tables'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'waiting_organize_magazines_and_promotional_materials' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Organize magazines and promotional materials'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'waiting_clean_the_chairs_used_by_visitors_make_sure_to_clean' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Clean the chairs used by visitors. Make sure to clean the chair arm, back, seat, and other touch areas of the chair '),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'waiting_light_the_candles' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Light the candles'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'waiting_refill_aroma_in_the_burners' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Refill aroma in the burners'),
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'waiting_remove_empty_glasses' => ['type' => TabularForm::INPUT_CHECKBOX,
            'label' => Yii::t('hstone', 'Remove empty glasses'),
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
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaWaiting(' . $key . '); return false;', 'id' => 'common-area-waiting-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaWaiting()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

