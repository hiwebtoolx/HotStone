<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[ProductionArea]].
 *
 * @see ProductionArea
 */
class ProductionAreaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ProductionArea[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductionArea|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
