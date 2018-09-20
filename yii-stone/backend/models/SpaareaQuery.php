<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Spaarea]].
 *
 * @see Spaarea
 */
class SpaareaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Spaarea[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Spaarea|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
