<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[CommonAreaElevator]].
 *
 * @see CommonAreaElevator
 */
class CommonAreaElevatorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CommonAreaElevator[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CommonAreaElevator|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
