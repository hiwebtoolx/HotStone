<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\facial */

$this->title = Yii::t('stone', 'Create Hair Treatment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Hair Treatment'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facial-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
