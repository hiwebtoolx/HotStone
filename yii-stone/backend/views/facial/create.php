<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\facial */

$this->title = Yii::t('stone', 'Create Facial');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Facials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facial-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
