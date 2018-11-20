<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Health */

$this->title = Yii::t('stone', 'Create Health');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Healths'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
