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
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Consult Body Scrub').' : '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
                'attribute' => 'branch.id',
                'label' => Yii::t('stone', 'Branch')
            ],
        [
                'attribute' => 'user.username',
                'label' => Yii::t('stone', 'User')
            ],
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
                <th colspan="2"><?=Yii::t('hstone' , 'Client Rate')?></th>
                <td colspan="2"><?php
                    if($model->rated != 0){
                        echo  $model->rate;
                    }
                    ?></td>
            </tr>

            </tbody>
        </table>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <th><?=Yii::t('hstone' , 'Tech signature')?></th>
                <td><?= str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>","", $model->tech_signature);
                    ?></td>
            </tr>
            <tr>
                <th><?=Yii::t('hstone' , 'Client signature')?></th>
                <td>

                    <?= str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>","", $model->client_signature);
                    ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
