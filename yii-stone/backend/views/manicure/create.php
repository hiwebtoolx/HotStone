<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Manicure */

$this->title = Yii::t('stone', 'Create Manicure');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Manicures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manicure-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
