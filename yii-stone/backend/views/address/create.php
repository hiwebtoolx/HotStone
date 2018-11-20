<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Address */

$this->title = Yii::t('stone', 'Create Address');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
