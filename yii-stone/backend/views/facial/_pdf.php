<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\facial */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Facials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facial-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Facial').' '. Html::encode($this->title) ?></h2>
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
</div>
