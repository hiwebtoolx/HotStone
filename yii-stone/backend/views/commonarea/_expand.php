<?php
use yii\helpers\Html;
use kartik\tabs\TabsX;
use yii\helpers\Url;
$items = [
    [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'CommonArea')),
        'content' => $this->render('_detail', [
            'model' => $model,
        ]),
    ],
                    [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Backzone')),
        'content' => $this->render('_dataCommonAreaBackzone', [
            'model' => $model,
            'row' => $model->commonAreaBackzones,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Break')),
        'content' => $this->render('_dataCommonAreaBreak', [
            'model' => $model,
            'row' => $model->commonAreaBreaks,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Changing')),
        'content' => $this->render('_dataCommonAreaChanging', [
            'model' => $model,
            'row' => $model->commonAreaChangings,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Elevator')),
        'content' => $this->render('_dataCommonAreaElevator', [
            'model' => $model,
            'row' => $model->commonAreaElevators,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Hallways')),
        'content' => $this->render('_dataCommonAreaHallways', [
            'model' => $model,
            'row' => $model->commonAreaHallways,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Laundry')),
        'content' => $this->render('_dataCommonAreaLaundry', [
            'model' => $model,
            'row' => $model->commonAreaLaundries,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Prayer')),
        'content' => $this->render('_dataCommonAreaPrayer', [
            'model' => $model,
            'row' => $model->commonAreaPrayers,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Relaxation')),
        'content' => $this->render('_dataCommonAreaRelaxation', [
            'model' => $model,
            'row' => $model->commonAreaRelaxations,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Toilets')),
        'content' => $this->render('_dataCommonAreaToilets', [
            'model' => $model,
            'row' => $model->commonAreaToilets,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Waiting')),
        'content' => $this->render('_dataCommonAreaWaiting', [
            'model' => $model,
            'row' => $model->commonAreaWaitings,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Common Area Welcome')),
        'content' => $this->render('_dataCommonAreaWelcome', [
            'model' => $model,
            'row' => $model->commonAreaWelcomes,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Entrance Area')),
        'content' => $this->render('_dataEntranceArea', [
            'model' => $model,
            'row' => $model->entranceAreas,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Product Bar Area')),
        'content' => $this->render('_dataProductBarArea', [
            'model' => $model,
            'row' => $model->productBarAreas,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode(Yii::t('stone', 'Reception Area')),
        'content' => $this->render('_dataReceptionArea', [
            'model' => $model,
            'row' => $model->receptionAreas,
        ]),
    ],
    ];
echo TabsX::widget([
    'items' => $items,
    'position' => TabsX::POS_ABOVE,
    'encodeLabels' => false,
    'class' => 'tes',
    'pluginOptions' => [
        'bordered' => true,
        'sideways' => true,
        'enableCache' => false
    ],
]);
?>
