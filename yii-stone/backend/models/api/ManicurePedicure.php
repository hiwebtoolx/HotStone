<?php

namespace backend\models\api;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "manicure_pedicure".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $user_id
 * @property int $diabetes
 * @property int $cuts
 * @property int $eczema
 * @property int $psoriasis
 * @property int $viens_problems
 * @property int $arthritis
 * @property int $medical_oedema
 * @property int $recent_fectures
 * @property string $others
 * @property string $cuticle_condition
 * @property string $blood_circulation
 * @property int $rated
 * @property int $rate
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 * @property int $lock
 * @property int $deleted_by
 * @property int $deleted_at
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property User $user
 */
class ManicurePedicure extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manicure_pedicure';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'user_id'], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['others', 'cuticle_condition', 'blood_circulation', 'client_signature', 'tech_signature','client_review'], 'string'],
            [['diabetes', 'cuts', 'eczema', 'psoriasis', 'viens_problems', 'arthritis', 'medical_oedema', 'recent_fectures', 'rated', 'lock'], 'default', 'value' => 0],
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
            'diabetes' => Yii::t('stone', 'Diabetes'),
            'cuts' => Yii::t('stone', 'Cuts'),
            'eczema' => Yii::t('stone', 'Eczema'),
            'psoriasis' => Yii::t('stone', 'Psoriasis'),
            'viens_problems' => Yii::t('stone', 'Viens Problems'),
            'arthritis' => Yii::t('stone', 'Arthritis'),
            'medical_oedema' => Yii::t('stone', 'Medical Oedema'),
            'recent_fectures' => Yii::t('stone', 'Recent Fectures'),
            'others' => Yii::t('stone', 'Others'),
            'cuticle_condition' => Yii::t('stone', 'Cuticle Condition'),
            'blood_circulation' => Yii::t('stone', 'Blood Circulation'),
            'rated' => Yii::t('stone', 'Rated'),
            'rate' => Yii::t('stone', 'Rate'),
            'client_signature' => Yii::t('stone', 'Client Signature'),
            'tech_signature' => Yii::t('stone', 'Tech Signature'),
            'date_signature' => Yii::t('stone', 'Date Signature'),
            'created_by' => Yii::t('stone', 'Created By'),
            'created_at' => Yii::t('stone', 'Created At'),
            'updated_by' => Yii::t('stone', 'Updated By'),
            'updated_at' => Yii::t('stone', 'Updated At'),
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
     * @return ManicurePedicureQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ManicurePedicureQuery(get_called_class());
    }
}
