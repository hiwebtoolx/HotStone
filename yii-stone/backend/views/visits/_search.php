<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VisitsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-visits-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
    <?= $form->field($model, 'branch_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Branch::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose Branch')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
    <?= $form->field($model, 'visit_date')->textInput(['placeholder' => 'Visit Date']) ?>

    <?php // = $form->field($model, 'treatment_given')->textarea(['rows' => 6]) ?>

    <?php //= $form->field($model, 'retail_product')->textarea(['rows' => 6]) ?>

    <?php /* echo $form->field($model, 'technician_name')->textInput(['maxlength' => true, 'placeholder' => 'Technician Name']) */ ?>

    <?php /* echo $form->field($model, 'comments')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'rated')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'rate')->textInput(['placeholder' => 'Rate']) */ ?>

    <?php /* echo $form->field($model, 'client_signature')->textInput(['maxlength' => true, 'placeholder' => 'Client Signature']) */ ?>

    <?php /* echo $form->field($model, 'tech_signature')->textInput(['maxlength' => true, 'placeholder' => 'Tech Signature']) */ ?>

    <?php /* echo $form->field($model, 'date_signature')->textInput(['maxlength' => true, 'placeholder' => 'Date Signature']) */ ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
