<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HealthSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-health-search">

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

    <?= $form->field($model, 'heart_disease')->checkbox() ?>

    <?= $form->field($model, 'chest_pain')->checkbox() ?>

    <?= $form->field($model, 'high_blood_pressure')->checkbox() ?>

    <?php /* echo $form->field($model, 'varicose_veins')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'allergies')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'bronchitis')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'asthma')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'dizziness')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'headaches')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'chemotherapy')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'diabetes')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'e_pilepsy')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'otherـdiseases')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'otherـdiseases_desc')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'allergic')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'what_causes_you_allergies')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
