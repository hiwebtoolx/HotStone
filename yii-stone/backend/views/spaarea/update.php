<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Spaarea */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Spaarea',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Spaareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="spaarea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
