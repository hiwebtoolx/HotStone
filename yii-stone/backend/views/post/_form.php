<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Category::find()->orderBy('id')->asArray()->all(), 'id', 'title'),
        'options' => ['placeholder' => 'Choose Category'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'image')->widget(\kartik\file\FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'showPreview' => false,
            'showCaption' => true,
            'showRemove' => true,
            'showUpload' => false
        ]
    ]);?>
    <?php
    if (empty($model->status)) {
        $model->status = true;
    }
    echo $form->field($model, 'status')->widget(SwitchInput::classname(), [
        'type' => SwitchInput::CHECKBOX,
        'value' =>  1,
        'pluginOptions' => [
            'onText' => Yii::t('resturant' , 'Active'),
            'offText' => Yii::t('resturant' , 'Inactive'),
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('resturant', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
