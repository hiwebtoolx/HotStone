<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[CommonAreaChanging]].
 *
 * @see CommonAreaChanging
 */
class CommonAreaChangingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CommonAreaChanging[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CommonAreaChanging|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
