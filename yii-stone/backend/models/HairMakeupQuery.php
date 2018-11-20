<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[HairMakeup]].
 *
 * @see HairMakeup
 */
class HairMakeupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return HairMakeup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return HairMakeup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
