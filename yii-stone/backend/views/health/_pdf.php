<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Health */

$this->title = \dektrium\user\models\Profile::find()->where(['user_id' => $model->user->id])->one()->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Healths').' : ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Health').' : '. Html::encode($this->title) ?></h2>
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
            'value' => function($model){
                return $model->heart_disease == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'chest_pain',
            'value' => function($model){
                return $model->chest_pain == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'high_blood_pressure',
            'value' => function($model){
                return $model->high_blood_pressure == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'varicose_veins',
            'value' => function($model){
                return $model->varicose_veins == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'allergies',
            'value' => function($model){
                return $model->allergies == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'bronchitis',
            'value' => function($model){
                return $model->bronchitis == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'asthma',
            'value' => function($model){
                return $model->asthma == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'dizziness',
            'value' => function($model){
                return $model->dizziness == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'headaches',
            'value' => function($model){
                return $model->headaches == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'chemotherapy',
            'value' => function($model){
                return $model->chemotherapy == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'diabetes',
            'value' => function($model){
                return $model->diabetes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'e_pilepsy',
            'value' => function($model){
                return $model->e_pilepsy == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'otherـdiseases',
            'value' => function($model){
                return $model->otherـdiseases == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],

        'otherـdiseases_desc:ntext',
        [
            'attribute' => 'allergic',
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
                <td><?= str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>","", $model->tech_signature);
                   ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
