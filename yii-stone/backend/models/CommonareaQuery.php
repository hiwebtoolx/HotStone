<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[CommonArea]].
 *
 * @see CommonArea
 */
class CommonAreaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CommonArea[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CommonArea|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
