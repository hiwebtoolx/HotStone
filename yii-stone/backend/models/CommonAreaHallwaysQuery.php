<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[CommonAreaHallways]].
 *
 * @see CommonAreaHallways
 */
class CommonAreaHallwaysQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CommonAreaHallways[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CommonAreaHallways|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
