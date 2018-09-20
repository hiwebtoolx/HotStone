<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Massage */

$this->title = \dektrium\user\models\Profile::find()->where(['user_id' => $model->user->id])->one()->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Massages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="massage-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Massage').' : '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'branch.title_en',
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
        'massage_do_you_prefer',
        'how_do_you_prefer_your_massage_pressure',

        [
            'attribute' => 'are_you_pregnant',
            'value' => function($model){
                return $model->are_you_pregnant == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
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
                    if($model->reted != 0){
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
