<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\ConsultBodyScrub */

?>
<div class="consult-body-scrub-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->id) ?></h2>
        </div>
    </div>

    <div class="row">


        <svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny" height="1888" width="1440"><g stroke-linejoin="round" stroke-linecap="round" fill="none" stroke="black"><path stroke-width="22" d="M147,1223c0,0 0,0 0,0 "/><path stroke-width="25" d="M147,1223c0,0 0,0 0,0 "/><path stroke-width="18" d="M147,1223c19,-245 19,-245 37,-490 "/><path stroke-width="11" d="M184,733c6,-78 4,-79 11,-157 7,-71 7,-72 15,-143 1,-7 2,-7 4,-14 "/><path stroke-width="15" d="M214,419c1,-3 0,-4 2,-5 "/><path stroke-width="19" d="M216,414c1,-1 3,-1 3,0 "/><path stroke-width="16" d="M219,414c6,13 6,15 10,29 "/><path stroke-width="11" d="M229,443c7,27 6,27 12,53 7,35 6,35 13,69 6,33 5,33 12,66 5,23 4,23 11,45 6,20 6,20 14,40 7,15 7,15 15,29 5,10 5,10 12,18 "/><path stroke-width="12" d="M318,763c5,5 5,6 11,8 "/><path stroke-width="14" d="M329,771c5,1 7,1 10,-2 "/><path stroke-width="13" d="M339,769c7,-8 7,-10 11,-20 "/><path stroke-width="11" d="M350,749c7,-21 7,-21 11,-42 8,-35 8,-35 12,-69 5,-38 4,-38 7,-75 1,-26 1,-26 2,-51 1,-20 0,-20 0,-40 0,-14 0,-14 0,-29 0,-9 0,-9 0,-19 "/><path stroke-width="14" d="M382,424c0,-4 0,-4 0,-8 "/><path stroke-width="19" d="M382,416c0,-1 0,-3 0,-2 "/><path stroke-width="17" d="M382,414c1,4 1,6 2,12 "/><path stroke-width="12" d="M384,426c5,26 6,26 11,52 "/><path stroke-width="11" d="M395,478c10,53 9,53 19,106 10,55 8,55 20,110 10,44 8,45 22,87 12,34 13,34 30,65 14,27 14,28 33,51 19,22 19,23 44,38 26,17 27,21 57,26 42,6 46,6 88,-4 56,-15 58,-18 109,-47 44,-25 44,-27 82,-62 45,-42 42,-45 83,-91 20,-23 22,-22 38,-47 10,-14 9,-15 14,-31 4,-14 4,-15 4,-29 0,-12 0,-13 -6,-23 -6,-10 -7,-15 -18,-17 -28,-6 -31,-7 -60,-1 -72,17 -73,18 -142,48 -88,39 -89,39 -170,90 -74,45 -73,47 -140,102 -44,37 -44,39 -83,81 -34,37 -35,37 -63,78 -23,33 -24,34 -38,71 -10,25 -11,26 -11,52 0,22 2,23 11,43 8,19 6,24 23,36 19,14 24,18 48,15 52,-7 56,-11 105,-35 58,-29 60,-30 109,-71 49,-41 45,-46 87,-95 39,-46 37,-48 74,-95 37,-46 37,-46 73,-92 16,-20 17,-19 30,-40 8,-14 8,-14 12,-29 "/><path stroke-width="12" d="M879,768c2,-7 4,-14 -2,-16 -20,-6 -27,-7 -52,-1 "/><path stroke-width="11" d="M825,751c-75,17 -75,22 -149,47 -85,30 -84,32 -168,62 -55,20 -55,22 -111,39 -24,7 -25,8 -49,9 -11,0 -13,0 -22,-6 -7,-4 -12,-7 -10,-14 8,-23 12,-26 31,-47 51,-57 50,-60 109,-109 63,-53 66,-50 135,-97 64,-43 66,-40 131,-84 42,-29 41,-30 82,-60 25,-18 25,-18 49,-36 12,-9 11,-9 23,-18 "/><path stroke-width="12" d="M876,437c5,-3 6,-5 10,-5 "/><path stroke-width="16" d="M886,432c1,-1 0,2 -1,4 "/><path stroke-width="15" d="M885,436c-13,16 -13,16 -27,33 "/><path stroke-width="11" d="M858,469c-38,44 -39,43 -76,88 -43,53 -47,51 -84,108 -27,43 -27,44 -45,91 -15,39 -20,41 -21,81 -1,37 0,40 15,75 21,50 20,55 57,94 65,69 74,61 148,122 2,2 2,2 5,4 "/><path stroke-width="11" d="M858,469c-38,44 -39,43 -76,88 -43,53 -47,51 -84,108 -27,43 -27,44 -45,91 -15,39 -20,41 -21,81 -1,37 0,40 15,75 21,50 20,55 57,94 65,69 74,61 148,122 2,2 2,2 5,4 "/><path stroke-width="11" d="M858,469c-38,44 -39,43 -76,88 -43,53 -47,51 -84,108 -27,43 -27,44 -45,91 -15,39 -20,41 -21,81 -1,37 0,40 15,75 21,50 20,55 57,94 65,69 74,61 148,122 2,2 2,2 5,4 "/></g></svg>
<?php
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'branch.id',
            'label' => Yii::t('stone', 'Branch'),
        ],
        [
            'attribute' => 'user.username',
            'label' => Yii::t('stone', 'User'),
        ],
        'how_do_you_prefer_the_scrubbing',
        'are_you_pregnant',
        'are_you_recently_delivered',
        'did_you_have_a_surgery_operation_during_the_last_3_months',
        'when_was_your_last_laser_session',
        'when_last_time_you_remove_the_hair',
        'did_you_do_a_peeling',
        'If_yes_when',
        'which_hammam_or_body_scrub_do_you_prefer',
        'rated',
        'rate',
        'client_signature:ntext',
        'tech_signature',
        'date_signature',
        ['attribute' => 'lock', 'visible' => false],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
</div>