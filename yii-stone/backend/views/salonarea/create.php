<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Salonarea */

$this->title = Yii::t('stone', 'Create Salonarea');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Salonareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salonarea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
