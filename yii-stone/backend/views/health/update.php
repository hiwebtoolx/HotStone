<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Health */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Health',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Healths'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="health-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
