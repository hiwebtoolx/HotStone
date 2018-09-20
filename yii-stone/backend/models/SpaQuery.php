<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Spa]].
 *
 * @see Spa
 */
class SpaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Spa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Spa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
