<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Visits */

$this->title = Yii::t('stone', 'Create Visits');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Visits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visits-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
