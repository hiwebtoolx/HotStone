<?php

namespace backend\models\api;

/**
 * This is the ActiveQuery class for [[ConsultBodyScrub]].
 *
 * @see ConsultBodyScrub
 */
class ConsultBodyScrubQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
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
