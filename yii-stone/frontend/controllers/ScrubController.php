<?php

namespace frontend\controllers;
use yii\rest\ActiveController;
use backend\models\ConsultBodyScrub;
class ScrubController extends ActiveController
{
    public $modelClass = 'backend\models\Scrub';

    public function actions(){
        $actions = parent::actions();
        unset($actions['index'],$actions['create']);
        return $actions;
    }
    public function actionCreate()
    {
        $model = new ConsultBodyScrub();

        $model->created_by = 1;
        $model->updated_by = 1;
        $model->branch_id = 1;
        $model->user_id = 1;
        $model->how_do_you_prefer_the_scrubbing = "Moderate";
        $model->which_hammam_or_body_scrub_do_you_prefer = "test";
//        if ($model->save(\Yii::$app->request->post()) ) {
//            return 'test';
//        }else{
//            return $model->getErrors();
//        }

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            return 'success';
        }else{
            return $model->getErrors();
        }
    }

}
