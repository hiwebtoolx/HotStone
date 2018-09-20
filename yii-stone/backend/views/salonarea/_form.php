<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Salonarea */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="salonarea-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'hair_sweep_and_mop_floors')->checkbox() ?>

    <?= $form->field($model, 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha')->checkbox() ?>

    <?= $form->field($model, 'hair_remove_stains_and_dust_on_surfaces')->checkbox() ?>

    <?= $form->field($model, 'hair_clean_mirrors')->checkbox() ?>

    <?= $form->field($model, 'hair_clean_cart_and_trolleys')->checkbox() ?>

    <?= $form->field($model, 'hair_clean_drawers_and_cabinets')->checkbox() ?>

    <?= $form->field($model, 'hair_empty_trash')->checkbox() ?>

    <?= $form->field($model, 'hair_detect_and_change_busted_light')->checkbox() ?>

    <?= $form->field($model, 'shampoo_sweep_and_mop_floors')->checkbox() ?>

    <?= $form->field($model, 'shampoo_clean_under_chairs_from_hair_and_put_leader')->checkbox() ?>

    <?= $form->field($model, 'shampoo_clean_sinks_from_hair_and_product_residue')->checkbox() ?>

    <?= $form->field($model, 'shampoo_clean_shampoo_bowls')->checkbox() ?>

    <?= $form->field($model, 'shampoo_empty_trash')->checkbox() ?>

    <?= $form->field($model, 'shampoo_remove_stains_and_dust_on_surfaces')->checkbox() ?>

    <?= $form->field($model, 'shampoo_clean_mirrors')->checkbox() ?>

    <?= $form->field($model, 'shampoo_clean_the_product_containers')->checkbox() ?>

    <?= $form->field($model, 'shampoo_empty_towel_basket')->checkbox() ?>

    <?= $form->field($model, 'shampoo_detect_and_change_busted_light')->checkbox() ?>

    <?= $form->field($model, 'treatment_sweep_and_mop_floors')->checkbox() ?>

    <?= $form->field($model, 'treatment_clean_under_chairs_from_hair_and_put_leader')->checkbox() ?>

    <?= $form->field($model, 'treatment_clean_sinks_from_hair_and_product_residue')->checkbox() ?>

    <?= $form->field($model, 'treatment_empty_trash')->checkbox() ?>

    <?= $form->field($model, 'treatment_remove_stains_and_dust_on_surfaces')->checkbox() ?>

    <?= $form->field($model, 'treatment_draw_up_the_decoration')->checkbox() ?>

    <?= $form->field($model, 'treatment_clean_mixed_bowls')->checkbox() ?>

    <?= $form->field($model, 'treatment_clean_mirrors')->checkbox() ?>

    <?= $form->field($model, 'treatment_clean_the_product_containers')->checkbox() ?>

    <?= $form->field($model, 'treatment_empty_used_towel_bascket')->checkbox() ?>

    <?= $form->field($model, 'treatment_clean_the_product_containers2')->checkbox() ?>

    <?= $form->field($model, 'treatment_detect_and_change_busted_light')->checkbox() ?>

    <?= $form->field($model, 'pedicure_the_curtains_should_be_clean')->checkbox() ?>

    <?= $form->field($model, 'pedicure_sweep_and_mop_floors')->checkbox() ?>

    <?= $form->field($model, 'pedicure_clean_under_chairs__and_put_leader')->checkbox() ?>

    <?= $form->field($model, 'pedicure_clean_and_sanitize_sink')->checkbox() ?>

    <?= $form->field($model, 'pedicure_empty_trash')->checkbox() ?>

    <?= $form->field($model, 'pedicure_remove_stains_and_dust_on_surfaces')->checkbox() ?>

    <?= $form->field($model, 'pedicure_remove_basket_cleaning_items_and_dirty_towels')->checkbox() ?>

    <?= $form->field($model, 'pedicure_remove_empty_glasses')->checkbox() ?>

    <?= $form->field($model, 'manicure_bar_draw_up_products')->checkbox() ?>

    <?= $form->field($model, 'manicure_bar_empty_trash')->checkbox() ?>

    <?= $form->field($model, 'manicure_bar_clean_all_surfaces_with_a_disinfectant')->checkbox() ?>

    <?= $form->field($model, 'manicure_bar_clean_and_organize_nail_polish_racks')->checkbox() ?>

    <?= $form->field($model, 'manicure_bar_empty_used_towel_bascket')->checkbox() ?>

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

    <?= $form->field($model, 'checked_by')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
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
