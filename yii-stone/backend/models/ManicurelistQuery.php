<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Manicurelist]].
 *
 * @see Manicurelist
 */
class ManicurelistQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Manicurelist[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Manicurelist|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
