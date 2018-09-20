<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Keratin]].
 *
 * @see Keratin
 */
class KeratinQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Keratin[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Keratin|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
