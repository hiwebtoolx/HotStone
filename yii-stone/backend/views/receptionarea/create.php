<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Receptionarea */

$this->title = Yii::t('stone', 'Create Receptionarea');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Receptionareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receptionarea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
