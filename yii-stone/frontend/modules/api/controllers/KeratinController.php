<?php

namespace frontend\modules\api\controllers;
use \backend\models\base\Keratin ;
class KeratinController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\base\Keratin';


    public function actionSearch($one='')
    {



        $id = \Yii::$app->request->post('id');

        $model = Keratin::find()
            ->joinWith('user')
            ->where(['keratin_consultation.user_id' => $id])
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
