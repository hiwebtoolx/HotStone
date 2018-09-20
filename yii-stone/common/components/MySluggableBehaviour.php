<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 6/23/2016
 * Time: 3:04 AM
 */
namespace common\components;
use yii\behaviors\SluggableBehavior;


class MySluggableBehaviour extends SluggableBehavior
{
    protected function generateSlug($slugParts)
    {
        return MyInflector::slug(implode('-', $slugParts), '-', true, '\x{3000}-\x{9faf}');
    }
}