<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[CommonAreaWelcome]].
 *
 * @see CommonAreaWelcome
 */
class CommonAreaWelcomeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CommonAreaWelcome[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CommonAreaWelcome|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
