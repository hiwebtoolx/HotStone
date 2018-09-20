<?php

namespace backend\models\api;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "acrylic_gel".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $user_id
 * @property string $client_signature
 * @property string $tech_signature
 * @property int $rated
 * @property int $rate
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 * @property int $deleted_by
 * @property int $daleted_at
 * @property int $lock
 * @property string $date_signature
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property User $user
 */
class AcrylicGel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acrylic_gel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'user_id'], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by', 'daleted_at'], 'integer'],
            [['client_signature', 'tech_signature','client_review'], 'string'],
            [['rated', 'lock'], 'string', 'max' => 1],
            [['date_signature'], 'string', 'max' => 255],
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
            'client_signature' => Yii::t('stone', 'Client Signature'),
            'tech_signature' => Yii::t('stone', 'Tech Signature'),
            'rated' => Yii::t('stone', 'Rated'),
            'rate' => Yii::t('stone', 'Rate'),
            'created_by' => Yii::t('stone', 'Created By'),
            'updated_by' => Yii::t('stone', 'Updated By'),
            'created_at' => Yii::t('stone', 'Created At'),
            'updated_at' => Yii::t('stone', 'Updated At'),
            'deleted_by' => Yii::t('stone', 'Deleted By'),
            'daleted_at' => Yii::t('stone', 'Daleted At'),
            'lock' => Yii::t('stone', 'Lock'),
            'date_signature' => Yii::t('stone', 'Date Signature'),
        ];
    }
    /**
     * @inheritdoc
     * @return array mixed
     */
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
     * @return AcrylicGelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AcrylicGelQuery(get_called_class());
    }
}
