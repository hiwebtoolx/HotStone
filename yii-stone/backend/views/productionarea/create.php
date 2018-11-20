<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProductionArea */

$this->title = Yii::t('stone', 'Create Production Area');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Production Areas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="production-area-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
