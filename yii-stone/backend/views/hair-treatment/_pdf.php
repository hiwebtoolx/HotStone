<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\facial */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Facials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facial-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Facial').' '. Html::encode($this->title) ?></h2>
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
                      'hair_style',
        'hair_diameter',
        'wash_hair',
        'conditioning_product',
        'heat_tool',
        'major_wish',
        'other_desire',
        'prefer_style_hair',
        'mobility_scalp',
        'condition_scalp',
        'ends_roots',
        'resistance_hair',
        'dryness_hair',
        'manageability_hair',
        'suggested_treatment',
        'many_sessions'
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <th colspan="2"><?=Yii::t('hstone' , 'Client Rate')?></th>
                <td colspan="2"><?php
                    if($model->rate != 0){
                        echo  $model->rate;
                    }
                    ?></td>
            </tr>
            <tr>
                <th><?=Yii::t('hstone' , 'Tech signature')?></th>
                <td><?= $model->tech_signature?></td>
                <th><?=Yii::t('hstone' , 'Cleint signature')?></th>
                <td><?= $model->client_signature?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
