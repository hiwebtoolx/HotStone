<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\widgets\SwitchInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Health */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="health-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>


    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>
    <?= $form->field($model, 'branch_id')->hiddenInput(['value'=> Yii::$app->user->identity->profile->branch_id])->label(false); ?>

    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
                'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'heart_disease')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);
            ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'chest_pain')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class=" col-lg-4">
            <?= $form->field($model, 'high_blood_pressure')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'varicose_veins')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'allergies')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'bronchitis')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'asthma')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'dizziness')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'headaches')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>

        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'chemotherapy')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'diabetes')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'e_pilepsy')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'otherـdiseases')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'otherـdiseases_desc')->textarea(['rows' => 6]) ?>
        </div>
    </div>







    <?= $form->field($model, 'allergic')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]); ?>


    <?= $form->field($model, 'what_causes_you_allergies')->textarea(['rows' => 6]) ?>

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
