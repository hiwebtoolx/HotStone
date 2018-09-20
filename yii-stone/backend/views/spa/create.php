<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Spa */

$this->title = Yii::t('stone', 'Create Spa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Spas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spa-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
