<?php

namespace backend\models\api;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "health".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $user_id
 * @property int $heart_disease
 * @property int $chest_pain
 * @property int $high_blood_pressure
 * @property int $varicose_veins
 * @property int $allergies
 * @property int $bronchitis
 * @property int $asthma
 * @property int $dizziness
 * @property int $headaches
 * @property int $chemotherapy
 * @property int $diabetes
 * @property int $e_pilepsy
 * @property int $otherـdiseases
 * @property string $otherـdiseases_desc
 * @property int $allergic
 * @property string $what_causes_you_allergies
 * @property int $rated
 * @property int $rate
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property int $lock
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $deleted_by
 * @property int $deleted_at
 *
 * @property User $user
 * @property User $updatedBy
 * @property User $createdBy
 */
class Health extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'health';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'user_id'], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['otherـdiseases_desc', 'what_causes_you_allergies','tech_signature'], 'string'],
            [['heart_disease', 'chest_pain', 'high_blood_pressure', 'varicose_veins',
                'allergies', 'bronchitis', 'asthma', 'dizziness', 'headaches', 'chemotherapy', 'diabetes', 'e_pilepsy',
                'otherـdiseases', 'allergic', 'rated','exercise',
                'life_style','pregnancies'
            ], 'default', 'value' => 0],
            [['age'], 'string', 'max' => 10],
            [['client_signature', 'date_signature'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
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
            'heart_disease' => Yii::t('stone', 'Heart Disease'),
            'chest_pain' => Yii::t('stone', 'Chest Pain'),
            'high_blood_pressure' => Yii::t('stone', 'High Blood Pressure'),
            'varicose_veins' => Yii::t('stone', 'Varicose Veins'),
            'allergies' => Yii::t('stone', 'Allergies'),
            'bronchitis' => Yii::t('stone', 'Bronchitis'),
            'asthma' => Yii::t('stone', 'Asthma'),
            'dizziness' => Yii::t('stone', 'Dizziness'),
            'headaches' => Yii::t('stone', 'Headaches'),
            'chemotherapy' => Yii::t('stone', 'Chemotherapy'),
            'diabetes' => Yii::t('stone', 'Diabetes'),
            'e_pilepsy' => Yii::t('stone', 'E Pilepsy'),
            'otherـdiseases' => Yii::t('stone', 'Otherـdiseases'),
            'otherـdiseases_desc' => Yii::t('stone', 'Otherـdiseases Desc'),
            'allergic' => Yii::t('stone', 'Allergic'),
            'what_causes_you_allergies' => Yii::t('stone', 'What Causes You Allergies'),
            'rated' => Yii::t('stone', 'Rated'),
            'rate' => Yii::t('stone', 'Rate'),
            'client_signature' => Yii::t('stone', 'Client Signature'),
            'tech_signature' => Yii::t('stone', 'Tech Signature'),
            'date_signature' => Yii::t('stone', 'Date Signature'),
            'lock' => Yii::t('stone', 'Lock'),
            'created_at' => Yii::t('stone', 'Created At'),
            'updated_at' => Yii::t('stone', 'Updated At'),
            'created_by' => Yii::t('stone', 'Created By'),
            'updated_by' => Yii::t('stone', 'Updated By'),
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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
     * @inheritdoc
     * @return HealthQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HealthQuery(get_called_class());
    }

    public function fields()
    {
        $fields = parent::fields();
        $fields['created_at'] = function() {
            return date('d-m-Y',($this->created_at)) ; ;
        }; 
        return $fields;
    }
    
}
