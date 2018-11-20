<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FacialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-facial-search">

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

 

    <?php /* echo $form->field($model, 'varicose_veins')->textInput(['maxlength' => true, 'placeholder' => 'Varicose Veins']) */ ?>

    <?php /* echo $form->field($model, 'epilepsy')->textInput(['maxlength' => true, 'placeholder' => 'Epilepsy']) */ ?>

    <?php /* echo $form->field($model, 'respiratory')->textInput(['maxlength' => true, 'placeholder' => 'Respiratory']) */ ?>

    <?php /* echo $form->field($model, 'major_illness')->textInput(['maxlength' => true, 'placeholder' => 'Major Illness']) */ ?>

    <?php /* echo $form->field($model, 'major_surgery')->textInput(['maxlength' => true, 'placeholder' => 'Major Surgery']) */ ?>

    <?php /* echo $form->field($model, 'kidney')->textInput(['maxlength' => true, 'placeholder' => 'Kidney']) */ ?>

    <?php /* echo $form->field($model, 'cardiac')->textInput(['maxlength' => true, 'placeholder' => 'Cardiac']) */ ?>

    <?php /* echo $form->field($model, 'metal_pins')->textInput(['maxlength' => true, 'placeholder' => 'Metal Pins']) */ ?>

    <?php /* echo $form->field($model, 'diet_present')->textInput(['maxlength' => true, 'placeholder' => 'Diet Present']) */ ?>

    <?php /* echo $form->field($model, 'type')->textInput(['maxlength' => true, 'placeholder' => 'Type']) */ ?>

    <?php /* echo $form->field($model, 'color')->textInput(['maxlength' => true, 'placeholder' => 'Color']) */ ?>

    <?php /* echo $form->field($model, 'texture')->textInput(['maxlength' => true, 'placeholder' => 'Texture']) */ ?>

    <?php /* echo $form->field($model, 'circulation')->textInput(['maxlength' => true, 'placeholder' => 'Circulation']) */ ?>

    <?php /* echo $form->field($model, 'muscle_tone')->textInput(['maxlength' => true, 'placeholder' => 'Muscle Tone']) */ ?>

    <?php /* echo $form->field($model, 'elasticity')->textInput(['maxlength' => true, 'placeholder' => 'Elasticity']) */ ?>

    <?php /* echo $form->field($model, 'imperfections_Irregularities')->textInput(['maxlength' => true, 'placeholder' => 'Imperfections Irregularities']) */ ?>

    <?php /* echo $form->field($model, 'wrinkles')->textInput(['maxlength' => true, 'placeholder' => 'Wrinkles']) */ ?>

    <?php /* echo $form->field($model, 'pores')->textInput(['maxlength' => true, 'placeholder' => 'Pores']) */ ?>

    <?php /* echo $form->field($model, 'discoloration')->textInput(['maxlength' => true, 'placeholder' => 'Discoloration']) */ ?>

    <?php /* echo $form->field($model, 'present_skincare_routine')->textInput(['maxlength' => true, 'placeholder' => 'Present Skincare Routine']) */ ?>

    <?php /* echo $form->field($model, 'hands')->textInput(['maxlength' => true, 'placeholder' => 'Hands']) */ ?>

    <?php /* echo $form->field($model, 'feet')->textInput(['maxlength' => true, 'placeholder' => 'Feet']) */ ?>

    <?php /* echo $form->field($model, 'miscellaneous')->textInput(['maxlength' => true, 'placeholder' => 'Miscellaneous']) */ ?>

    <?php /* echo $form->field($model, 'rated')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'rate')->textInput(['placeholder' => 'Rate']) */ ?>

    <?php /* echo $form->field($model, 'client_signature')->textInput(['maxlength' => true, 'placeholder' => 'Client Signature']) */ ?>

    <?php /* echo $form->field($model, 'tech_signature')->textInput(['maxlength' => true, 'placeholder' => 'Tech Signature']) */ ?>

    <?php /* echo $form->field($model, 'date_signature')->textInput(['maxlength' => true, 'placeholder' => 'Date Signature']) */ ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <?php /* echo $form->field($model, 'notes')->textarea(['rows' => 6]) */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
