<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Massage */

$this->title = Yii::t('stone', 'Create Massage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Massages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="massage-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
