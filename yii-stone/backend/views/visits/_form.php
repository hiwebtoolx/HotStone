<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Visits */
/* @var $form yii\widgets\ActiveForm */

$user_details = Yii::$app->urlManager->createUrl('/visits/user-details') ; 
$csrf = Yii::$app->request->getCsrfToken() ; 
$script = <<< JS
 $(document).ready(function() {
 $("#visits-user_id").on('change', function() {
 
 $.ajax({
       url: '$user_details',
       type: 'post',
       data: {
                 user: this.value , 
                 _csrf : '$csrf'
             },
         success: function (data) {
          $('#fullname').val(data.fullname);
          $('#email').val(data.email);
          $('#phone').val(data.phone);
       } 

  });  

return false ; 

});
 $("#visits-user_id").change() ; 
});
JS;
$this->registerJs($script);


?>

<div class="visits-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>
    <?= $form->field($model, 'branch_id')->hiddenInput(['value'=> Yii::$app->user->identity->profile->branch_id])->label(false); ?>


    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
                'options' => ['placeholder' => Yii::t('stone', 'Choose Client')],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'visit_date')->widget(\kartik\datecontrol\DateControl::classname(), [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => Yii::t('stone', 'Visit Date'),
                        'autoclose' => true
                    ]
                ],
            ]); ?>
        </div>
    </div>

 <div class="row ">

<div class="form-group col-md-4">
<label class="control-label" for="visits-interests"><?=Yii::t('hstone', 'Fullname')?></label>

  <?= Html::textInput('fullname', '', ['disabled'=>true,'class'=>'form-control','id'=>'fullname']); ?>
<div class="help-block"></div>
</div>

<div class="form-group col-md-4">
<label class="control-label" for="visits-interests"><?=Yii::t('hstone', 'Email')?></label>

  <?= Html::textInput('email', '', ['disabled'=>true,'class'=>'form-control','id'=>'email']); ?>
<div class="help-block"></div>
</div>


<div class="form-group col-md-4">
<label class="control-label" for="visits-interests"><?=Yii::t('hstone', 'Phone')?></label>

  <?= Html::textInput('phone', '', ['disabled'=>true,'class'=>'form-control','id'=>'phone']); ?>
<div class="help-block"></div>
</div>

</div>
   
    <?= $form->field($model, 'interests')->textarea(['rows' => 6]) ?>
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
