<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\ManicurePedicure */

$this->title = \dektrium\user\models\Profile::find()->where(['user_id' => $model->user->id])->one()->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Manicure Pedicure'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manicure-pedicure-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Manicure Pedicure').' : '. Html::encode($this->title) ?></h2>
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
        [
            'attribute' => 'branch.title_en',
            'label' => Yii::t('stone', 'Branch')
        ],
        [
            'attribute' => 'diabetes',
            'value' => function($model){
                return $model->diabetes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'cuts',
            'value' => function($model){
                return $model->cuts == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'eczema',
            'value' => function($model){
                return $model->eczema == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'psoriasis',
            'value' => function($model){
                return $model->psoriasis == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'viens_problems',
            'value' => function($model){
                return $model->viens_problems == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'arthritis',
            'value' => function($model){
                return $model->arthritis == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'medical_oedema',
            'value' => function($model){
                return $model->medical_oedema == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'recent_fectures',
            'value' => function($model){
                return $model->recent_fectures == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'others:ntext',
        'cuticle_condition',
        'blood_circulation',

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
                if($model->rated != 0){
                    echo  \kartik\rating\StarRating::widget([
                        'name' => 'rate',
                        'value' => $model->rate,
                        'pluginOptions' => [
                            'filledStar' => '<i class="glyphicon glyphicon-heart"></i>',
                            'emptyStar' => '<i class="glyphicon glyphicon-heart-empty"></i>',
                            'size' => 'xs',
                            'readonly' => true,
                            'showClear' => false,
                            'showCaption' => false,
                        ],
                    ]);
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
