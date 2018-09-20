<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AcrylicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-acrylic-search">

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

    <?= $form->field($model, 'client_signature')->textInput(['maxlength' => true, 'placeholder' => 'Client Signature']) ?>

    <?= $form->field($model, 'tech_signature')->textInput(['maxlength' => true, 'placeholder' => 'Tech Signature']) ?>

    <?= $form->field($model, 'rated')->checkbox() ?>

    <?php /* echo $form->field($model, 'rate')->textInput(['placeholder' => 'Rate']) */ ?>

    <?php /* echo $form->field($model, 'daleted_at')->textInput(['placeholder' => 'Daleted At']) */ ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <?php /* echo $form->field($model, 'date_signature')->textInput(['maxlength' => true, 'placeholder' => 'Date Signature']) */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
