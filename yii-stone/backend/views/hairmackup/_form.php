<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model backend\models\HairMakeup */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="hair-makeup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>
    <?= $form->field($model, 'branch_id')->hiddenInput(['value'=> Yii::$app->user->identity->profile->branch_id])->label(false); ?>

    <div class="row">
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
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'General Opening Tasks')?> : Check  2 time at 09h00 , 13h00
    </h4>
    <h6 style="background-color:#3c8dbc; color: #fff; text-align: left; font-size: 18px ; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 09h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_on_lights')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'read_salon_logbook_hand_over')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_sanitize')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'receive_supplies_and_products')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'check_all_equipment')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_on_equipment')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'check_water_supply')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'check_drawers')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'make_sure_that_all_linens')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'organize_newspapers')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_and_wipe_salon')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_and_wipe_shampoo_bowls')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_and_sanitize_make_up_brush')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'cart_and_trolleys_are_clean')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'sweep_mop_floors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'combs_and_brushes_are_clean')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'make_sure_that_all_scissors_are_sharp')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'make_sure_there_are_no_busted_light_bulbs')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hot_cabinet_is_full_with_towel')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <h6 style="background-color:#4d99bc; color: #fff; text-align: left; font-size: 18px;  padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check at 13h00')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_on_lights2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'read_salon_logbook_hand_over2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_sanitize2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'receive_supplies_and_products2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'check_all_equipment2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_on_equipment2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'check_water_supply2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'check_drawers2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'make_sure_that_all_linens2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'organize_newspapers2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_and_wipe_salon2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_and_wipe_shampoo_bowls2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_and_sanitize_make_up_brush2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'cart_and_trolleys_are_clean2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'sweep_mop_floors2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'combs_and_brushes_are_clean2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'make_sure_that_all_scissors_are_sharp2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'make_sure_there_are_no_busted_light_bulbs2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hot_cabinet_is_full_with_towel2')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Supplies and Products Related Tasks	')?>
    </h4>
    <h5 style="background-color:#4d99bc; color: #fff; text-align: left; font-size: 18px;  padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Check supplies and products. Make sure it is more than enough for the entire day operations.')?>
    </h5>
    <h6 style="background-color:#4d99bc; color: #fff; text-align: left; font-size: 18px;  padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'List of Supplies Hair style	')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'check_supplies_and_products')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'mixing_bowls')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'aprons')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'water_sprayers')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'applicator_brushes')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'paper_towels')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'handheld_mirrors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'rubber_gloves')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'plastic_gloves')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <h6 style="background-color:#4d99bc; color: #fff; text-align: left; font-size: 18px;  padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'List Professional Hair Care Products ')?>
    </h6>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shampoos')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'conditioners')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_straightening_and_perming_kits')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'styling_gels')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'serums')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'mousse')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_colors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_spray')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hair_extensions')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <h6 style="background-color:#4d99bc; color: #fff; text-align: left; font-size: 18px;  padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'List Professional Make up product')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'make_up_remover')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'cotton')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'tissu')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'ear_cotton')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'moisturizing_cream')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'face_scrub')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'eclat_ampoule')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'the_eyelashes')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'glow_for_eyelashes')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'tweezer')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'small_cisor')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_fixator')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'makeup_brush')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'foundation_Minimum_3_pigment')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'eye_shadow')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'blusher')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'mascara')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'eyeliner')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'eyebrow_color')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'customer_robe')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hand_sanitazer')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'hand_wash')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'high_lighter')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'contouring')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'concealer')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <h6 style="background-color:#4d99bc; color: #fff; text-align: left; font-size: 18px;  padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'MID SHIFT/SHIFT HAND-OVER/ON-GOING TASKS	')?>
    </h6>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'do_necessary_cleaning_and_station_reset')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'empty_trash_bins_and_replace_fresh_liners')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ensure_quiet_interaction_with_the_customer')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'perform_service_according_to_standard')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'use_products_according_to_standard_recipes')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'remove_dirty_dishes_cups')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'sterilize_tools_and_materials')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'products_are_organized_in_their_respective_compartments')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'If_there_is_not_enough_supplies_and_products')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'stock_as_needed')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <h6 style="background-color:#4d99bc; color: #fff; text-align: left; font-size: 18px;  padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'CLOSING TASKS ( Senior Therapist)')?>
    </h6>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'write_on_logbook_to_hand_over_concerns')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'send_to_laundry_area_dirty_linens')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'conduct_day_end_inventory_of_selected_items')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_off_all_lights')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <d
        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>



    <?= $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>



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
