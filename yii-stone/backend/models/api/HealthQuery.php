<?php

namespace backend\models\api;

/**
 * This is the ActiveQuery class for [[Health]].
 *
 * @see Health
 */
class HealthQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Health[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Health|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
