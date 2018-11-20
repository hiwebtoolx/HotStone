<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FrontHouse */

$this->title = Yii::t('stone', 'Create Front House');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Front Houses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="front-house-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
