<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductionareaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-production-area-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>



    <?php /* echo $form->field($model, 'check_all_equipment')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_on_equipment')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sterilize_foot_rock')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'organize_retail')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sweep_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tools_and_containers_in_the_preparation')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_temperature')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ensure_that_ingredients')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ingredients_in_containers_are_properly_labeled')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'no_busted_light_bulbs')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_supplies_and_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'greek_yoghurt')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'fresh_ginger')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cucumber')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'lemon')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'frech_flowers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'mud')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'black_soap')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_oil')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'oat_mail_mask')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_scrub')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'lulur_scrub')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_lotion')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampo')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'conditionner')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shower_gel')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'bloosom_water')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'amber_salt')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'henna')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'oriental_bokhour')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'gold')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pearl')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'activator')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cellulate_cream')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cweed_wrap')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'record_waste')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'do_necessary_cleaning')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'empty_trash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ensure_quiet_interaction')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'perform_service')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'use_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'write_on_logbook_to_hand_over')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'send_to_laundry')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'deplug_herbal_steamer')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_product_bowls')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'put_herbal_pack')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_off_all_lights')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'notes')->textarea(['rows' => 6]) */ ?>

    <?php   echo $form->field($model, 'checked_by')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);  ?>

    <?php   echo $form->field($model, 'shift_am')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => Yii::t('stone', 'Choose Shift Am'),
                'autoclose' => true
            ]
        ]
    ]);   ?>

    <?php  echo $form->field($model, 'shift_pm')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => Yii::t('stone', 'Choose Shift Pm'),
                'autoclose' => true
            ]
        ]
    ]);   ?>

    <?php  echo $form->field($model, 'shift_date')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => Yii::t('stone', 'Choose Shift Date'),
                'autoclose' => true
            ]
        ],
    ]);   ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
