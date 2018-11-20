<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[HairColour]].
 *
 * @see HairColour
 */
class HairColourQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return HairColour[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return HairColour|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
