<?php
namespace backend\models;
/**
 * Created by PhpStorm.
 * User: tr
 * Date: 6/2/18
 * Time: 11:10 AM
 */
use yii\rbac\Rule;

class HealthRule extends Rule
{
    /**
     * @inheritdoc
     */
    public $name = 'health_rule';

    /**
     * @inheritdoc
     */
    public function execute($user, $item, $params)
    {
        return $user->getIsGuest();
    }
}
