<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[ManicurePedicure]].
 *
 * @see ManicurePedicure
 */
class ManicurePedicureQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ManicurePedicure[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ManicurePedicure|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
