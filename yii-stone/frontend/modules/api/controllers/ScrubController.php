<?php
/**
 * Created by PhpStorm.
 * User: tr
 * Date: 6/7/18
 * Time: 10:35 AM
 */
namespace frontend\modules\api\controllers;
use Yii;


class ScrubController extends \yii\rest\ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    public $modelClass = 'backend\models\api\ConsultBodyScrub';

}