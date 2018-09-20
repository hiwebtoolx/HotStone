<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 6/23/2016
 * Time: 3:08 AM
 */
namespace common\components;

class MyInflector extends \yii\helpers\Inflector
{
    public static function slug($string, $replacement = '-', $lowercase = true, $unicode_filter = '')
    {
        $lowercase = \Yii::$app->language == 'en' ? true : false;
        $string = static::transliterate($string);
        $string = preg_replace('/[^a-zA-Z0-9ء-ي _\-]/u', '', $string);
        $string = preg_replace('/[=\s—–-]+/u', $replacement, $string);
        $string = trim($string, $replacement);
        //return $string;
        return $lowercase ? strtolower($string) : $string;
    }
}