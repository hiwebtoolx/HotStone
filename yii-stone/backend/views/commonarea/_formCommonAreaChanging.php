<div class="form-group" id="add-common-area-changing">
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
        'formName' => 'CommonAreaChanging',
        'checkboxColumn' => false,
        'actionColumn' => false,
        'attributeDefaults' => [
            'type' => TabularForm::INPUT_TEXT,
        ],
        'attributes' => [
            "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
            'changing_sweep_and_mop_floors' => ['type' => TabularForm::INPUT_CHECKBOX,
                'label' => Yii::t('hstone', 'Sweep And Mop Floors'),
                'options' => [
                    'style' => 'position : relative; margin-top : -9px'
                ]
            ],
            'changing_clean_carpets' => ['type' => TabularForm::INPUT_CHECKBOX,
                'label' => Yii::t('hstone', 'Clean Carpets'),
                'options' => [
                    'style' => 'position : relative; margin-top : -9px'
                ]
            ],
            'changing_collect_dirty_towels_and_give_it_to_the_laundry_service' => ['type' => TabularForm::INPUT_CHECKBOX,
                'label' => Yii::t('hstone', 'Collect Dirty Towels And Give It To The Laundry Service'),
                'options' => [
                    'style' => 'position : relative; margin-top : -9px'
                ]
            ],
            'changing_collect_used_footwear_and_put_it_in_red_container' => ['type' => TabularForm::INPUT_CHECKBOX,
                'label' => Yii::t('hstone', 'Collect Used Footwear And Put It In Red Container'),
                'options' => [
                    'style' => 'position : relative; margin-top : -9px'
                ]
            ],
            'provide_towels_disposables_panty_bra_and_slippers_in_cabinetscha' => ['type' => TabularForm::INPUT_CHECKBOX,
                'label' => Yii::t('hstone', 'Provide towels, disposables Panty /Bra and slippers in cabinets'),
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
                        Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('stone', 'Delete'), 'onClick' => 'delRowCommonAreaChanging(' . $key . '); return false;', 'id' => 'common-area-changing-del-btn']);
                },
            ],
        ],
        'gridSettings' => [
            'panel' => [
                'heading' => false,
                'type' => GridView::TYPE_DEFAULT,
                'before' => false,
                'footer' => false,
                'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('stone', 'Add New'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCommonAreaChanging()']),
            ]
        ]
    ]);
    echo  "    </div>\n\n";
    ?>
