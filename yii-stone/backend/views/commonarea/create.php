<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CommonArea */

$this->title = Yii::t('stone', 'SPA cleaning Checklist');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Common Area'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="common-area-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
