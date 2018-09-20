<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\rating\StarRating;

/* @var $this yii\web\View */
/* @var $model backend\models\facial */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="facial-form">

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
            <?= $form->field($model, 'life_style')->dropDownList([ 'active' => 'Active', 'sedentary' => 'Sedentary', ], ['prompt' => '']) ?>        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'exercise')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'pregnancies')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'age')->textInput(['maxlength' => true, 'placeholder' => 'Age']) ?>
        </div>
    </div>
    <!--
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'date_of_last_period')->textInput(['maxlength' => true, 'placeholder' => 'Date Of Last Period']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'allergies')->textInput(['maxlength' => true, 'placeholder' => 'Allergies']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'medication')->textInput(['maxlength' => true, 'placeholder' => 'Medication']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'varicose_veins')->textInput(['maxlength' => true, 'placeholder' => 'Varicose Veins']) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'epilepsy')->textInput(['maxlength' => true, 'placeholder' => 'Epilepsy']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'respiratory')->textInput(['maxlength' => true, 'placeholder' => 'Respiratory']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'major_illness')->textInput(['maxlength' => true, 'placeholder' => 'Major Illness']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'major_surgery')->textInput(['maxlength' => true, 'placeholder' => 'Major Surgery']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'kidney')->textInput(['maxlength' => true, 'placeholder' => 'Kidney']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'cardiac')->textInput(['maxlength' => true, 'placeholder' => 'Cardiac']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'metal_pins')->textInput(['maxlength' => true, 'placeholder' => 'Metal Pins']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'diet_present')->textInput(['maxlength' => true, 'placeholder' => 'Diet Present']) ?>
        </div>
    </div>

-->
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Skin Analysis')?>
    </h4>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'type')->dropDownList([ 'combination' => 'Combination', 'oily' => 'Oily', 'dry' => 'Dry', ], ['prompt' => '']) ?>

        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'color')->dropDownList([ 'fair' => 'Fair', 'dark' => 'Dark', 'olive' => 'Olive', ], ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'texture')->dropDownList([ 'fine' => 'Fine', 'coarse' => 'Coarse', ], ['prompt' => '']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'circulation')->dropDownList([ 'good' => 'Good', 'average' => 'Average', 'poor' => 'Poor', ], ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'muscle_tone')->dropDownList([ 'good' => 'Good', 'average' => 'Average', 'poor' => 'Poor', ], ['prompt' => '']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'elasticity')->dropDownList([ 'good' => 'Good', 'average' => 'Average', 'poor' => 'Poor', ], ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'imperfections_Irregularities')->dropDownList([ 'scars' => 'Scars', 'naevi' => 'Naevi', 'Skin tags' => 'Skin tags', ], ['prompt' => '']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'wrinkles')->dropDownList([ 'deep' => 'Deep', 'superficial' => 'Superficial', ], ['prompt' => '']) ?>

        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'pores')->dropDownList([ 'medium' => 'Medium', 'small' => 'Small', 'enlarged' => 'Enlarged', ], ['prompt' => '']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'discoloration')->dropDownList([ 'around eyes' => 'Around eyes', 'anywhere in the face' => 'Anywhere in the face', ], ['prompt' => '']) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'present_skincare_routine')->textInput(['maxlength' => true, 'placeholder' => 'Present Skincare Routine']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'hands')->textInput(['maxlength' => true, 'placeholder' => 'Hands']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'feet')->textInput(['maxlength' => true, 'placeholder' => 'Feet']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'miscellaneous')->textInput(['maxlength' => true, 'placeholder' => 'Miscellaneous']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
             <?php // Usage with ActiveForm and model
             echo $form->field($model, 'rate')->widget(kartik\rating\StarRating::classname(), [
                 'pluginOptions' => ['size'=>'md','step' => 1]
             ]);?>
        </div>
        <div class="col-md-6">

        </div>
    </div>





    <?= $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

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
