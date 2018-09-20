<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SpaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-spa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>



    <?php /* echo $form->field($model, 'hammam_bath')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_room')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'relaxation_room')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'lit_candles_and_aroma_burners')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_ventilation_ac_is_working')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_Aroma_system_is_working')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_hammam_steamer_is_working')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_smell_drain')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'receive_supplies_and_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'be_sure_that_all_equipment')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_on_equipment_when_necessary')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_water_temperature')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_linens_to_fresh')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_wipe_facial_chairs_and_mirrors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'set_massage_beds')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_cart_and_trolleys_are_clean')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sweep_and_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'prepare_hot_towels_and_robes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_temperature_humidity')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_there_are_no_busted_light_bulbs')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_supplies_and_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'face_towels')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cotton')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ear_cotton')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_band')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cleanser')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_up_remover')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'face_wach')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tonic')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_scrub')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'mask_different_skin_type')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_cream_or_oil')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ampoule')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'distilate_water')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_facial_unit_is_working')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'disposable_towels')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'handheld_mirrors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'spoon')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'mixing_bowl')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'towel_bowl')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'disposable_gloves')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'robes_towels')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'disposible_panty')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'disposible_bra')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'disposible_slippers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'candles')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'aroma')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'plastic_sheets')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_morrocan_lifa')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_robes_towels')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_disposible_panty')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_disposible_bra')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_disposible_slippers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_candles')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_aroma')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_plastic_sheets')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_treatment_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_robes_towels')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_disposible_panty')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_disposible_bra')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_disposible_slippers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_products_for_body_treatment')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_candles')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_aroma')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'body_plastic_sheets')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'moroccan_tea_herbal_tea')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'water_detox_water')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cake_snacks')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'do_necessary_cleaning_and_station_reset')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'empty_trash_bins_and_replace_fresh_liners')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ensure_quiet_interaction_with_the_customer_during_the_performanc')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ensure_that_supplies_tools_and_or_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'is_not_enough_supplies_and_products_request_for_stocks')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'all_tools_and_materials_to_be_used_in__are_available')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'stock_as_needed')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'perform_service_according_to_standard')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'use_products_according_to_standard_recipes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'remove_dirty_dishes_cups_and_glasses')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sterilize_tools_and_materials')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'write_on_logbook_to_hand_over_concerns_to_the_next_day_first')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'send_to_laundry_area_dirty_linens_used_towles')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'conduct_day_end_inventory_of_selected_items')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_off_all_lights_and_ac')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'keep_ventilation_open')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'be_sure_bowls_is_empty_and_clean')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'empty_trash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'notes')->textarea(['rows' => 6]) */ ?>

    <?php   echo $form->field($model, 'checked_by')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);   ?>

    <?php  echo $form->field($model, 'shift_am')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => Yii::t('stone', 'Choose Shift Am'),
                'autoclose' => true
            ]
        ]
    ]);  ?>

    <?php   echo $form->field($model, 'shift_pm')->widget(\kartik\datecontrol\DateControl::className(), [
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
    ]);  ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <?php /* echo $form->field($model, 'turn_on_dim_lights2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'read_spa_logbook_handover2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'facial_room2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'massage_room2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hammam_bath2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ayurveda_room2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'relaxation_room2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'lit_candles_and_aroma_burners2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_ventilation_ac_is_working2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_Aroma_system_is_working2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_hammam_steamer_is_working2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_smell_drain2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'receive_supplies_and_products2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'be_sure_that_all_equipment2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_on_equipment_when_necessary2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_water_temperature2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_linens_to_fresh2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_wipe_facial_chairs_and_mirrors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'set_massage_beds2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_cart_and_trolleys_are_clean2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sweep_and_mop_floors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'prepare_hot_towels_and_robes2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_temperature_humidity2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_there_are_no_busted_light_bulbs2')->checkbox() */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
