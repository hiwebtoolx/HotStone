<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Keratin */

$this->title = Yii::t('stone', 'Create Keratin');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Keratins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keratin-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
