<?php
/**
 * Created by PhpStorm.
 * User: tr
 * Date: 6/7/18
 * Time: 10:35 AM
 */
namespace frontend\modules\api\controllers;
use Yii;
use backend\models\api\ConsultBodyScrub ; 

class ScrubController extends \yii\rest\ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    public $modelClass = 'backend\models\api\ConsultBodyScrub';


    public function actionSearch($one='')
    {



        $id = \Yii::$app->request->post('id');

        $model = ConsultBodyScrub::find()
            ->joinWith('user')
            ->where(['consult_body_scrub.user_id' => $id])
            ->orderBy(['id' => SORT_DESC]);
            if ($one <> '' ) $model = $model->one(); else  $model = $model->all();
        if(count($model)){
            return $model;
            //return ['id' => $user->id , 'name' => $user->profile->name , 'email' => $user->email , 'phone' => $phone];
        }else{
            return ['success'=>0,'id' => 0   ];
        }
    }

}