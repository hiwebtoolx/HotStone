<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Entrancearea */

$this->title = Yii::t('stone', 'Create Entrancearea');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Entranceareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrancearea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
