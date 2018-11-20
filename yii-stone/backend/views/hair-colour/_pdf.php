<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\HairColour */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hair Colour'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hair-colour-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Hair Colour').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
         [
            'attribute' => 'user.username',
            'label' => Yii::t('stone', 'User'),
        ],
        'texture',
        'condition',
        'natural_form',
        'natural_colour',
        'amount_grey',
        'existing_treatment',
        'scalpskin_condition',
        'colouration_given',
        'number_used:ntext',
        'product_suggested:ntext',
        'comments:ntext',
        ['attribute' => 'lock', 'visible' => false],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>

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
