<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Receptionarea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Receptionareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receptionarea-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Receptionarea').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'sweep_and_mop_floors',
        'clean_the_chairs_used_by_staff',
        'clean_behind_desk',
        'clean_the_computer_keyboard_mouse_and_telephone',
        'dust_chair',
        'remove_stains_and_dust_on_surfaces',
        'notes:ntext',
        'shift_am',
        'shift_pm',
        'shift_date',
        ['attribute' => 'lock', 'visible' => false],
        [
                'attribute' => 'checkedBy.username',
                'label' => Yii::t('stone', 'Checked By')
            ],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
