<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[ConsultBodyScrub]].
 *
 * @see ConsultBodyScrub
 */
class ConsultBodyScrubQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ConsultBodyScrub[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ConsultBodyScrub|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
