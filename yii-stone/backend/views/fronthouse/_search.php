<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FronthouseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-front-house-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>


    <?php /* echo $form->field($model, 'indoor_plants')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_wipe_chairs')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sweep_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'no_busted_light_bulbs')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_on_tv')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_on_pos')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'receive_cashiers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'scan_days_appointment')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'print_therapists_schedule')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'brochures_are_available')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'print_customer_appointments')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'prepare_food_canapes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'prepare_tea_bags')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'brew_coffee')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'necessary_cleaning')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'empty_trash_bins')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ensure_lively_interaction')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'remove_dirty_dishes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hand_over_of_pos')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'write_on_logbook')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'put_all_used_gift_certificates')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'close_pos')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'empty_trash_bins_and_sanitize')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'throw_out_dated_newspapers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_off_all_lights')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'set_on_alarm_system')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'lock_the_door')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'notes')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <?php  echo $form->field($model, 'checked_by')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);  ?>

    <?php echo $form->field($model, 'shift_am')->textInput(['maxlength' => true, 'placeholder' => 'Shift Am'])  ?>

    <?php echo $form->field($model, 'shift_pm')->textInput(['maxlength' => true, 'placeholder' => 'Shift Pm'])  ?>

    <?php echo $form->field($model, 'shift_date')->textInput(['maxlength' => true, 'placeholder' => 'Shift Date'])   ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
