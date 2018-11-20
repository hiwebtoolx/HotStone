<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\rating\StarRating;

/* @var $this yii\web\View */
/* @var $model backend\models\facial */
/* @var $form yii\widgets\ActiveForm */

?>
<style type="text/css">
    .row {
    margin-right: 7px;
    margin-left: 7px;
}
</style>
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
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Your Hair')?>
    </h4>

    

    <div class="row">
        <div class="col-md-6">
       <?= $form->field($model, 'hair_style')->dropDownList([ 'Natural' => 'Natural', 'coloured' => 'Coloured', 'highlighted' => 'Highlighted', 'permed' => 'Permed', 'straightened' => 'Straightened', ], ['prompt' => '']) ?>
          </div>
        <div class="col-md-6">
       <?= $form->field($model, 'hair_diameter')->dropDownList([ 'Fine' => 'Fine', 'Normal' => 'Normal', 'Thick' => 'Thick', ], ['prompt' => '']) ?>
             </div>
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Your Habits')?>
    </h4>
        <div class="row">
        <div class="col-md-6">
       <?= $form->field($model, 'wash_hair')->dropDownList([ 'every day' => 'Every day', 'every two days' => 'Every two days', 'twice a week' => 'Twice a week', 'once a week' => 'Once a week', ], ['prompt' => '']) ?>
          </div>
        <div class="col-md-6">
           <?= $form->field($model, 'conditioning_product')->dropDownList([ 'always' => 'Always', 'Often' => 'Often', 'Sometimes' => 'Sometimes', 'Never' => 'Never', ], ['prompt' => '']) ?>
             </div>
    </div>
        <div class="row">
        <div class="col-md-6">
       <?= $form->field($model, 'heat_tool')->dropDownList([ 'every day' => 'Every day', 'sometimes' => 'Sometimes', 'Never' => 'Never', ], ['prompt' => '']) ?>
          </div>

      </div>
    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Your wishes')?>
    </h4>
        <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'major_wish')->dropDownList([ 'a soft touch' => 'A soft touch', 'more shine' => 'More shine', 'more resistance to breakage' => 'More resistance to breakage', 'a natural touch &glow, more volume' => 'A natural touch &glow, more volume', 'more density' => 'More density', 'a vibrant colour for longer' => 'A vibrant colour for longer', 'discipline frizz-free' => 'Discipline frizz-free', 'disciplined curls' => 'Disciplined curls', 'revitalization' => 'Revitalization', ], ['prompt' => '']) ?>
             </div>
        <div class="col-md-6">
      <?= $form->field($model, 'other_desire')->dropDownList([ 'a soft touch' => 'A soft touch', 'more shine' => 'More shine', 'more resistance to breakage' => 'More resistance to breakage', 'a natural touch &glow' => 'A natural touch &glow', 'more volume' => 'More volume', 'more density' => 'More density', 'a vibrant colour for longer' => 'A vibrant colour for longer', 'discipline frizz-free' => 'Discipline frizz-free', 'disciplined curls' => 'Disciplined curls', 'revitalization' => 'Revitalization', ], ['prompt' => '']) ?>
    </div>


        <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'prefer_style_hair')->dropDownList([ 'Extra volume' => 'Extra volume', 'smooth blow-dry' => 'Smooth blow-dry', 'better-defined curls' => 'Better-defined curls', 'No specific preference' => 'No specific preference', ], ['prompt' => '']) ?>
          </div>
 
    </div>

    <h4 style="background-color:#3c8dbc; color: #fff; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
        <?=Yii::t('stone' , 'Touch and Observe')?>
</h4>

        <div class="row">
        <div class="col-md-6">
       <?= $form->field($model, 'mobility_scalp')->dropDownList([ 'Good' => 'Good', 'Average' => 'Average', 'Tensed' => 'Tensed', ], ['prompt' => '']) ?>

          </div>
        <div class="col-md-6">
           <?= $form->field($model, 'condition_scalp')->dropDownList([ 'no problem' => 'No problem', 'excess sebum' => 'Excess sebum', 'dandruff' => 'Dandruff', 'lack of density' => 'Lack of density', 'sensitiveness/ redness/ itchiness' => 'Sensitiveness/ redness/ itchiness', 'hair loss' => 'Hair loss', ], ['prompt' => '']) ?>
             </div>
    </div>


        <div class="row">
        <div class="col-md-6">
   <?= $form->field($model, 'ends_roots')->dropDownList([ 'Shiny' => 'Shiny', 'Dull' => 'Dull', ], ['prompt' => '']) ?>
          </div>
        <div class="col-md-6">
         <?= $form->field($model, 'resistance_hair')->dropDownList([ 'has good elasticity' => 'Has good elasticity', 'stretches but does not bounce back' => 'Stretches but does not bounce back', ], ['prompt' => '']) ?>
             </div>
    </div>


        <div class="row">
        <div class="col-md-6">
    <?= $form->field($model, 'dryness_hair')->dropDownList([ 'normal' => 'Normal', 'dry' => 'Dry', 'severely dried-out' => 'Severely dried-out', ], ['prompt' => '']) ?>
          </div>
        <div class="col-md-6">
       <?= $form->field($model, 'manageability_hair')->dropDownList([ 'easy to detangle' => 'Easy to detangle', 'slightly unruly' => 'Slightly unruly', 'frizz-prone' => 'Frizz-prone', 'curly and unmanageable' => 'Curly and unmanageable', ], ['prompt' => '']) ?>
             </div>
    </div>



        <div class="row">
        <div class="col-md-6">
       <?= $form->field($model, 'suggested_treatment')->dropDownList([ 'Kerastase treatment' => 'Kerastase treatment', 'Hotstone treatment' => 'Hotstone treatment', 'Combined' => 'Combined', 'Quick treatment' => 'Quick treatment', ], ['prompt' => '']) ?>
          </div>
        <div class="col-md-6">
       <?= $form->field($model, 'many_sessions')->textInput(['maxlength' => true, 'placeholder' => 'Many Sessions']) ?>
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
        <?= Html::submitButton($model->isNewRecord ? Yii::t('stone', 'Create') : Yii::t('stone', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php endif; ?>
    <?php if(Yii::$app->controller->action->id != 'create'): ?>
        <?= Html::submitButton(Yii::t('stone', 'Save As New'), ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
    <?php endif; ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
