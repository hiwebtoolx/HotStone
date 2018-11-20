<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Spa */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Spa',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Spas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="spa-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
