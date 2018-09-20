<?php

namespace backend\models\api;

/**
 * This is the ActiveQuery class for [[AcrylicGel]].
 *
 * @see AcrylicGel
 */
class AcrylicGelQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return AcrylicGel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AcrylicGel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
