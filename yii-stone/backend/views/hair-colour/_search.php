<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HairColourSearch */ 
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-hair-colour-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    
    <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => Yii::t('app', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'texture')->dropDownList([ 'Fine' => 'Fine', 'Average' => 'Average', 'Thick' => 'Thick', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'condition')->dropDownList([ 'Dry' => 'Dry', 'Normal' => 'Normal', 'Oily' => 'Oily', ], ['prompt' => '']) ?>

    <?php /* echo $form->field($model, 'natural_form')->dropDownList([ 'Straight' => 'Straight', 'Wavy' => 'Wavy', 'Curly' => 'Curly', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'natural_colour')->dropDownList([ 'Light' => 'Light', 'Tone' => 'Tone', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'amount_grey')->dropDownList([ 'Front' => 'Front', 'Back' => 'Back', 'Full' => 'Full', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'existing_treatment')->dropDownList([ 'Perm' => 'Perm', 'Keratin' => 'Keratin', 'Highlighted' => 'Highlighted', 'Bleach' => 'Bleach', 'Tint' => 'Tint', 'Rincage' => 'Rincage', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'scalpskin_condition')->dropDownList([ 'Normal' => 'Normal', 'Sensitive' => 'Sensitive', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'colouration_given')->dropDownList([ 'Roots' => 'Roots', 'Highlight' => 'Highlight', 'Lowlight' => 'Lowlight', 'Rincage' => 'Rincage', 'Ampoule' => 'Ampoule', 'Colour' => 'Colour', 'contouring' => 'Contouring', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'number_used')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'product_suggested')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'comments')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'rated')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'rate')->textInput(['placeholder' => 'Rate']) */ ?>

    <?php /* echo $form->field($model, 'interests')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'client_review')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'client_signature')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'tech_signature')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'date_signature')->textInput(['maxlength' => true, 'placeholder' => 'Date Signature']) */ ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
