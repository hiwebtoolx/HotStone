<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Branch */

$this->title = Yii::t('stone', 'Create Branch');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Branches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
