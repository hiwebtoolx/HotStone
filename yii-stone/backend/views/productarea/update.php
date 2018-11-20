<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Productarea */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Productarea',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Productareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="productarea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
