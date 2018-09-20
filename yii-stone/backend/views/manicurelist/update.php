<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Manicurelist */

$this->title = Yii::t('stone', 'Update {modelClass}: ', [
    'modelClass' => 'Manicurelist',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Manicurelists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('stone', 'Update');
?>
<div class="manicurelist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
