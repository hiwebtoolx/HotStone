<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Manicure */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Manicure',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Manicures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="manicure-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
