<?php

namespace backend\components;

use yii\rbac\Rule;

/**
 * Description of GuestRule
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 2.5
 */
class StaffRule extends Rule
{
    /**
     * @inheritdoc
     */
    public $name = 'staff_rule';

    /**
     * @inheritdoc
     */
    public function execute($user, $item, $params)
    {
        if (\Yii::$app->authManager-> getAssignment($item->name,$user))
            return true;
        return false;
    }
}
