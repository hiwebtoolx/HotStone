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
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Manicure Pedicure').' : '. Html::encode($this->title) ?></h2>
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
        'treatment_given',
        'product_suggested:ntext',
        'comments:ntext',
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

                <th><?=Yii::t('hstone' , 'Client signature')?></th>
                <td>

                    <?= str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>","", $model->client_signature);
                    ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
