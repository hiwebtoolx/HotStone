<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ManicurePedicure */

$this->title = Yii::t('stone', 'Create Manicure Pedicure');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Manicure Pedicure'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manicure-pedicure-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
