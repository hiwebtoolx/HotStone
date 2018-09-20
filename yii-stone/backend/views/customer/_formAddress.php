<div class="form-group" id="add-address">
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
    'formName' => 'Address',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_CHECKBOX,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'first_name' => ['type' => TabularForm::INPUT_CHECKBOX],
        'address_line1' => ['type' => TabularForm::INPUT_CHECKBOX],
        'address_line2' => ['type' => TabularForm::INPUT_CHECKBOX],
        'city' => ['type' => TabularForm::INPUT_CHECKBOX],
        'state' => ['type' => TabularForm::INPUT_CHECKBOX],
        'country' => ['type' => TabularForm::INPUT_CHECKBOX],
        'postal_code' => ['type' => TabularForm::INPUT_CHECKBOX],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowAddress(' . $key . '); return false;', 'id' => 'address-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add Address'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowAddress()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

