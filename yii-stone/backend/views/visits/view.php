<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use backend\models\api\User; ;
/* @var $this yii\web\View */
/* @var $model backend\models\Visits */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Visits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

  $user = User::findOne(intval($model->user_id));
?>
<div class="visits-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Visits').' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
<?=             
             Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . Yii::t('stone', 'PDF'), 
                ['pdf', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'target' => '_blank',
                    'data-toggle' => 'tooltip',
                    'title' => Yii::t('stone', 'Will open the generated PDF file in a new window')
                ]
            )?>
            <?= Html::a(Yii::t('stone', 'Save As New'), ['save-as-new', 'id' => $model->id], ['class' => 'btn btn-info']) ?>            
            <?= Html::a(Yii::t('stone', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('stone', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('stone', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ])
            ?>
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
        'visit_date',
        
        [
            'attribute' => 'user_id',
            'label' => Yii::t('hstone', 'Fullname'),
            'value'=> @$user->profile->name
        ],
        [
            'attribute' => 'user_id',
            'label' => Yii::t('hstone', 'Email'),
            'value'=> @$user->email
        ],
        [
            'attribute' => 'user_id',
            'label' => Yii::t('hstone', 'Phone'),
            'value'=> @$user->profile->phone
        ],
        'interests:ntext' , 
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
            <th><?=Yii::t('hstone' , 'Tech signature')?></th>
            <td><?= $model->tech_signature?></td>
        </tr>
        </tbody>
    </table>
</div>
