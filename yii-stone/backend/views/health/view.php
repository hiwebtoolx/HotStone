<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Health */

$this->title = \dektrium\user\models\Profile::find()->where(['user_id' => $model->user->id])->one()->name ;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Healths'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Health').' : '. Html::encode($this->title) ?></h2>
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
            'attribute' => 'heart_disease',
            'label' => Yii::t('stone', 'heart disease'),
            'value' => function($model){
                return $model->heart_disease == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'chest_pain',
            'label' => Yii::t('stone', 'chest pain'),
            'value' => function($model){
                return $model->chest_pain == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'high_blood_pressure',
            'label' => Yii::t('stone', 'high blood pressure'),
            'value' => function($model){
                return $model->high_blood_pressure == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'varicose_veins',
            'label' => Yii::t('stone', 'varicose veins'),
            'value' => function($model){
                return $model->varicose_veins == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'allergies',
            'label' => Yii::t('stone', 'allergies'),
            'value' => function($model){
                return $model->allergies == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'bronchitis',
            'label' => Yii::t('stone', 'bronchitis'),
            'value' => function($model){
                return $model->bronchitis == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'asthma',
            'label' => Yii::t('stone', 'asthma'),
            'value' => function($model){
                return $model->asthma == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'dizziness',
            'label' => Yii::t('stone', 'dizziness'),
            'value' => function($model){
                return $model->dizziness == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'headaches',
            'label' => Yii::t('stone', 'headaches'),
            'value' => function($model){
                return $model->headaches == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'chemotherapy',
            'label' => Yii::t('stone', 'chemotherapy'),
            'value' => function($model){
                return $model->chemotherapy == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'diabetes',
            'label' => Yii::t('stone', 'diabetes'),
            'value' => function($model){
                return $model->diabetes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'e_pilepsy',
            'label' => Yii::t('stone', 'e pilepsy'),
            'value' => function($model){
                return $model->e_pilepsy == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'otherـdiseases',
            'label' => Yii::t('stone', 'other diseases'),
            'value' => function($model){
                return $model->otherـdiseases == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],

        'otherـdiseases_desc:ntext',
        [
            'attribute' => 'allergic',
            'label' => Yii::t('stone', 'allergic'),
            'value' => function($model){
                return $model->allergic == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'what_causes_you_allergies:ntext',

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
