<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ManicurelistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-manicurelist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'turn_on_lights')->checkbox() ?>

    <?= $form->field($model, 'read_salon_logbook_hand_over_and_plan_the_day')->checkbox() ?>

    <?= $form->field($model, 'clean_sanitize_and_organize_salon_station')->checkbox() ?>

    <?= $form->field($model, 'receive_supplies_and_products_for_the_station')->checkbox() ?>

    <?php /* echo $form->field($model, 'turn_on_equipment_when_necessary')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sterilize_nipper_cuticle_nail_pusher_in_autoclave')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'organize_newspapers_magazines_promotional_materials')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_wipe_pedicure_chairs_manicure_stations')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_organize_nail_polish_racks')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sweep_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_there_are_no_busted_light_bulbs')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'keep_consultation_forms_inside_drawers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'prepare_consultations_forms_with_name_of_client_on_hard_doard')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'file_consultation_forms_after_finish')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'be_sure_services_try_and_bowls_are_clean_and_organized')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_baskets_of_technicien_are_clean_and_organized')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_organize_drawers_as_training')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'services_try_should_be_clean_and_organized_and_no_damaged')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'wipe_pedicure_chair_with_conditionner')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'disposible_towel')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tissue_box')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nail_brush')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cotton')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'acetone')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cuticul_remover')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nail_nipper')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nail_cuter')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nail_fail')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pusher')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hand_scrub')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hand_mask')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hand_feet_lotion')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'plastic_nilon')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'lemon')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'herbal_salt')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hand_soak')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'parafine')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nail_polish')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nail_vitamin')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'towels_for_hand_and_for_feet')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'disposible_slippers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nail_divider')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hand_bowl')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'do_necessary_cleaning_and_station_reset')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'empty_trash_bins_and_replace_fresh_liners')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ensure_quiet_interaction_with_the_customer_during_the_performanc')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'perform_service_according_to_standard')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'use_products_according_to_standard_recipes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sterilize_tools_and_materials')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ensure_that_supplies_tools_and_products_are_organized')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'if_there_is_not_enough_supplies_and_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'stock_as_needed')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'send_to_laundry_area_dirty_linens')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'conduct_day_end_inventory_of_selected_items')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_off_all_lights')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'notes')->textarea(['rows' => 6]) */ ?>

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
