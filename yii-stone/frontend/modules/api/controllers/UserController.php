<?php
/**
 * Created by PhpStorm.
 * User: tr
 * Date: 6/7/18
 * Time: 10:35 AM
 */
namespace frontend\modules\api\controllers;
use backend\models\api\AcrylicGel;
use backend\models\api\ConsultBodyScrub;
use backend\models\api\FacialTreatment;
use backend\models\api\KeratinConsultation;
use backend\models\api\ManicurePedicure;
use backend\models\api\HairTreatment;
use backend\models\api\HairColour;
use backend\models\api\Massage;
use backend\models\api\Profile;
use backend\models\api\User;
use common\models\LoginForm;
use frontend\models\SignupForm;
use Yii;
use yii\data\ActiveDataProvider;
use \backend\models\base\Health ;


class UserController extends \yii\rest\ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    public $modelClass = 'backend\models\api\User';

    public function actionCheckHealth()
    {
        $user = \Yii::$app->request->post('client_id');
        $health= Health::find()->where(['user_id'=>$user])->count();
        if ($health > 0 ){
            return ['success'=>1]; 
        }else{
            return ['success'=>0]; 
        }
    }
    public function actionLogin()
    {
        $model = new LoginForm();

        $username = \Yii::$app->request->post('username');
        $password  = \Yii::$app->request->post('password');

//         $activeData = new ActiveDataProvider([
//             'query' => User::find()->where(['username'=>$username,'password' => $password]),
//         ]);
//        return $activeData;
        if ($model->load(\Yii::$app->getRequest()->getBodyParams(), '') && $model->login()) {

            $user = User::findOne(\Yii::$app->user->identity->id);


            return ['user_id' => $user->id , 'username' => $user->username , 'name' =>$user->profile->name,
                'email' => $user->email , 'branch_id'=>$user->profile->branch_id , 'role' => 'Therapist','auth_token'=>$user->auth_key];
            //return [\Yii::$app->user->identity,'company_name' => '','job_title' => 'fff'];
        } else {
             return ['user_id' => 0 , 'username' => "" , 'name' =>"",
                 'email' => "" , 'branch_id'=>0, 'role' => '','auth_token'=>''];
        }

//        $x = 1;
//
//        if ($x == 1){
//            return ['user_id' => "1" , 'branch_id' => "1" , 'email' => 'zzzz@zzz.com' , 'name' => 'my name'];
//        }
//        else{
//            return ['user_id' => "0" , 'branch_id' => "0"];
//        }
    }

    public function actionNew()
    {

        $phone = \Yii::$app->request->post('phone');
        if($user = User::find()
            ->joinWith('profile')
            ->where(['profile.phone' => $phone])
            ->one())
        {
            return ['id' => $user->id , 'email' => $user->email , 'phone' =>  $user->profile->phone , 'name' => $user->profile->name ];

        }

        $name = \Yii::$app->request->post('name');
        $email = \Yii::$app->request->post('email');

        $model = new User();
        $pass = $randomString = \Yii::$app->getSecurity()->generateRandomString(8);

        $model->username = $email;
        $model->email = $email;
        $hash = \Yii::$app->getSecurity()->generatePasswordHash($pass);

        $model->password_hash = $hash;
        $model->auth_key =  Yii::$app->security->generateRandomString();
        $model->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
        $model->created_at = time();
        $model->updated_at = time();
        $model->status = 0;

        $profile = new Profile();


        if($model->save()){
            $profile->user_id = $model->id;
            $profile->name = $name;
            $profile->phone = $phone;

            if($profile->save()){
                return ['id' => $model->id , 'email' => $email , 'phone' =>  $profile->phone , 'name' => $profile->name ];
            }else{
                return $profile->getErrors();
            }
        }else{
            return $model->getErrors();
        }


    }

        public function actionUpdateProfile()
    {
        $user = \Yii::$app->request->post('client_id');
        $name = \Yii::$app->request->post('name');
        $email = \Yii::$app->request->post('email');
        $phone = \Yii::$app->request->post('phone');
 

        $user_profile = User::find()
            ->joinWith('profile')
            ->where(['user.id' => $user])
            ->one();
        
        if (isset($user_profile->id)) { 
            $user_profile->email =$email ;
            $user_profile->save() ; 
            $user_profile->profile->name =$name ;
            $user_profile->profile->phone = $phone ; 
            $user_profile->profile->save() ; 

            return ['success' => 1];
        }else {
            return ['success' => 0];
        }
    }

    public function actionSearch()
    {
        $phone = \Yii::$app->request->post('phone');

        $user = User::find()
            ->joinWith('profile')
            ->where(['profile.phone' => $phone])
            ->one();

        if(count($user)){
            return ['id' => $user->id , 'name' => $user->profile->name , 'email' => $user->email , 'phone' => $phone];
        }else{
            return ['id' => 0 , 'name' => "" , 'email' => '' , 'phone' => '' ];
        }

    }

    public function actionRate()
    {
        $user = \Yii::$app->request->post('client_id');
        $module = \Yii::$app->request->post('module');
        $record_id = \Yii::$app->request->post('id');
        $rate_value = \Yii::$app->request->post('value');
        $rate_preview = \Yii::$app->request->post('client_review');

        if($module == "massage"){
            $model = Massage::findOne($record_id);
            $model->rate = $rate_value;
            $model->reted = "1";
            $model->lock = "0";
            $model->client_review = $rate_preview;
            if(!$model->save()){
                return ['success' => 1];
            }else{
                return ['success' => 0];
            }
        }elseif($module == "scrub"){
            $model = ConsultBodyScrub::findOne($record_id);
            $model->rate = $rate_value;
            $model->rated = "1";
            $model->lock = "0";
            $model->client_review = $rate_preview;

            if(!$model->save()){
                return ['success' => 1];
            }else{
                return ['success' => 0];
            }
        }elseif ($module == "facial"){
            $model = FacialTreatment::findOne($record_id);
            $model->rate = $rate_value;
            $model->rated = "1";
            $model->lock = "0";
            $model->client_review = $rate_preview;

            if(!$model->save()){
                return ['success' => 1];
            }else{
                return ['success' => 0];
            }
        }elseif ($module == "acrylic"){
            $model = AcrylicGel::findOne($record_id);
            $model->rate = $rate_value;
            $model->rated = "1";
            $model->lock = "0";
            $model->client_review = $rate_preview;

            if(!$model->save()){
                return ['success' => 1];
            }else{
                return ['success' => 0];
            }
        }elseif ($module == "keratin"){
            $model = KeratinConsultation::findOne($record_id);
            $model->rate = $rate_value;
            $model->rated = "1";
            $model->lock = "0";
            $model->client_review = $rate_preview;

            if(!$model->save()){
                return ['success' => 1];
            }else{
                return ['success' => 0];
            }

        }elseif ($module == "manicure"){
            $model = ManicurePedicure::findOne($record_id);
            $model->rate = $rate_value;
            $model->rated = "1";
            $model->lock = "0";
            $model->client_review = $rate_preview;

            if(!$model->save()){
                return ['success' => 1];
            }else{
                return ['success' => 0];
            }
        }elseif ($module == "hairtreatment"){ // new by peter 
            $model = HairTreatment::findOne($record_id);
            $model->rate = $rate_value;
            $model->rated = "1";
            $model->lock = "0";
            $model->client_review = $rate_preview;

            if(!$model->save()){
                return ['success' => 1];
            }else{
                return ['success' => 0];
            }
        }elseif ($module == "haircolour"){// new by peter  
            $model = HairColour::findOne($record_id);
            $model->rate = $rate_value;
            $model->rated = "1";
            $model->lock = "0";
            $model->client_review = $rate_preview;

            if(!$model->save()){
                return ['success' => 1];
            }else{
                return ['success' => 0];
            }
        }

    }

}