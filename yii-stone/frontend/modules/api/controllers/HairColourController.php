<?php

namespace frontend\modules\api\controllers;
use backend\models\base\HairColour;
class HaircolourController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\base\HairColour';

    public function actionSearch($one='')
    {



        $id = \Yii::$app->request->post('id');

        $model = HairColour::find()
            ->joinWith('user')
            ->where(['facial_treatment.user_id' => $id])
            ->orderBy(['id' => SORT_DESC]) ;
            if ($one <> '' ) $model = $model->one(); else  $model = $model->all();
        if(count($model)){
            return $model;
            //return ['id' => $user->id , 'name' => $user->profile->name , 'email' => $user->email , 'phone' => $phone];
        }else{
            return ['success'=>0,'id' => 0   ];
        }
    }

    
}
