<?php

namespace backend\models\api;

/**
 * This is the ActiveQuery class for [[KeratinConsultation]].
 *
 * @see KeratinConsultation
 */
class KeratinConsultationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return KeratinConsultation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return KeratinConsultation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
