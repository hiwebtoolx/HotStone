<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HairMakeup */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Hair Makeup',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Hair Makeups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="hair-makeup-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
