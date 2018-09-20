<?php

namespace backend\models\api;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "facial_treatment".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $user_id
 * @property string $date_of_last_period
 * @property string $allergies
 * @property string $medication
 * @property string $varicose_veins
 * @property string $epilepsy
 * @property string $respiratory
 * @property string $major_illness
 * @property string $major_surgery
 * @property string $kidney
 * @property string $cardiac
 * @property string $metal_pins
 * @property string $diet_present
 * @property string $life_style
 * @property string $exercise
 * @property string $pregnancies
 * @property string $age
 * @property string $type
 * @property string $color
 * @property string $texture
 * @property string $circulation
 * @property string $muscle_tone
 * @property string $elasticity
 * @property string $imperfections_Irregularities
 * @property string $wrinkles
 * @property string $pores
 * @property string $discoloration
 * @property string $present_skincare_routine
 * @property string $hands
 * @property string $feet
 * @property string $miscellaneous
 * @property int $rated
 * @property int $rate
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 * @property int $deleted_by
 * @property int $deleted_at
 * @property int $lock
 * @property string $notes
 *
 * @property User $updatedBy
 * @property string $client_review
 * @property User $createdBy
 * @property User $user
 */
class FacialTreatment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facial_treatment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'user_id'], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['life_style', 'exercise', 'pregnancies', 'type', 'color', 'texture', 'circulation', 'muscle_tone', 'elasticity', 'imperfections_Irregularities', 'wrinkles', 'pores', 'discoloration', 'client_review', 'client_signature', 'tech_signature', 'notes'], 'string'],
            [['age'], 'string', 'max' => 10],
            [['date_of_last_period', 'allergies', 'medication', 'varicose_veins', 'epilepsy', 'respiratory', 'major_illness', 'major_surgery', 'kidney', 'cardiac', 'metal_pins', 'diet_present', 'present_skincare_routine', 'hands', 'feet', 'miscellaneous', 'date_signature'], 'string', 'max' => 255],
            [['rated', 'lock'], 'string', 'max' => 1],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
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
            'date_of_last_period' => Yii::t('stone', 'Date Of Last Period'),
            'allergies' => Yii::t('stone', 'Allergies'),
            'medication' => Yii::t('stone', 'Medication'),
            'varicose_veins' => Yii::t('stone', 'Varicose Veins'),
            'epilepsy' => Yii::t('stone', 'Epilepsy'),
            'respiratory' => Yii::t('stone', 'Respiratory'),
            'major_illness' => Yii::t('stone', 'Major Illness'),
            'major_surgery' => Yii::t('stone', 'Major Surgery'),
            'kidney' => Yii::t('stone', 'Kidney'),
            'cardiac' => Yii::t('stone', 'Cardiac'),
            'metal_pins' => Yii::t('stone', 'Metal Pins'),
            'diet_present' => Yii::t('stone', 'Diet Present'),
            'type' => Yii::t('stone', 'Type'),
            'color' => Yii::t('stone', 'Color'),
            'texture' => Yii::t('stone', 'Texture'),
            'circulation' => Yii::t('stone', 'Circulation'),
            'muscle_tone' => Yii::t('stone', 'Muscle Tone'),
            'elasticity' => Yii::t('stone', 'Elasticity'),
            'imperfections_Irregularities' => Yii::t('stone', 'Imperfections  Irregularities'),
            'wrinkles' => Yii::t('stone', 'Wrinkles'),
            'pores' => Yii::t('stone', 'Pores'),
            'discoloration' => Yii::t('stone', 'Discoloration'),
            'present_skincare_routine' => Yii::t('stone', 'Present Skincare Routine'),
            'hands' => Yii::t('stone', 'Hands'),
            'feet' => Yii::t('stone', 'Feet'),
            'miscellaneous' => Yii::t('stone', 'Miscellaneous'),
            'rated' => Yii::t('stone', 'Rated'),
            'rate' => Yii::t('stone', 'Rate'),
            'client_signature' => Yii::t('stone', 'Client Signature'),
            'tech_signature' => Yii::t('stone', 'Tech Signature'),
            'date_signature' => Yii::t('stone', 'Date Signature'),
            'created_by' => Yii::t('stone', 'Created By'),
            'updated_by' => Yii::t('stone', 'Updated By'),
            'created_at' => Yii::t('stone', 'Created At'),
            'updated_at' => Yii::t('stone', 'Updated At'),
            'deleted_by' => Yii::t('stone', 'Deleted By'),
            'deleted_at' => Yii::t('stone', 'Deleted At'),
            'lock' => Yii::t('stone', 'Lock'),
            'notes' => Yii::t('stone', 'Notes'),
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
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     * @return FacialTreatmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FacialTreatmentQuery(get_called_class());
    }
}
