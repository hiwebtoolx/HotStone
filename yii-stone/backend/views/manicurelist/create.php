<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Manicurelist */

$this->title = Yii::t('stone', 'Create Manicurelist');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Manicurelists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manicurelist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
