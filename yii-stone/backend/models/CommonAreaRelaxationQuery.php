<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[CommonAreaRelaxation]].
 *
 * @see CommonAreaRelaxation
 */
class CommonAreaRelaxationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CommonAreaRelaxation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CommonAreaRelaxation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
