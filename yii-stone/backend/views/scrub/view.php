<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\ConsultBodyScrub */

$this->title = \dektrium\user\models\Profile::find()->where(['user_id' => $model->user->id])->one()->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Consult Body Scrub'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consult-body-scrub-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Consult Body Scrub').' : '. Html::encode($this->title) ?></h2>

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
            'label' => Yii::t('stone', 'Client Name'),
            'value' => function($model){
                return \dektrium\user\models\Profile::find()->where(['user_id' => $model->user->id])->one()->name ;
            }
        ],
        [
            'attribute' => 'branch_id',
            'label' => Yii::t('stone', 'Branch'),
            'value' => function($model){
                return $model->branch->title_en;
            }
        ],
        'how_do_you_prefer_the_scrubbing',
        [
            'attribute' => 'are_you_pregnant',
            'value' => function($model){
                return $model->are_you_pregnant == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'are_you_recently_delivered',
            'value' => function($model){
                return $model->are_you_recently_delivered == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'did_you_have_a_surgery_operation_during_the_last_3_months',
            'value' => function($model){
                return $model->did_you_have_a_surgery_operation_during_the_last_3_months == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'when_was_your_last_laser_session',
        'when_last_time_you_remove_the_hair',
        [
            'attribute' => 'did_you_do_a_peeling',
            //'label' => Yii::t('hstone', 'Did you do a peeling for your body or your face?'),
            'value' => function($model){
                return $model->did_you_do_a_peeling == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'If_yes_when',
        'which_hammam_or_body_scrub_do_you_prefer',
        'client_review',
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
