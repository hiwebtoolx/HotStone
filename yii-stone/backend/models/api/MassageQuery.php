<?php

namespace backend\models\api;

/**
 * This is the ActiveQuery class for [[Massage]].
 *
 * @see Massage
 */
class MassageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
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
