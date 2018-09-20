<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('resturant', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('resturant', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \himiklab\sortablegrid\SortableGridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@home'). $data->getThumbFileUrl('image', 'thumb'),
                        ['width' => '70px']);
                },
            ],
            //'slug',
            //'content:ntext',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'deleted_at',
            //'deleted_by',
            //'created',
            //'modified',
            //'deleted',
            //'sort_order',
            //'lock',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
