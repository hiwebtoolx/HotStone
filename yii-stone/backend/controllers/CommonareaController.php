<?php

namespace backend\controllers;

use Yii;
use backend\models\CommonArea;
use backend\models\CommonareaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CommonareaController implements the CRUD actions for CommonArea model.
 */
class CommonareaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'pdf', 'save-as-new', 'add-common-area-backzone', 'add-common-area-break', 'add-common-area-changing', 'add-common-area-elevator', 'add-common-area-hallways', 'add-common-area-laundry', 'add-common-area-prayer', 'add-common-area-relaxation', 'add-common-area-toilets', 'add-common-area-waiting', 'add-common-area-welcome', 'add-entrance-area', 'add-product-bar-area', 'add-reception-area'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => false
                    ]
                ]
            ]
        ];
    }

    /**
     * Lists all CommonArea models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CommonareaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CommonArea model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $providerCommonAreaBackzone = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaBackzones,
        ]);
        $providerCommonAreaBreak = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaBreaks,
        ]);
        $providerCommonAreaChanging = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaChangings,
        ]);
        $providerCommonAreaElevator = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaElevators,
        ]);
        $providerCommonAreaHallways = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaHallways,
        ]);
        $providerCommonAreaLaundry = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaLaundries,
        ]);
        $providerCommonAreaPrayer = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaPrayers,
        ]);
        $providerCommonAreaRelaxation = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaRelaxations,
        ]);
        $providerCommonAreaToilets = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaToilets,
        ]);
        $providerCommonAreaWaiting = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaWaitings,
        ]);
        $providerCommonAreaWelcome = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaWelcomes,
        ]);
        $providerEntranceArea = new \yii\data\ArrayDataProvider([
            'allModels' => $model->entranceAreas,
        ]);
        $providerProductBarArea = new \yii\data\ArrayDataProvider([
            'allModels' => $model->productBarAreas,
        ]);
        $providerReceptionArea = new \yii\data\ArrayDataProvider([
            'allModels' => $model->receptionAreas,
        ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'providerCommonAreaBackzone' => $providerCommonAreaBackzone,
            'providerCommonAreaBreak' => $providerCommonAreaBreak,
            'providerCommonAreaChanging' => $providerCommonAreaChanging,
            'providerCommonAreaElevator' => $providerCommonAreaElevator,
            'providerCommonAreaHallways' => $providerCommonAreaHallways,
            'providerCommonAreaLaundry' => $providerCommonAreaLaundry,
            'providerCommonAreaPrayer' => $providerCommonAreaPrayer,
            'providerCommonAreaRelaxation' => $providerCommonAreaRelaxation,
            'providerCommonAreaToilets' => $providerCommonAreaToilets,
            'providerCommonAreaWaiting' => $providerCommonAreaWaiting,
            'providerCommonAreaWelcome' => $providerCommonAreaWelcome,
            'providerEntranceArea' => $providerEntranceArea,
            'providerProductBarArea' => $providerProductBarArea,
            'providerReceptionArea' => $providerReceptionArea,
        ]);
    }

    /**
     * Creates a new CommonArea model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CommonArea();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CommonArea model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->request->post('_asnew') == '1') {
            $model = new CommonArea();
        }else{
            $model = $this->findModel($id);
        }

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CommonArea model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
    }
    
    /**
     * 
     * Export CommonArea information into PDF format.
     * @param integer $id
     * @return mixed
     */
    public function actionPdf($id) {
        $model = $this->findModel($id);
        $providerCommonAreaBackzone = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaBackzones,
        ]);
        $providerCommonAreaBreak = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaBreaks,
        ]);
        $providerCommonAreaChanging = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaChangings,
        ]);
        $providerCommonAreaElevator = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaElevators,
        ]);
        $providerCommonAreaHallways = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaHallways,
        ]);
        $providerCommonAreaLaundry = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaLaundries,
        ]);
        $providerCommonAreaPrayer = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaPrayers,
        ]);
        $providerCommonAreaRelaxation = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaRelaxations,
        ]);
        $providerCommonAreaToilets = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaToilets,
        ]);
        $providerCommonAreaWaiting = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaWaitings,
        ]);
        $providerCommonAreaWelcome = new \yii\data\ArrayDataProvider([
            'allModels' => $model->commonAreaWelcomes,
        ]);
        $providerEntranceArea = new \yii\data\ArrayDataProvider([
            'allModels' => $model->entranceAreas,
        ]);
        $providerProductBarArea = new \yii\data\ArrayDataProvider([
            'allModels' => $model->productBarAreas,
        ]);
        $providerReceptionArea = new \yii\data\ArrayDataProvider([
            'allModels' => $model->receptionAreas,
        ]);

        $content = $this->renderAjax('_pdf', [
            'model' => $model,
            'providerCommonAreaBackzone' => $providerCommonAreaBackzone,
            'providerCommonAreaBreak' => $providerCommonAreaBreak,
            'providerCommonAreaChanging' => $providerCommonAreaChanging,
            'providerCommonAreaElevator' => $providerCommonAreaElevator,
            'providerCommonAreaHallways' => $providerCommonAreaHallways,
            'providerCommonAreaLaundry' => $providerCommonAreaLaundry,
            'providerCommonAreaPrayer' => $providerCommonAreaPrayer,
            'providerCommonAreaRelaxation' => $providerCommonAreaRelaxation,
            'providerCommonAreaToilets' => $providerCommonAreaToilets,
            'providerCommonAreaWaiting' => $providerCommonAreaWaiting,
            'providerCommonAreaWelcome' => $providerCommonAreaWelcome,
            'providerEntranceArea' => $providerEntranceArea,
            'providerProductBarArea' => $providerProductBarArea,
            'providerReceptionArea' => $providerReceptionArea,
        ]);

        $pdf = new \kartik\mpdf\Pdf([
            'mode' => \kartik\mpdf\Pdf::MODE_CORE,
            'format' => \kartik\mpdf\Pdf::FORMAT_A4,
            'orientation' => \kartik\mpdf\Pdf::ORIENT_PORTRAIT,
            'destination' => \kartik\mpdf\Pdf::DEST_BROWSER,
            'content' => $content,
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            'cssInline' => '.kv-heading-1{font-size:18px}',
            'options' => ['title' => \Yii::$app->name],
            'methods' => [
                'SetHeader' => [\Yii::$app->name],
                'SetFooter' => ['{PAGENO}'],
            ]
        ]);

        return $pdf->render();
    }

    /**
    * Creates a new CommonArea model by another data,
    * so user don't need to input all field from scratch.
    * If creation is successful, the browser will be redirected to the 'view' page.
    *
    * @param mixed $id
    * @return mixed
    */
    public function actionSaveAsNew($id) {
        $model = new CommonArea();

        if (Yii::$app->request->post('_asnew') != '1') {
            $model = $this->findModel($id);
        }
    
        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('saveAsNew', [
                'model' => $model,
            ]);
        }
    }
    
    /**
     * Finds the CommonArea model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CommonArea the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CommonArea::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaBackzone
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaBackzone()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaBackzone');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaBackzone', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaBreak
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaBreak()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaBreak');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaBreak', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaChanging
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaChanging()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaChanging');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaChanging', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaElevator
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaElevator()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaElevator');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaElevator', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaHallways
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaHallways()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaHallways');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaHallways', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaLaundry
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaLaundry()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaLaundry');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaLaundry', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaPrayer
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaPrayer()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaPrayer');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaPrayer', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaRelaxation
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaRelaxation()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaRelaxation');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaRelaxation', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaToilets
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaToilets()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaToilets');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaToilets', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaWaiting
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaWaiting()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaWaiting');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaWaiting', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for CommonAreaWelcome
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddCommonAreaWelcome()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('CommonAreaWelcome');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCommonAreaWelcome', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for EntranceArea
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddEntranceArea()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('EntranceArea');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formEntranceArea', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for ProductBarArea
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddProductBarArea()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('ProductBarArea');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formProductBarArea', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for ReceptionArea
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddReceptionArea()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('ReceptionArea');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formReceptionArea', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('stone', 'The requested page does not exist.'));
        }
    }
}
