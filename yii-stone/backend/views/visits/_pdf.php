<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use backend\models\api\User; ;
/* @var $this yii\web\View */
/* @var $model backend\models\Visits */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Visits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$user = User::findOne(intval($model->user_id))
?>
<div class="visits-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('stone', 'Visits').' '. Html::encode($this->title) ?></h2>
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
        'visit_date',
        
        [
            'attribute' => 'user_id',
            'label' => Yii::t('hstone', 'Fullname'),
            'value'=> @$user->profile->name
        ],
        [
            'attribute' => 'user_id',
            'label' => Yii::t('hstone', 'Email'),
            'value'=> @$user->email
        ],
        [
            'attribute' => 'user_id',
            'label' => Yii::t('hstone', 'Phone'),
            'value'=> @$user->profile->phone
        ],
        'interests:ntext' , 
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
                <th><?=Yii::t('hstone' , 'Tech signature')?></th>
                <td><?= $model->tech_signature?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
