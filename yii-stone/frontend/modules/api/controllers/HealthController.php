<?php

namespace frontend\modules\api\controllers;

use backend\models\api\Health;
use backend\models\api\User;

class HealthController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\api\Health';

    public function actionSearch()
    {



        $id = \Yii::$app->request->post('id');

        $health = Health::find()
            ->joinWith('user')
            ->where(['health.user_id' => $id])
            ->orderBy(['id' => SORT_DESC])
            ->one();
        if(count($health)){
            return $health;
            //return ['id' => $user->id , 'name' => $user->profile->name , 'email' => $user->email , 'phone' => $phone];
        }else{
            return ['id' => 0 , 'name' => "" , 'email' => '' , 'phone' => '' ];
        }
    }


}
