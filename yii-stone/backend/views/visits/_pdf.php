<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Visits */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Visits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visits-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Visits').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
                'attribute' => 'user.username',
                'label' => Yii::t('stone', 'User')
            ],
        'visit_date',
        'treatment_given:ntext',
        'retail_product:ntext',
        'technician_name',
        'comments:ntext',
        'rated',
        'rate',
        'client_signature',
        'tech_signature',
        'date_signature',
        ['attribute' => 'lock', 'visible' => false],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <th><?=Yii::t('hstone' , 'Tech signature')?></th>
                <td><?= $model->tech_signature?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
