<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\widgets\SwitchInput;
/* @var $this yii\web\View */
/* @var $model backend\models\FrontHouse */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="front-house-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>
<?= date('g:i:s');?>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'shift_date')->widget(\kartik\datecontrol\DateControl::classname(), [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                //'value' => 'Y-m-d',
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
                //'saveFormat' => 'php:H:i:s',
                //'ajaxConversion' => true,
                'value'=> date('g'),
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
                'value' => date("G:i:s"),
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => Yii::t('stone', 'Choose Shift Am'),
                        'autoclose' => true
                    ]
                ]
            ]); ?>
        </div>

    </div>
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'OPENING TASKS : Check 1 time at 09h00')?>
    </h4>
    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>
    <?= $form->field($model, 'branch_id')->hiddenInput(['value'=> Yii::$app->user->identity->profile->branch_id])->label(false); ?>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_on_lights')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>

        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_off_alarm')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'read_foh_logbook')->widget(SwitchInput::classname(), [
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
            <?= $form->field($model, 'indoor_plants')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'clean_and_wipe_chairs')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'sweep_mop_floors')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'no_busted_light_bulbs')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_on_tv')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Reception/Cashiering Opening Tasks : Check 1 time at 09h00')?>
    </h4>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_on_pos')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'receive_cashiers')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'scan_days_appointment')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'print_therapists_schedule')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'brochures_are_available')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'print_customer_appointments')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Welcome Bars : Check 1 time at 09h00')?>
    </h4>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'prepare_food_canapes')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'prepare_tea_bags')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'brew_coffee')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>


    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'MID SHIFT/SHIFT HAND-OVER/ON-GOING TASKS : Check 1 time at 09h00')?>
    </h4>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'necessary_cleaning')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'empty_trash_bins')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'ensure_lively_interaction')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'remove_dirty_dishes')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'hand_over_of_pos')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'CLOSING TASKS : Check 1 time at 21h00')?>
    </h4>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'write_on_logbook')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'put_all_used_gift_certificates')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'close_pos')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'empty_trash_bins_and_sanitize')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'throw_out_dated_newspapers')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'turn_off_all_lights')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'set_on_alarm_system')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'lock_the_door')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
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
