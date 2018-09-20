<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Acrylic]].
 *
 * @see Acrylic
 */
class AcrylicQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Acrylic[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Acrylic|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
