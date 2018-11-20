<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Productarea */

$this->title = Yii::t('stone', 'Create Productarea');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Productareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productarea-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
