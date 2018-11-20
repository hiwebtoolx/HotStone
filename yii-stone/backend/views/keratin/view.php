<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Keratin */

$this->title = \dektrium\user\models\Profile::find()->where(['user_id' => $model->user->id])->one()->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Keratins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keratin-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Keratin').' : '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
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
            'attribute' => 'are_you_pregnant',
            'value' => function($model){
                return $model->are_you_pregnant == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'when_was_your_last_delivery',
        [
            'attribute' => 'did_you_color_your_hair',
            'value' => function($model){
                return $model->did_you_color_your_hair == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'color_when',
        [
            'attribute' => 'did_you_make_highlight',
            'value' => function($model){
                return $model->did_you_make_highlight == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'highlight_when',
        [
            'attribute' => 'did_you_put_henna',
            'value' => function($model){
                return $model->did_you_put_henna == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'henna_when',

        [
            'attribute' => 'did_you_make_hair_straightening',
            'value' => function($model){
                return $model->did_you_make_hair_straightening == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'straightening_when',

        [
            'attribute' => 'did_you_make_removing_color',
            'value' => function($model){
                return $model->did_you_make_removing_color == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'removing_color_when',

        [
            'attribute' => 'did_you_make_keratin_before',
            'value' => function($model){
                return $model->did_you_make_keratin_before == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'keratin_befor_when',
        'hair_specialist_name',
        'product_name',
        'notes:ntext',
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
