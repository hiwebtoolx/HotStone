<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Manicure]].
 *
 * @see Manicure
 */
class ManicureQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Manicure[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Manicure|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
