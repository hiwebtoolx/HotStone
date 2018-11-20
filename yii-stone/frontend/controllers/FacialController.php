<?php

namespace frontend\controllers;
use yii\rest\ActiveController;
use backend\models\FacialTreatment;
class facialController extends ActiveController
{
    public $modelClass = 'backend\models\FacialTreatment';

//    public function actions(){
//        $actions = parent::actions();
        //unset($actions['index']
        //    ,$actions['create']
        //);
//        return $actions;
//    }
//    public function actionCreate()
//    {
//        $model = new ConsultBodyScrub();
//
//
//
//        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
//            return 'success';
//        }else{
//            return $model->getErrors();
//        }
//    }

}
