<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SpaareaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-spaarea-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'hammam_clean_and_sanitize_all_basins')->checkbox() ?>

    <?= $form->field($model, 'hammam_clean_a_tiled_surfaces_with_a_disinfectant')->checkbox() ?>

    <?= $form->field($model, 'hammam_check_ventilation_ac_is_working')->checkbox() ?>

    <?= $form->field($model, 'hammam_check_aroma_system_is_working')->checkbox() ?>

    <?php /* echo $form->field($model, 'hammam_sanitize_all_surfaces_with_clorox_and_detol')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_draw_up_the_decoration')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_clean_water_drean_and_put_flash_and_clorox')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_refill_aroma_in_the_burners')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_refill_spray_aroma_for_hammam')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_light_the_candles')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_the_towels_must_be_clean_flufy_and_perfumed')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_check_temperature')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_clean_carpets')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_clean_and_sanitize_all_basins')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_clean_surrounding_basin')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_check_smell_liners_of_the_bed')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_draw_up_the_decoration')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_empty_trash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_check_temperature_24_degrees_celsius')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_remove_stains_and_dust_on_surfaces')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_the_towels_must_be_clean_flufy_and_perfumed')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_light_the_candles')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_refill_aroma_in_the_burners')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_draw_up_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_clean_the_product_containers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_clean_and_sanitize_sink')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_check_temperature')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_clean_and_sanitize_shower_and_sink_unit_shiny')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_check_face_bowl_water_clean_and_appropriate_decoration_')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_remove_stains_and_dust_on_surfaces')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_the_towels_must_be_clean_flufy_and_perfumed')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_empty_trash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_light_the_candles')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_refill_aroma_in_the_burners')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_check_ventilation_ac_is_working')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_clean_and_sanitize_shower_and_sink')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_clean_mirrors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_clean_all_surfaces_with_a_disinfectant')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_light_the_candles')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_refill_aroma_in_the_burners')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_check_temperature')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'makeup_sweep_and_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'makeup_remove_stains_and_dust_on_surfaces')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'makeup_empty_trush')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'makeup_clean_and_sanitize_sink')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'makeup_clean_mirrors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'checked_by')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'shift_am')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => Yii::t('stone', 'Choose Shift Am'),
                'autoclose' => true
            ]
        ]
    ]); */ ?>

    <?php /* echo $form->field($model, 'shift_pm')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => Yii::t('stone', 'Choose Shift Pm'),
                'autoclose' => true
            ]
        ]
    ]); */ ?>

    <?php /* echo $form->field($model, 'shift_date')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => Yii::t('stone', 'Choose Shift Date'),
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
