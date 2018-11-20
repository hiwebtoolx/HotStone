<?php

namespace backend\models\api;

/**
 * This is the ActiveQuery class for [[FacialTreatment]].
 *
 * @see FacialTreatment
 */
class FacialTreatmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return FacialTreatment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FacialTreatment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
