<?php
/**
 * Created by PhpStorm.
 * User: tr
 * Date: 6/23/18
 * Time: 1:42 AM
 */

namespace common\components;
use Yii;
class Helper
{

    public static function LangUrl(){
        //return \Yii::$app->request->url;
        $other_lang = Yii::$app->language =='en' ? 'ar' : 'en';
        return str_replace( '/'.Yii::$app->language, "/".$other_lang, Yii::$app->request->url);
    }
    public static function OtherLang(){
        return Yii::$app->language =='en' ? 'ar' : 'en';
    }

    public static function isAdmin()
    {
        $rule = \Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());

        print_r($rule);
        exit();
        if($rule->name == 'Admin')
            return true;
        return false;
    }
    public static function TranslateUrl()
    {
        $url = '';
        $other_lang = Yii::$app->language =='en' ? 'ar' : 'en';
        $controller = Yii::$app->controller->id;
        $action = Yii::$app->controller->action->id;
        if($controller == 'site'){
            $url =  str_replace( '/'.Yii::$app->language, "/".$other_lang, Yii::$app->request->url);
        }elseif($controller == 'news' && $action == 'index'){
            $url =  str_replace( '/'.Yii::$app->language, "/".$other_lang, Yii::$app->request->url);
        }elseif($controller == 'news' && $action == 'details'){
            $id = Yii::$app->getRequest()->getQueryParam('id');
            $slug = Yii::$app->getRequest()->getQueryParam('slug');
            $item = News::findOne($id);
            $url = '/news/'.$item->id.'/'.$item->slug;
        }else{
            return str_replace( '/'.Yii::$app->language, "/".$other_lang, Yii::$app->request->url);
        }

        return $url;
    }
    public static function IsHome()
    {
        $controller = Yii::$app->controller;
        $default_controller = Yii::$app->defaultRoute;
        return (($controller->id === $default_controller) && ($controller->action->id === $controller->defaultAction)) ? true : false;

    }
}