<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[\app\models\HairTreatment]].
 *
 * @see \app\models\HairTreatment
 */
class HairTreatmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \app\models\HairTreatment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\HairTreatment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
