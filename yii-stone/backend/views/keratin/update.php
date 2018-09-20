<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Keratin */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Keratin',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Keratins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="keratin-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
