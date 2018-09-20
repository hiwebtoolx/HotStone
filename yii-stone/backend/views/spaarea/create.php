<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Spaarea */

$this->title = Yii::t('stone', 'Create Spaarea');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Spaareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spaarea-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
