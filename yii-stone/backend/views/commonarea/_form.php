<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model backend\models\CommonArea */
/* @var $form yii\widgets\ActiveForm */
$this->registerCss('
    .checkbox input[type="checkbox"] {
        -webkit-appearance: checkbox;
        margin-left:0
    }
    
');
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaBackzone', 
        'relID' => 'common-area-backzone', 
        'value' => \yii\helpers\Json::encode($model->commonAreaBackzones),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaBreak', 
        'relID' => 'common-area-break', 
        'value' => \yii\helpers\Json::encode($model->commonAreaBreaks),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaChanging', 
        'relID' => 'common-area-changing', 
        'value' => \yii\helpers\Json::encode($model->commonAreaChangings),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaElevator', 
        'relID' => 'common-area-elevator', 
        'value' => \yii\helpers\Json::encode($model->commonAreaElevators),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaHallways', 
        'relID' => 'common-area-hallways', 
        'value' => \yii\helpers\Json::encode($model->commonAreaHallways),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaLaundry', 
        'relID' => 'common-area-laundry', 
        'value' => \yii\helpers\Json::encode($model->commonAreaLaundries),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaPrayer', 
        'relID' => 'common-area-prayer', 
        'value' => \yii\helpers\Json::encode($model->commonAreaPrayers),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaRelaxation', 
        'relID' => 'common-area-relaxation', 
        'value' => \yii\helpers\Json::encode($model->commonAreaRelaxations),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaToilets', 
        'relID' => 'common-area-toilets', 
        'value' => \yii\helpers\Json::encode($model->commonAreaToilets),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaWaiting', 
        'relID' => 'common-area-waiting', 
        'value' => \yii\helpers\Json::encode($model->commonAreaWaitings),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'CommonAreaWelcome', 
        'relID' => 'common-area-welcome', 
        'value' => \yii\helpers\Json::encode($model->commonAreaWelcomes),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'EntranceArea', 
        'relID' => 'entrance-area', 
        'value' => \yii\helpers\Json::encode($model->entranceAreas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'ProductBarArea', 
        'relID' => 'product-bar-area', 
        'value' => \yii\helpers\Json::encode($model->productBarAreas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'ReceptionArea', 
        'relID' => 'reception-area', 
        'value' => \yii\helpers\Json::encode($model->receptionAreas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="common-area-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <div class="row">

        <div class="col-sm-4">
            <?= $form->field($model, 'shift_date')->widget(\kartik\datecontrol\DateControl::classname(), [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => Yii::t('stone', 'Choose Shift Date'),
                        'autoclose' => true
                    ]
                ],
            ]); ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shift_pm')->widget(\kartik\datecontrol\DateControl::className(), [
                'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
                'saveFormat' => 'php:H:i:s',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => Yii::t('stone', 'Choose Shift Pm'),
                        'autoclose' => true
                    ]
                ]
            ]); ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shift_am')->widget(\kartik\datecontrol\DateControl::className(), [
                'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
                'saveFormat' => 'php:H:i:s',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => Yii::t('stone', 'Choose Shift Am'),
                        'autoclose' => true
                    ]
                ]
            ]); ?>
        </div>

    </div>

    <?= $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>
    <?= $form->field($model, 'branch_id')->hiddenInput(['value'=> Yii::$app->user->identity->profile->branch_id])->label(false); ?>

    <?php
    $forms_entrance = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Entrance Area')),
            'content' => $this->render('_formEntranceArea', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->entranceAreas),
            ]),
        ],


    ];
    $forms_rec =[
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Reception Area')),
            'content' => $this->render('_formReceptionArea', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->receptionAreas),
            ]),
        ],
    ];
    $forms_prod = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Product Bar Area')),
            'content' => $this->render('_formProductBarArea', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->productBarAreas),
            ]),
        ],
    ];
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Hallways')),
            'content' => $this->render('_formCommonAreaHallways', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaHallways),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Welcome Bars')),
            'content' => $this->render('_formCommonAreaWelcome', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaWelcomes),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Waiting Area')),
            'content' => $this->render('_formCommonAreaWaiting', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaWaitings),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Elevator')),
            'content' => $this->render('_formCommonAreaElevator', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaElevators),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Changing room')),
            'content' => $this->render('_formCommonAreaChanging', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaChangings),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Toilets')),
            'content' => $this->render('_formCommonAreaToilets', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaToilets),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Prayer room')),
            'content' => $this->render('_formCommonAreaPrayer', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaPrayers),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Laundry')),
            'content' => $this->render('_formCommonAreaLaundry', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaLaundries),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'The back zone')),
            'content' => $this->render('_formCommonAreaBackzone', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaBackzones),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Relaxation room')),
            'content' => $this->render('_formCommonAreaRelaxation', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaRelaxations),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('stone', 'Break room')),
            'content' => $this->render('_formCommonAreaBreak', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->commonAreaBreaks),
            ]),
        ],

    ];


    ?>
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Entrance Area Check 2 times at 13H00 and 17h00')?>
    </h4>
    <?= kartik\tabs\TabsX::widget([
        'items' => $forms_entrance,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);?>
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Reception Area Check 4 times at 13h00 15h00 17h00 19h00')?>
    </h4>
    <?= kartik\tabs\TabsX::widget([
        'items' => $forms_rec,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);?>
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Product Bar area	Check 1 time at 13:00')?>
    </h4>
    <?= kartik\tabs\TabsX::widget([
        'items' => $forms_prod,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);?>
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Common area')?>
    </h4>
    <?=kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);?>


    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Salon Area : Check  2 time at 13h00 17h00')?>
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 13h00 ')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_sweep_and_mop_floors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_remove_stains_and_dust_on_surfaces')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_clean_mirrors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_clean_cart_and_trolleys')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_clean_drawers_and_cabinets')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_empty_trash')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_detect_and_change_busted_light')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 17h00 ')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_sweep_and_mop_floors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_under_chairs_from_hair_and_put_leader_conditionner_for2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_remove_stains_and_dust_on_surfaces2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_clean_mirrors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_clean_cart_and_trolleys2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_clean_drawers_and_cabinets2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_empty_trash2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_detect_and_change_busted_light2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , '	Shampoo Stations')?>
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 13h00 ')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_sweep_and_mop_floors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_under_chairs_from_hair_and_put_leader')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_sinks_from_hair_and_product_residue')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_shampoo_bowls')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_empty_trash')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_remove_stains_and_dust_on_surfaces')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_mirrors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_the_product_containers')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_empty_towel_basket')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_detect_and_change_busted_light')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 17h00 ')?>
    </h6>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_sweep_and_mop_floors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_under_chairs_from_hair_and_put_leader2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_sinks_from_hair_and_product_residue2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_shampoo_bowls2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_empty_trash2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_remove_stains_and_dust_on_surfaces2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_mirrors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_clean_the_product_containers2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_empty_towel_basket2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoo_detect_and_change_busted_light2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Hair treatment Stations')?>
    </h6>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 13h00 ')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_sweep_and_mop_floors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_under_chairs_from_hair_and_put_leader')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_sinks_from_hair_and_product_residue')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_empty_trash')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_remove_stains_and_dust_on_surfaces')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_draw_up_the_decoration')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_mixed_bowls')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_mirrors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_the_product_containers')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_empty_used_towel_bascket')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_detect_and_change_busted_light')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_the_product_containers2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div> <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 17h00 ')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_sweep_and_mop_floors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_under_chairs_from_hair_and_put_leader2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_sinks_from_hair_and_product_residue2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_empty_trash2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_remove_stains_and_dust_on_surfaces2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_draw_up_the_decoration2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_mixed_bowls2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_mirrors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_clean_the_product_containers22')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_empty_used_towel_bascket2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'treatment_detect_and_change_busted_light2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Pedicure Manicure Stations')?>
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 13h00 ')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_the_curtains_should_be_clean')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_sweep_and_mop_floors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_clean_under_chairs__and_put_leader')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_clean_and_sanitize_sink')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_empty_trash')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_remove_stains_and_dust_on_surfaces')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_remove_basket_cleaning_items_and_dirty_towels')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_remove_empty_glasses')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 17h00 ')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_the_curtains_should_be_clean2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_sweep_and_mop_floors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_clean_under_chairs__and_put_leader2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_clean_and_sanitize_sink2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_empty_trash2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_remove_stains_and_dust_on_surfaces2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_remove_basket_cleaning_items_and_dirty_towels2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'pedicure_remove_empty_glasses2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Pedicure Manicure bar')?>
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 13h00 ')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_draw_up_products')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_empty_trash')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_clean_all_surfaces_with_a_disinfectant')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_clean_and_organize_nail_polish_racks')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_empty_used_towel_bascket')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'At 17h00 ')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_draw_up_products2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_empty_trash2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_clean_all_surfaces_with_a_disinfectant2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_clean_and_organize_nail_polish_racks2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'manicure_bar_empty_used_towel_bascket2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'SPA Area	: Hammam Check 2 times at	')?>
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 13h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_clean_and_sanitize_all_basins')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_clean_a_tiled_surfaces_with_a_disinfectant')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_check_ventilation_ac_is_working')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_check_aroma_system_is_working')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_sanitize_all_surfaces_with_clorox_and_detol')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_draw_up_the_decoration')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_clean_water_drean_and_put_flash_and_clorox')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_refill_aroma_in_the_burners')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_refill_spray_aroma_for_hammam')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_light_the_candles')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_the_towels_must_be_clean_flufy_and_perfumed')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_check_temperature')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 17h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_clean_and_sanitize_all_basins2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_clean_a_tiled_surfaces_with_a_disinfectant2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_check_ventilation_ac_is_working2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_check_aroma_system_is_working2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_sanitize_all_surfaces_with_clorox_and_detol2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_draw_up_the_decoration2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_clean_water_drean_and_put_flash_and_clorox2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_refill_aroma_in_the_burners2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_refill_spray_aroma_for_hammam2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_light_the_candles2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_the_towels_must_be_clean_flufy_and_perfumed2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hammam_check_temperature2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Spa Area	: Massage Check 2 times at	')?>
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 13h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_clean_carpets')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_clean_and_sanitize_all_basins')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_clean_surrounding_basin')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_check_smell_liners_of_the_bed')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_draw_up_the_decoration')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_empty_trash')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_check_temperature_24_degrees_celsius')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_remove_stains_and_dust_on_surfaces')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_the_towels_must_be_clean_flufy_and_perfumed')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_light_the_candles')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_refill_aroma_in_the_burners')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>


    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 17h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_clean_carpet2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_clean_and_sanitize_all_basins2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_clean_surrounding_basin2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_check_smell_liners_of_the_bed2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_draw_up_the_decoration2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_empty_trash2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_check_temperature_24_degrees_celsius2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_remove_stains_and_dust_on_surfaces2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_the_towels_must_be_clean_flufy_and_perfumed2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_light_the_candles2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'massage_refill_aroma_in_the_burners2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Spa Area	: Facial Check 2 times at	')?>
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 13h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_draw_up_products')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_clean_the_product_containers')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_clean_and_sanitize_sink')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_check_temperature')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_clean_and_sanitize_shower_and_sink_unit_shiny')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_check_face_bowl_water_clean_and_appropriate_decoration_')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_remove_stains_and_dust_on_surfaces')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_the_towels_must_be_clean_flufy_and_perfumed')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_empty_trash')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_light_the_candles')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_refill_aroma_in_the_burners')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>


    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 17h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_draw_up_products2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_clean_the_product_containers2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_clean_and_sanitize_sink2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_check_temperature2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_clean_and_sanitize_shower_and_sink_unit_shiny2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_check_face_bowl_water_clean_and_appropriate_decoration_2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_remove_stains_and_dust_on_surfaces2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_the_towels_must_be_clean_flufy_and_perfumed2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_empty_trash2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_light_the_candles2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'facial_refill_aroma_in_the_burners2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>



    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Spa Area	: Ayurveda Check 2 times at	')?>
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 13h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_check_ventilation_ac_is_working')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_clean_and_sanitize_shower_and_sink')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_clean_mirrors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_clean_all_surfaces_with_a_disinfectant')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_light_the_candles')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_refill_aroma_in_the_burners')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_check_temperature')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 17h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_check_ventilation_ac_is_working2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_clean_and_sanitize_shower_and_sink2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_clean_mirrors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_clean_all_surfaces_with_a_disinfectant2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_light_the_candles2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_refill_aroma_in_the_burners2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ayurveda_check_temperature2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Spa Area	: Make up room Check 2 times at	')?>
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 13h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_sweep_and_mop_floors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_remove_stains_and_dust_on_surfaces')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_empty_trush')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_clean_and_sanitize_sink')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_clean_mirrors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <h6 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: left; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 17h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_sweep_and_mop_floors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_remove_stains_and_dust_on_surfaces2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_empty_trush2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_clean_and_sanitize_sink2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_clean_mirrors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <div class="form-group">
    <?php if(Yii::$app->controller->action->id != 'save-as-new'): ?>
        <?= Html::submitButton($model->isNewRecord ? Yii::t('stone', 'Create') : Yii::t('stone', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php endif; ?>
    <?php if(Yii::$app->controller->action->id != 'create'): ?>
        <?= Html::submitButton(Yii::t('stone', 'Save As New'), ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
    <?php endif; ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
