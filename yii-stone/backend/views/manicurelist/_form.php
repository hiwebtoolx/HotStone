<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Manicurelist */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="manicurelist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'turn_on_lights')->checkbox() ?>

    <?= $form->field($model, 'read_salon_logbook_hand_over_and_plan_the_day')->checkbox() ?>

    <?= $form->field($model, 'clean_sanitize_and_organize_salon_station')->checkbox() ?>

    <?= $form->field($model, 'receive_supplies_and_products_for_the_station')->checkbox() ?>

    <?= $form->field($model, 'turn_on_equipment_when_necessary')->checkbox() ?>

    <?= $form->field($model, 'sterilize_nipper_cuticle_nail_pusher_in_autoclave')->checkbox() ?>

    <?= $form->field($model, 'make_sure_that_all_linens_to_be_used_at_that_station_are_fresh')->checkbox() ?>

    <?= $form->field($model, 'organize_newspapers_magazines_promotional_materials')->checkbox() ?>

    <?= $form->field($model, 'clean_and_wipe_pedicure_chairs_manicure_stations')->checkbox() ?>

    <?= $form->field($model, 'clean_and_organize_nail_polish_racks')->checkbox() ?>

    <?= $form->field($model, 'sweep_mop_floors')->checkbox() ?>

    <?= $form->field($model, 'make_sure_there_are_no_busted_light_bulbs')->checkbox() ?>

    <?= $form->field($model, 'keep_consultation_forms_inside_drawers')->checkbox() ?>

    <?= $form->field($model, 'prepare_consultations_forms_with_name_of_client_on_hard_doard')->checkbox() ?>

    <?= $form->field($model, 'file_consultation_forms_after_finish')->checkbox() ?>

    <?= $form->field($model, 'be_sure_services_try_and_bowls_are_clean_and_organized')->checkbox() ?>

    <?= $form->field($model, 'check_baskets_of_technicien_are_clean_and_organized')->checkbox() ?>

    <?= $form->field($model, 'clean_and_organize_drawers_as_training')->checkbox() ?>

    <?= $form->field($model, 'services_try_should_be_clean_and_organized_and_no_damaged')->checkbox() ?>

    <?= $form->field($model, 'check_cleaning_basket_for_each_station_clorox_fairy_detol_sponge')->checkbox() ?>

    <?= $form->field($model, 'wipe_pedicure_chair_with_conditionner')->checkbox() ?>

    <?= $form->field($model, 'disposible_towel')->checkbox() ?>

    <?= $form->field($model, 'tissue_box')->checkbox() ?>

    <?= $form->field($model, 'nail_brush')->checkbox() ?>

    <?= $form->field($model, 'cotton')->checkbox() ?>

    <?= $form->field($model, 'acetone')->checkbox() ?>

    <?= $form->field($model, 'cuticul_remover')->checkbox() ?>

    <?= $form->field($model, 'nail_nipper')->checkbox() ?>

    <?= $form->field($model, 'nail_cuter')->checkbox() ?>

    <?= $form->field($model, 'nail_fail')->checkbox() ?>

    <?= $form->field($model, 'pusher')->checkbox() ?>

    <?= $form->field($model, 'hand_scrub')->checkbox() ?>

    <?= $form->field($model, 'hand_mask')->checkbox() ?>

    <?= $form->field($model, 'hand_feet_lotion')->checkbox() ?>

    <?= $form->field($model, 'plastic_nilon')->checkbox() ?>

    <?= $form->field($model, 'lemon')->checkbox() ?>

    <?= $form->field($model, 'herbal_salt')->checkbox() ?>

    <?= $form->field($model, 'hand_soak')->checkbox() ?>

    <?= $form->field($model, 'parafine')->checkbox() ?>

    <?= $form->field($model, 'nail_polish')->checkbox() ?>

    <?= $form->field($model, 'nail_vitamin')->checkbox() ?>

    <?= $form->field($model, 'towels_for_hand_and_for_feet')->checkbox() ?>

    <?= $form->field($model, 'disposible_slippers')->checkbox() ?>

    <?= $form->field($model, 'nail_divider')->checkbox() ?>

    <?= $form->field($model, 'hand_bowl')->checkbox() ?>

    <?= $form->field($model, 'do_necessary_cleaning_and_station_reset')->checkbox() ?>

    <?= $form->field($model, 'empty_trash_bins_and_replace_fresh_liners')->checkbox() ?>

    <?= $form->field($model, 'ensure_quiet_interaction_with_the_customer_during_the_performanc')->checkbox() ?>

    <?= $form->field($model, 'perform_service_according_to_standard')->checkbox() ?>

    <?= $form->field($model, 'use_products_according_to_standard_recipes')->checkbox() ?>

    <?= $form->field($model, 'remove_dirty_dishes_cups_and_glasses_take_to_coffee_shop_to_wash')->checkbox() ?>

    <?= $form->field($model, 'sterilize_tools_and_materials')->checkbox() ?>

    <?= $form->field($model, 'ensure_that_supplies_tools_and_products_are_organized')->checkbox() ?>

    <?= $form->field($model, 'if_there_is_not_enough_supplies_and_products')->checkbox() ?>

    <?= $form->field($model, 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa')->checkbox() ?>

    <?= $form->field($model, 'stock_as_needed')->checkbox() ?>

    <?= $form->field($model, 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first_shi')->checkbox() ?>

    <?= $form->field($model, 'send_to_laundry_area_dirty_linens')->checkbox() ?>

    <?= $form->field($model, 'conduct_day_end_inventory_of_selected_items')->checkbox() ?>

    <?= $form->field($model, 'turn_off_all_lights')->checkbox() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'checked_by')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

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
