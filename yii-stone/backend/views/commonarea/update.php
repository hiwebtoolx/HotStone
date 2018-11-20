<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CommonArea */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Common Area',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Common Area'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="common-area-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
