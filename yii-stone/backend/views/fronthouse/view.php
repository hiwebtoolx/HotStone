<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\FrontHouse */

$this->title = $model->shift_date .' - '. $model->shift_am.' to '.$model->shift_pm;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stone', 'Front Houses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="front-house-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= Yii::t('stone', 'Front House').' : '. Html::encode($this->title) ?></h2>
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
            'attribute' => 'turn_on_lights',
            'value' => function($model){
                return $model->turn_on_lights == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'turn_off_alarm',
            'value' => function($model){
                return $model->turn_off_alarm == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'read_foh_logbook',
            'value' => function($model){
                return $model->read_foh_logbook == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'organize_newspapers',
            'value' => function($model){
                return $model->organize_newspapers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'indoor_plants',
            'value' => function($model){
                return $model->indoor_plants == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'clean_and_wipe_chairs',
            'value' => function($model){
                return $model->clean_and_wipe_chairs == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],

        [
            'attribute' => 'sweep_mop_floors',
            'value' => function($model){
                return $model->sweep_mop_floors == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'no_busted_light_bulbs',
            'value' => function($model){
                return $model->no_busted_light_bulbs == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'turn_on_tv',
            'value' => function($model){
                return $model->turn_on_tv == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'turn_on_pos',
            'value' => function($model){
                return $model->turn_on_pos == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'receive_cashiers',
            'value' => function($model){
                return $model->receive_cashiers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],

        [
            'attribute' => 'scan_days_appointment',
            'value' => function($model){
                return $model->scan_days_appointment == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'print_therapists_schedule',
            'value' => function($model){
                return $model->print_therapists_schedule == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'brochures_are_available',
            'value' => function($model){
                return $model->brochures_are_available == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'print_customer_appointments',
            'value' => function($model){
                return $model->print_customer_appointments == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'prepare_food_canapes',
            'value' => function($model){
                return $model->prepare_food_canapes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'prepare_tea_bags',
            'value' => function($model){
                return $model->prepare_tea_bags == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'brew_coffee',
            'value' => function($model){
                return $model->brew_coffee == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'necessary_cleaning',
            'value' => function($model){
                return $model->necessary_cleaning == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'empty_trash_bins',
            'value' => function($model){
                return $model->empty_trash_bins == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'ensure_lively_interaction',
            'value' => function($model){
                return $model->ensure_lively_interaction == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'remove_dirty_dishes',
            'value' => function($model){
                return $model->remove_dirty_dishes == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'hand_over_of_pos',
            'value' => function($model){
                return $model->hand_over_of_pos == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'write_on_logbook',
            'value' => function($model){
                return $model->write_on_logbook == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'put_all_used_gift_certificates',
            'value' => function($model){
                return $model->put_all_used_gift_certificates == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'close_pos',
            'value' => function($model){
                return $model->close_pos == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'empty_trash_bins_and_sanitize',
            'value' => function($model){
                return $model->empty_trash_bins_and_sanitize == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'throw_out_dated_newspapers',
            'value' => function($model){
                return $model->throw_out_dated_newspapers == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'turn_off_all_lights',
            'value' => function($model){
                return $model->turn_off_all_lights == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'set_on_alarm_system',
            'value' => function($model){
                return $model->set_on_alarm_system == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        [
            'attribute' => 'lock_the_door',
            'value' => function($model){
                return $model->lock_the_door == 0 ? Yii::t('stone' , 'No') :Yii::t('stone' , 'Yes');
            }
        ],
        'lock_the_door',
        'notes:ntext',
        ['attribute' => 'lock', 'visible' => false],
        [
            'attribute' => 'checkedBy.username',
            'label' => Yii::t('stone', 'Checked By'),
        ],
        'shift_am',
        'shift_pm',
        'shift_date',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>



</div>
