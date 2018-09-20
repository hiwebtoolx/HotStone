<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MassageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-massage-search">

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
    <?php //= $form->field($model, 'massage_do_you_prefer')->textInput(['maxlength' => true, 'placeholder' => 'Massage Do You Prefer']) ?>

    <?php //= $form->field($model, 'how_do_you_prefer_your_massage_pressure')->dropDownList([ 'Soft' => 'Soft', 'Moderate' => 'Moderate', 'Firm' => 'Firm', '' => '', ], ['prompt' => '']) ?>

    <?php //= $form->field($model, 'are_you_pregnant')->checkbox() ?>

    <?php /* echo $form->field($model, 'client_signature')->textInput(['maxlength' => true, 'placeholder' => 'Client Signature']) */ ?>

    <?php /* echo $form->field($model, 'tech_signature')->textInput(['maxlength' => true, 'placeholder' => 'Tech Signature']) */ ?>

    <?php /* echo $form->field($model, 'date_signature')->textInput(['maxlength' => true, 'placeholder' => 'Date Signature']) */ ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <?php /* echo $form->field($model, 'reted')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'rate')->textInput(['placeholder' => 'Rate']) */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
