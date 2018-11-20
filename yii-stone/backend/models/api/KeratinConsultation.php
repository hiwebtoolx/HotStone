<?php

namespace backend\models\api;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "keratin_consultation".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $user_id
 * @property int $are_you_pregnant
 * @property string $when_was_your_last_delivery
 * @property int $did_you_color_your_hair
 * @property string $color_when
 * @property int $did_you_make_highlight
 * @property string $highlight_when
 * @property int $did_you_put_henna
 * @property string $henna_when
 * @property int $did_you_make_hair_straightening
 * @property string $straightening_when
 * @property int $did_you_make_removing_color
 * @property string $removing_color_when
 * @property int $did_you_make_keratin_before
 * @property string $keratin_befor_when
 * @property string $hair_specialist_name
 * @property string $product_name
 * @property string $notes
 * @property int $rated
 * @property int $rate
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $lock
 * @property int $deleted_by
 * @property int $deleted_at
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property User $user
 */
class KeratinConsultation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keratin_consultation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'user_id'], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['notes', 'client_signature', 'tech_signature','client_review'], 'string'],
            [['are_you_pregnant', 'did_you_color_your_hair', 'did_you_make_highlight', 'did_you_put_henna', 'did_you_make_hair_straightening', 'did_you_make_removing_color', 'did_you_make_keratin_before', 'rated', 'lock'], 'default', 'value' => 0],
            [['when_was_your_last_delivery', 'color_when', 'highlight_when', 'henna_when', 'straightening_when', 'removing_color_when', 'keratin_befor_when'], 'string', 'max' => 50],
            [['hair_specialist_name', 'product_name', 'date_signature'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('stone', 'ID'),
            'branch_id' => Yii::t('stone', 'Branch ID'),
            'user_id' => Yii::t('stone', 'User ID'),
            'are_you_pregnant' => Yii::t('stone', 'Are You Pregnant'),
            'when_was_your_last_delivery' => Yii::t('stone', 'When Was Your Last Delivery'),
            'did_you_color_your_hair' => Yii::t('stone', 'Did You Color Your Hair'),
            'color_when' => Yii::t('stone', 'Color When'),
            'did_you_make_highlight' => Yii::t('stone', 'Did You Make Highlight'),
            'highlight_when' => Yii::t('stone', 'Highlight When'),
            'did_you_put_henna' => Yii::t('stone', 'Did You Put Henna'),
            'henna_when' => Yii::t('stone', 'Henna When'),
            'did_you_make_hair_straightening' => Yii::t('stone', 'Did You Make Hair Straightening'),
            'straightening_when' => Yii::t('stone', 'Straightening When'),
            'did_you_make_removing_color' => Yii::t('stone', 'Did You Make Removing Color'),
            'removing_color_when' => Yii::t('stone', 'Removing Color When'),
            'did_you_make_keratin_before' => Yii::t('stone', 'Did You Make Keratin Before'),
            'keratin_befor_when' => Yii::t('stone', 'Keratin Befor When'),
            'hair_specialist_name' => Yii::t('stone', 'Hair Specialist Name'),
            'product_name' => Yii::t('stone', 'Product Name'),
            'notes' => Yii::t('stone', 'Notes'),
            'rated' => Yii::t('stone', 'Rated'),
            'rate' => Yii::t('stone', 'Rate'),
            'client_signature' => Yii::t('stone', 'Client Signature'),
            'tech_signature' => Yii::t('stone', 'Tech Signature'),
            'date_signature' => Yii::t('stone', 'Date Signature'),
            'created_at' => Yii::t('stone', 'Created At'),
            'updated_at' => Yii::t('stone', 'Updated At'),
            'created_by' => Yii::t('stone', 'Created By'),
            'updated_by' => Yii::t('stone', 'Updated By'),
            'lock' => Yii::t('stone', 'Lock'),
            'deleted_by' => Yii::t('stone', 'Deleted By'),
            'deleted_at' => Yii::t('stone', 'Deleted At'),
        ];
    }
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => time(),
            ]
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     * @return KeratinConsultationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KeratinConsultationQuery(get_called_class());
    }
}
