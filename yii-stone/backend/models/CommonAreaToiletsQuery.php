<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[CommonAreaToilets]].
 *
 * @see CommonAreaToilets
 */
class CommonAreaToiletsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CommonAreaToilets[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CommonAreaToilets|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
