<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "facial_treatment".
 *
 * @property integer $id
 * @property integer $user_id
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
 * @property integer $rated
 * @property integer $rate
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $lock
 * @property string $notes
 *
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $user
 */
class Facial extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    private $_rt_softdelete;
    private $_rt_softrestore;

    public function __construct(){ 
        parent::__construct();
        $this->_rt_softdelete = [
            'deleted_by' => \Yii::$app->user->id,
            'deleted_at' => date('Y-m-d H:i:s'),
        ];
        $this->_rt_softrestore = [
            'deleted_by' => 0,
            'deleted_at' => date('Y-m-d H:i:s'),
        ];
    }

    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'updatedBy',
            'createdBy',
            'user',
            'branch'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id','branch_id' , 'life_style', 'exercise', 'pregnancies', 'type', 'color', 'texture', 'circulation', 'muscle_tone', 'elasticity', 'imperfections_Irregularities', 'wrinkles', 'pores', 'discoloration',], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['life_style', 'exercise', 'pregnancies', 'type', 'color', 'texture', 'circulation', 'muscle_tone', 'elasticity', 'imperfections_Irregularities', 'wrinkles', 'pores', 'discoloration', 'client_review', 'client_signature', 'tech_signature', 'notes','product_suggested','comments','hydration','teint','secretions','circulation_anomaly','pigmentation_anomaly','more_anomalies','dermatosis','tonicity','soins_recommended'], 'string'],
            [['age'], 'string', 'max' => 10],
            [['date_of_last_period', 'allergies', 'medication', 'varicose_veins', 'epilepsy', 'respiratory', 'major_illness', 'major_surgery', 'kidney', 'cardiac', 'metal_pins', 'diet_present', 'present_skincare_routine', 'hands', 'feet', 'miscellaneous', 'date_signature'], 'string', 'max' => 255],
            [['rated', 'lock'], 'default', 'value' => 0],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facial_treatment';
    }

    /**
     *
     * @return string
     * overwrite function optimisticLock
     * return string name of field are used to stored optimistic lock
     *
     */
    public function optimisticLock() {
        return 'lock';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('hstone', 'ID'),

            'comments' => Yii::t('hstone', 'Comments'),
            'product_suggested' => Yii::t('hstone', 'Product_suggested'),
            'hydration' => Yii::t('hstone', 'Hydration'),
            'teint' => Yii::t('hstone', 'Teint'),
            'secretions' => Yii::t('hstone', 'Secretions'),
            'circulation_anomaly' => Yii::t('hstone', 'Circulation anomaly'),
            'pigmentation_anomaly' => Yii::t('hstone', 'Pigmentation anomaly'),
            'more_anomalies' => Yii::t('hstone', 'More anomalies'),
            'dermatosis' => Yii::t('hstone', 'Dermatosis'),
            'tonicity' => Yii::t('hstone', 'Tonicity'),
            'soins_recommended' => Yii::t('hstone', 'Soins recommended'),

            'user_id' => Yii::t('hstone', 'User'),
            'date_of_last_period' => Yii::t('hstone', 'Date Of Last Period'),
            'allergies' => Yii::t('hstone', 'Allergies'),
            'medication' => Yii::t('hstone', 'Medication'),
            'varicose_veins' => Yii::t('hstone', 'Varicose Veins'),
            'epilepsy' => Yii::t('hstone', 'Epilepsy'),
            'respiratory' => Yii::t('hstone', 'Respiratory'),
            'major_illness' => Yii::t('hstone', 'Major Illness'),
            'major_surgery' => Yii::t('hstone', 'Major Surgery'),
            'kidney' => Yii::t('hstone', 'Kidney'),
            'cardiac' => Yii::t('hstone', 'Cardiac'),
            'metal_pins' => Yii::t('hstone', 'Metal Pins'),
            'diet_present' => Yii::t('hstone', 'Diet Present'),
            'type' => Yii::t('hstone', 'Type'),
            'color' => Yii::t('hstone', 'Color'),
            'texture' => Yii::t('hstone', 'Texture'),
            'circulation' => Yii::t('hstone', 'Circulation'),
            'muscle_tone' => Yii::t('hstone', 'Muscle Tone'),
            'elasticity' => Yii::t('hstone', 'Elasticity'),
            'imperfections_Irregularities' => Yii::t('hstone', 'Imperfections  Irregularities'),
            'wrinkles' => Yii::t('hstone', 'Wrinkles'),
            'pores' => Yii::t('hstone', 'Pores'),
            'discoloration' => Yii::t('hstone', 'Discoloration'),
            'present_skincare_routine' => Yii::t('hstone', 'Present Skincare Routine'),
            'hands' => Yii::t('hstone', 'Hands'),
            'feet' => Yii::t('hstone', 'Feet'),
            'miscellaneous' => Yii::t('hstone', 'Miscellaneous'),
            'rated' => Yii::t('hstone', 'Rated'),
            'rate' => Yii::t('hstone', 'Rate'),
            'client_signature' => Yii::t('hstone', 'Client Signature'),
            'tech_signature' => Yii::t('hstone', 'Tech Signature'),
            'date_signature' => Yii::t('hstone', 'Date Signature'),
            'lock' => Yii::t('hstone', 'Lock'),
            'notes' => Yii::t('hstone', 'Notes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(\backend\models\Branch::className(), ['id' => 'branch_id']);
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
     * @return array mixed
     */
    public function behaviors()
    {
        $behaviors = [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => time(),
            ],

            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
        if (Yii::$app->request->post('created_by') == '' ){
            $behaviors['blameable'] = [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ];
        } 
        return  $behaviors ; 


    }

    /**
     * The following code shows how to apply a default condition for all queries:
     *
     * ```php
     * class Customer extends ActiveRecord
     * {
     *     public static function find()
     *     {
     *         return parent::find()->where(['deleted' => false]);
     *     }
     * }
     *
     * // Use andWhere()/orWhere() to apply the default condition
     * // SELECT FROM customer WHERE `deleted`=:deleted AND age>30
     * $customers = Customer::find()->andWhere('age>30')->all();
     *
     * // Use where() to ignore the default condition
     * // SELECT FROM customer WHERE age>30
     * $customers = Customer::find()->where('age>30')->all();
     * ```
     */

    /**
     * @inheritdoc 
     * @return \backend\models\FacialQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\FacialQuery(get_called_class());
        return $query->where(['facial_treatment.deleted_by' => 0]);
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
