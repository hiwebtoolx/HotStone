<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\facial */

$this->title = \dektrium\user\models\Profile::find()->where(['user_id' => $model->user->id])->one()->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Facials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facial-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Facial').' '. Html::encode($this->title) ?></h2>
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
        'date_of_last_period',
        'allergies',
        'medication',
        'varicose_veins',
        'epilepsy',
        'respiratory',
        'major_illness',
        'major_surgery',
        'kidney',
        'cardiac',
        'metal_pins',
        'diet_present',
        'type',
        'color',
        'texture',
        'circulation',
        'muscle_tone',
        'elasticity',
        'imperfections_Irregularities',
        'wrinkles',
        'pores',
        'discoloration',
        'present_skincare_routine',
        'hands',
        'feet',
        'miscellaneous',

        ['attribute' => 'lock', 'visible' => false],
        'notes:ntext',
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
            <th><?=Yii::t('hstone' , 'Cleint signature')?></th>
            <td><?= $model->client_signature?></td>
        </tr>
        </tbody>
    </table>
</div>
