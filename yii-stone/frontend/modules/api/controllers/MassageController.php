<?php

namespace frontend\modules\api\controllers;
use \backend\models\api\Massage ;
class MassageController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\api\Massage';

    public function actionSearch($one='')
    {



        $id = \Yii::$app->request->post('id');

        $model = Massage::find()
            ->joinWith('user')
            ->where(['massage.user_id' => $id])
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
