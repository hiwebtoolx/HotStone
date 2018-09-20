<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CommonareaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-common-area-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

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

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <?php /* echo $form->field($model, 'hair_sweep_and_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_remove_stains_and_dust_on_surfaces')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_clean_mirrors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_clean_cart_and_trolleys')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_clean_drawers_and_cabinets')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_empty_trash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_detect_and_change_busted_light')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_sweep_and_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_under_chairs_from_hair_and_put_leader')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_sinks_from_hair_and_product_residue')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_shampoo_bowls')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_empty_trash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_remove_stains_and_dust_on_surfaces')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_mirrors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_the_product_containers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_empty_towel_basket')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_detect_and_change_busted_light')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_sweep_and_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_under_chairs_from_hair_and_put_leader')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_sinks_from_hair_and_product_residue')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_empty_trash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_remove_stains_and_dust_on_surfaces')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_draw_up_the_decoration')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_mixed_bowls')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_mirrors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_the_product_containers')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_empty_used_towel_bascket')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_the_product_containers2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_detect_and_change_busted_light')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_the_curtains_should_be_clean')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_sweep_and_mop_floors')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_clean_under_chairs__and_put_leader')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_clean_and_sanitize_sink')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_empty_trash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_remove_stains_and_dust_on_surfaces')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_remove_basket_cleaning_items_and_dirty_towels')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_remove_empty_glasses')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_draw_up_products')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_empty_trash')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_clean_all_surfaces_with_a_disinfectant')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_clean_and_organize_nail_polish_racks')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_empty_used_towel_bascket')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_sweep_and_mop_floors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'clean_under_chairs_from_hair_and_put_leader_conditionner_for2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_remove_stains_and_dust_on_surfaces2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_clean_mirrors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_clean_cart_and_trolleys2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_clean_drawers_and_cabinets2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_empty_trash2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'hair_detect_and_change_busted_light2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_sweep_and_mop_floors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_under_chairs_from_hair_and_put_leader2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_sinks_from_hair_and_product_residue2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_shampoo_bowls2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_empty_trash2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_remove_stains_and_dust_on_surfaces2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_mirrors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_clean_the_product_containers2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_empty_towel_basket2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'shampoo_detect_and_change_busted_light2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_sweep_and_mop_floors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_under_chairs_from_hair_and_put_leader2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_sinks_from_hair_and_product_residue2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_empty_trash2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_remove_stains_and_dust_on_surfaces2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_draw_up_the_decoration2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_mixed_bowls2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_mirrors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_the_product_container2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_empty_used_towel_bascket2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_clean_the_product_containers22')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'treatment_detect_and_change_busted_light2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_the_curtains_should_be_clean2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_sweep_and_mop_floors2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_clean_under_chairs__and_put_leader2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_clean_and_sanitize_sink2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_empty_trash2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_remove_stains_and_dust_on_surfaces2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_remove_basket_cleaning_items_and_dirty_towels2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pedicure_remove_empty_glasses2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_draw_up_products2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_empty_trash2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_clean_all_surfaces_with_a_disinfectant2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_clean_and_organize_nail_polish_racks2')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'manicure_bar_empty_used_towel_bascket2')->checkbox() */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
