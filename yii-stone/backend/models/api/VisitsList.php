<?php

namespace backend\models\api;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "visits_list".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $user_id
 * @property string $visit_date
 * @property string $treatment_given
 * @property string $retail_product
 * @property string $technician_name
 * @property string $comments
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
class VisitsList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visits_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'user_id'], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['visit_date'], 'safe'],
            [['treatment_given', 'retail_product', 'comments', 'client_signature', 'tech_signature','client_review'], 'string'],
            [['technician_name', 'date_signature'], 'string', 'max' => 255],
            [['rated', 'lock'], 'string', 'max' => 1],
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
            'visit_date' => Yii::t('stone', 'Visit Date'),
            'treatment_given' => Yii::t('stone', 'Treatment Given'),
            'retail_product' => Yii::t('stone', 'Retail Product'),
            'technician_name' => Yii::t('stone', 'Technician Name'),
            'comments' => Yii::t('stone', 'Comments'),
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
     * @return VisitsListQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VisitsListQuery(get_called_class());
    }
}
