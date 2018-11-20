<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Productarea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Productareas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productarea-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Productarea').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'sweep_and_mop_floors',
        'remove_stains_and_dust_on_surfaces',
        'clean_and_sanitize_sink',
        'draw_up_the_decoration',
        'clean_the_product_containers',
        [
                'attribute' => 'checkedBy.username',
                'label' => Yii::t('stone', 'Checked By')
            ],
        'notes:ntext',
        'shift_am',
        'shift_pm',
        'shift_date',
        ['attribute' => 'lock', 'visible' => false],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
