<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Entrancearea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Entranceareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrancearea-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Entrancearea').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'remove_stains_on_floors',
        'clean_the_fountains',
        'wipe_baseboards_of_the_door',
        'clean_the_wall_fixtures',
        'clean_the_sign',
        'check_sign_light',
        ['attribute' => 'lock', 'visible' => false],
        'shift_am',
        'shift_pm',
        'shift_date',
        [
                'attribute' => 'checkedBy.username',
                'label' => Yii::t('stone', 'Checked By')
            ],
        'notes:ntext',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
