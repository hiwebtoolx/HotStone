<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Keratin */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="keratin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>
    <?= $form->field($model, 'branch_id')->hiddenInput(['value'=> Yii::$app->user->identity->profile->branch_id])->label(false); ?>


    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
                'options' => ['placeholder' => Yii::t('stone', 'Choose Client')],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'are_you_pregnant')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'when_was_your_last_delivery')->textInput(['maxlength' => true, 'placeholder' => 'When Was Your Last Delivery']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'did_you_color_your_hair')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'color_when')->textInput(['maxlength' => true, 'placeholder' => 'Color When']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'did_you_make_highlight')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'highlight_when')->textInput(['maxlength' => true, 'placeholder' => 'Highlight When']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'did_you_put_henna')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'henna_when')->textInput(['maxlength' => true, 'placeholder' => 'When']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'did_you_make_hair_straightening')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'straightening_when')->textInput(['maxlength' => true, 'placeholder' => 'When']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'did_you_make_removing_color')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'removing_color_when')->textInput(['maxlength' => true, 'placeholder' => 'Removing Color When']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'did_you_make_keratin_before')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'keratin_befor_when')->textInput(['maxlength' => true, 'placeholder' => 'Keratin Befor When']) ?>
        </div>
    </div>


    <?= $form->field($model, 'hair_specialist_name')->textInput(['maxlength' => true, 'placeholder' => 'Hair Specialist Name']) ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true, 'placeholder' => 'Product Name']) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('stone', 'Create') : Yii::t('stone', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
