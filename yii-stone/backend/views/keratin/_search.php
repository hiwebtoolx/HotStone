<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KeratinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-keratin-search">

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

    <?= $form->field($model, 'are_you_pregnant')->checkbox() ?>

    <?= $form->field($model, 'when_was_your_last_delivery')->textInput(['maxlength' => true, 'placeholder' => 'When Was Your Last Delivery']) ?>

    <?= $form->field($model, 'did_you_color_your_hair')->checkbox() ?>

    <?php /* echo $form->field($model, 'color_when')->textInput(['maxlength' => true, 'placeholder' => 'Color When']) */ ?>

    <?php /* echo $form->field($model, 'did_you_make_highlight')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'highlight_when')->textInput(['maxlength' => true, 'placeholder' => 'Highlight When']) */ ?>

    <?php /* echo $form->field($model, 'did_you_put_henna')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'henna_when')->textInput(['maxlength' => true, 'placeholder' => 'Henna When']) */ ?>

    <?php /* echo $form->field($model, 'did_you_make_hair_straightening')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'straightening_when')->textInput(['maxlength' => true, 'placeholder' => 'Straightening When']) */ ?>

    <?php /* echo $form->field($model, 'did_you_make_removing_color')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'removing_color_when')->textInput(['maxlength' => true, 'placeholder' => 'Removing Color When']) */ ?>

    <?php /* echo $form->field($model, 'did_you_make_keratin_before')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'keratin_befor_when')->textInput(['maxlength' => true, 'placeholder' => 'Keratin Befor When']) */ ?>

    <?php /* echo $form->field($model, 'hair_specialist_name')->textInput(['maxlength' => true, 'placeholder' => 'Hair Specialist Name']) */ ?>

    <?php /* echo $form->field($model, 'product_name')->textInput(['maxlength' => true, 'placeholder' => 'Product Name']) */ ?>

    <?php /* echo $form->field($model, 'notes')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'rated')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'rate')->textInput(['placeholder' => 'Rate']) */ ?>

    <?php /* echo $form->field($model, 'client_signature')->textInput(['maxlength' => true, 'placeholder' => 'Client Signature']) */ ?>

    <?php /* echo $form->field($model, 'tech_signature')->textInput(['maxlength' => true, 'placeholder' => 'Tech Signature']) */ ?>

    <?php /* echo $form->field($model, 'date_signature')->textInput(['maxlength' => true, 'placeholder' => 'Date Signature']) */ ?>

    <?php /* echo $form->field($model, 'lock', ['template' => '{input}'])->textInput(['style' => 'display:none']); */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('stone', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('stone', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
