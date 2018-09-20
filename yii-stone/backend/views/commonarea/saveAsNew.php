<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CommonArea */

$this->title = Yii::t('stone', 'Save As New {modelClass}: ', [
    'modelClass' => 'Common Area',
]). ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Common Area'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Save As New');
?>
<div class="common-area-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
