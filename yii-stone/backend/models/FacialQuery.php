<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Facial]].
 *
 * @see Facial
 */
class FacialQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Facial[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Facial|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
