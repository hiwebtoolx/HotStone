<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\rating\StarRating;
/* @var $this yii\web\View */
/* @var $model backend\models\HairColour */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="hair-colour-form"> 

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
<h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
         Hair analysis     </h4>
        <div class="row">
        <div class="col-md-6">
       <?= $form->field($model, 'texture')->dropDownList([ 'Fine' => 'Fine', 'Average' => 'Average', 'Thick' => 'Thick', ], ['prompt' => '']) ?>
          </div>
        <div class="col-md-6">
       <?= $form->field($model, 'condition')->dropDownList([ 'Dry' => 'Dry', 'Normal' => 'Normal', 'Oily' => 'Oily', ], ['prompt' => '']) ?>
             </div>
    </div>

            <div class="row">
        <div class="col-md-6">
        <?= $form->field($model, 'natural_form')->dropDownList([ 'Straight' => 'Straight', 'Wavy' => 'Wavy', 'Curly' => 'Curly', ], ['prompt' => '']) ?>
          </div>
        <div class="col-md-6">
      

    <?= $form->field($model, 'natural_colour')->dropDownList([ 'Light' => 'Light', 'Tone' => 'Tone', ], ['prompt' => '']) ?>
             </div>
    </div>


            <div class="row">
        <div class="col-md-6">
    
    <?= $form->field($model, 'amount_grey')->dropDownList([ 'Front' => 'Front', 'Back' => 'Back', 'Full' => 'Full', ], ['prompt' => '']) ?>
          </div>
        <div class="col-md-6">
       <?= $form->field($model, 'existing_treatment')->dropDownList([ 'Perm' => 'Perm', 'Keratin' => 'Keratin', 'Highlighted' => 'Highlighted', 'Bleach' => 'Bleach', 'Tint' => 'Tint', 'Rincage' => 'Rincage', ], ['prompt' => '']) ?>
             </div>
    </div>


            <div class="row">
        <div class="col-md-6">
    
    <?= $form->field($model, 'scalpskin_condition')->dropDownList([ 'Normal' => 'Normal', 'Sensitive' => 'Sensitive', ], ['prompt' => '']) ?>
          </div>
        <div class="col-md-6">
          <?= $form->field($model, 'colouration_given')->dropDownList([ 'Roots' => 'Roots', 'Highlight' => 'Highlight', 'Lowlight' => 'Lowlight', 'Rincage' => 'Rincage', 'Ampoule' => 'Ampoule', 'Colour' => 'Colour', 'contouring' => 'Contouring', ], ['prompt' => '']) ?>
             </div>
    </div>


            <div class="row">
        <div class="col-md-6">
    
    <?= $form->field($model, 'number_used')->textInput(['maxlength' => true]); ?>
          </div>
        <div class="col-md-6">
      
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
 
 

   




   



   <?= $form->field($model, 'product_suggested')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>


 

 

    <?= $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <div class="form-group">
    <?php if(Yii::$app->controller->action->id != 'save-as-new'): ?>
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php endif; ?>
    <?php if(Yii::$app->controller->action->id != 'create'): ?>
        <?= Html::submitButton(Yii::t('app', 'Save As New'), ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
    <?php endif; ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
