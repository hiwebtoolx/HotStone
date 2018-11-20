<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\widgets\SwitchInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Scrub */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="scrub-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>
    <?= $form->field($model, 'branch_id')->hiddenInput(['value'=> Yii::$app->user->identity->profile->branch_id])->label(false); ?>

    <div class="row">
        <div class="col-sm-6">  
            <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('stone', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]); ?>
                
        </div>
         <div class="col-sm-6">  
             <?= $form->field($model, 'how_do_you_prefer_the_scrubbing')->dropDownList([ 'Soft' => 'Soft', 'Moderate' => 'Moderate', 'Firm' => 'Firm', '' => '', ], ['prompt' => '']) ?>
                
        </div>
    </div>

    

         <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'are_you_pregnant')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'are_you_recently_delivered')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'did_you_have_a_surgery_operation_during_the_last_3_months')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>

 
    <div class="row">
        <div class="col-sm-6">
        <?= $form->field($model, 'when_was_your_last_laser_session')->textInput(['maxlength' => true, 'placeholder' => 'When Was Your Last Laser Session']) ?>
    </div>
    <div class="col-sm-6">
        <?= $form->field($model, 'when_last_time_you_remove_the_hair')->textInput(['maxlength' => true, 'placeholder' => 'When Last Time You Remove The Hair']) ?>
        
   
        </div>
    </div>

     <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'did_you_do_a_peeling')->widget(SwitchInput::classname(), [
                'pluginOptions' => ['size' => 'medium', 'onText'=> Yii::t('stone' , 'Yes'), 'offText'=>Yii::t('stone', 'No')]
            ]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
                <?= $form->field($model, 'If_yes_when')->textInput(['maxlength' => true, 'placeholder' => 'If Yes When']) ?>
        </div>
    </div>    
    <div class="row">
        <div class="col-sm-6">
                <?= $form->field($model, 'which_hammam_or_body_scrub_do_you_prefer')->textInput(['maxlength' => true, 'placeholder' => '']) ?>
        </div>
    </div>  
    
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
