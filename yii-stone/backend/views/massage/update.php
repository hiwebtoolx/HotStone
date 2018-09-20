<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Massage */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Massage',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Massages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="massage-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
