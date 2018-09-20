<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\HairMakeup */

$this->title = Yii::t('stone', 'Create Hair Makeup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Hair Makeups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hair-makeup-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
