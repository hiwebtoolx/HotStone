<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ScrubSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-consult-body-scrub-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'branch_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Branch::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose Branch')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'how_do_you_prefer_the_scrubbing')->dropDownList([ 'Soft' => 'Soft', 'Moderate' => 'Moderate', 'Firm' => 'Firm', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'are_you_pregnant')->checkbox() ?>

    <?php /* echo $form->field($model, 'are_you_recently_delivered')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'did_you_have_a_surgery_operation_during_the_last_3_months')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'when_was_your_last_laser_session')->textInput(['maxlength' => true, 'placeholder' => 'When Was Your Last Laser Session']) */ ?>

    <?php /* echo $form->field($model, 'when_last_time_you_remove_the_hair')->textInput(['maxlength' => true, 'placeholder' => 'When Last Time You Remove The Hair']) */ ?>

    <?php /* echo $form->field($model, 'did_you_do_a_peeling')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'If_yes_when')->textInput(['maxlength' => true, 'placeholder' => 'If Yes When']) */ ?>

    <?php /* echo $form->field($model, 'which_hammam_or_body_scrub_do_you_prefer')->textInput(['maxlength' => true, 'placeholder' => 'Which Hammam Or Body Scrub Do You Prefer']) */ ?>

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
