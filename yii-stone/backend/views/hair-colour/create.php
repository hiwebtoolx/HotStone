<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\HairColour */

$this->title = Yii::t('app', 'Create Hair Colour');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hair Colour'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hair-colour-create">
 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
