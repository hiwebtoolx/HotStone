<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Acrylic */

$this->title = Yii::t('stone', 'Create Acrylic');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Acrylics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acrylic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
