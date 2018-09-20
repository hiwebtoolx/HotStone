<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Massage]].
 *
 * @see Massage
 */
class MassageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Massage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Massage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
