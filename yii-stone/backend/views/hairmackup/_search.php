<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HairmakeupSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-hair-makeup-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>



    <?php /* echo $form->field($model, 'check_all_equipment')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_on_equipment')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_water_supply')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_drawers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_linens')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'organize_newspapers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_wipe_salon')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_wipe_shampoo_bowls')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_sanitize_make_up_brush')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cart_and_trolleys_are_clean')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sweep_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'combs_and_brushes_are_clean')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_scissors_are_sharp')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_there_are_no_busted_light_bulbs')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hot_cabinet_is_full_with_towel')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_on_lights2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_supplies_and_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'mixing_bowls')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'aprons')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'water_sprayers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'applicator_brushes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'paper_towels')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'handheld_mirrors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'rubber_gloves')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'plastic_gloves')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoos')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'conditioners')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_straightening_and_perming_kits')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'styling_gels')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'serums')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'mousse')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_colors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_spray')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_extensions')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_up_remover')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cotton')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tissu')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ear_cotton')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'moisturizing_cream')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'face_scrub')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'eclat_ampoule')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'the_eyelashes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'glow_for_eyelashes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tweezer')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'small_cisor')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'makeup_fixator')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'makeup_brush')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'foundation_Minimum_3_pigment')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'eye_shadow')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'blusher')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'mascara')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'eyeliner')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'eyebrow_color')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'customer_robe')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hand_sanitazer')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hand_wash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'high_lighter')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'contouring')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'concealer')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'do_necessary_cleaning_and_station_reset')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'empty_trash_bins_and_replace_fresh_liners')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ensure_quiet_interaction_with_the_customer')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'perform_service_according_to_standard')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'use_products_according_to_standard_recipes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'remove_dirty_dishes_cups')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sterilize_tools_and_materials')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'products_are_organized_in_their_respective_compartments')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'If_there_is_not_enough_supplies_and_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'stock_as_needed')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'write_on_logbook_to_hand_over_concerns')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'send_to_laundry_area_dirty_linens')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'conduct_day_end_inventory_of_selected_items')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_off_all_lights')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'notes')->textarea(['rows' => 6]) */ ?>

    <?php  echo $form->field($model, 'checked_by')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

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
    ]);   ?>

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
    ]);   ?>

    <?php   echo $form->field($model, 'shift_date')->widget(\kartik\datecontrol\DateControl::classname(), [
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

    <?php /* echo $form->field($model, 'read_salon_logbook_hand_over2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_sanitize2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'receive_supplies_and_products2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_all_equipment2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'turn_on_equipment2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_water_supply2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'check_drawers2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_linens2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'organize_newspapers2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_wipe_salon2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_wipe_shampoo_bowls2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_and_sanitize_make_up_brush2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'cart_and_trolleys_are_clean2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sweep_mop_floors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'combs_and_brushes_are_clean2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_that_all_scissors_are_sharp2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'make_sure_there_are_no_busted_light_bulbs2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hot_cabinet_is_full_with_towel2')->checkbox() */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
