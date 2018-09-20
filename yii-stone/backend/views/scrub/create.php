<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ConsultBodyScrub */

$this->title = Yii::t('stone', 'Create Consult Body Scrub');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Consult Body Scrub'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consult-body-scrub-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
