<?php

namespace backend\models\api;

/**
 * This is the ActiveQuery class for [[VisitsList]].
 *
 * @see VisitsList
 */
class VisitsListQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return VisitsList[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return VisitsList|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
