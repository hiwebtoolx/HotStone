<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FrontHouse */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Front House',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Front Houses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="front-house-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
