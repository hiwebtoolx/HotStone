<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[FrontHouse]].
 *
 * @see FrontHouse
 */
class FrontHouseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FrontHouse[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FrontHouse|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
