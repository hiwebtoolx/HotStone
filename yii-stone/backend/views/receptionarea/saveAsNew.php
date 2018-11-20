<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Receptionarea */

$this->title = Yii::t('stone', 'Save As New {modelClass}: ', [
    'modelClass' => 'Receptionarea',
]). ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Receptionareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Save As New');
?>
<div class="receptionarea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
