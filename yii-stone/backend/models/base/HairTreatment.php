<?php

namespace backend\models\base;

use Yii;
use common\models\User;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "hair_treatment".
 *
 * @property integer $id
 * @property integer $branch_id
 * @property integer $user_id
 * @property string $hair_style
 * @property string $hair_diameter
 * @property string $wash_hair
 * @property string $conditioning_product
 * @property string $heat_tool
 * @property string $major_wish
 * @property string $other_desire
 * @property string $prefer_style_hair
 * @property string $mobility_scalp
 * @property string $condition_scalp
 * @property string $ends_roots
 * @property string $resistance_hair
 * @property string $dryness_hair
 * @property string $manageability_hair
 * @property string $suggested_treatment
 * @property string $many_sessions
 * @property string $product_suggested
 * @property string $comments
 * @property integer $rated
 * @property integer $rate
 * @property string $interests
 * @property string $client_review
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $lock
 * @property integer $deleted_by
 * @property integer $deleted_at
 *
 * @property \backend\models\User $user
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 */
class HairTreatment extends \yii\db\ActiveRecord
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
            'user',
            'createdBy',
            'updatedBy',
            'branch'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'user_id', 'hair_style', 'hair_diameter', 'wash_hair', 'conditioning_product', 'heat_tool', 'major_wish', 'other_desire', 'prefer_style_hair', 'mobility_scalp', 'condition_scalp', 'ends_roots', 'resistance_hair', 'dryness_hair', 'manageability_hair'], 'required'],

            [['branch_id', 'user_id', 'rate', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],

            [['hair_style', 'hair_diameter', 'wash_hair', 'conditioning_product', 'heat_tool', 'major_wish', 'other_desire', 'prefer_style_hair', 'mobility_scalp', 'condition_scalp', 'ends_roots', 'resistance_hair', 'dryness_hair', 'manageability_hair', 'suggested_treatment', 'product_suggested', 'comments', 'interests', 'client_review', 'client_signature', 'tech_signature'], 'string'],
            [['many_sessions'], 'string', 'max' => 45],
            [['date_signature'], 'string', 'max' => 255],
            [['rated', 'lock'], 'default', 'value' => 0],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hair_treatment';
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
            'branch_id' => Yii::t('hstone', 'Branch ID'),
            'user_id' => Yii::t('hstone', 'User ID'),

            'hair_style' => Yii::t('hstone', 'I see your hair is '),
            'hair_diameter' => Yii::t('hstone', 'Hair diameter is'),
            'wash_hair' => Yii::t('hstone', 'Wash your hair ?'),
            'conditioning_product' => Yii::t('hstone', 'Use a conditioning product (leave-in, conditioner, Mask)'),
            'heat_tool' => Yii::t('hstone', 'Use a heat tool (such as a dryer, straightener, etc..)'),
            'major_wish' => Yii::t('hstone', 'Your major wish is to have hair that has'),
            'other_desire' => Yii::t('hstone', 'What would be your other desire for your hair?'),
            'prefer_style_hair' => Yii::t('hstone', 'How do you like to style your hair?'),
            'mobility_scalp' => Yii::t('hstone', 'When I test the mobility of your scalp it is'),
            'condition_scalp' => Yii::t('hstone', 'When I evaluate the condition of your scalp I can see it has'),
            'ends_roots' => Yii::t('hstone', 'When I compare the ends of your roots I see the ends are:'),
            'resistance_hair' => Yii::t('hstone', 'When I do a resistance test your hair: breaks easily (erosion level 3-4)'),
            'dryness_hair' => Yii::t('hstone', 'When I do a dryness test your hair is'),
            'manageability_hair' => Yii::t('hstone', 'When I test the manageability of your hair I see your hair is'),
            'suggested_treatment' => Yii::t('hstone', 'Suggested Treatment'),
            'many_sessions' => Yii::t('hstone', 'How many sessions?'),
            'product_suggested' => Yii::t('hstone', 'Product Suggested'),
            'comments' => Yii::t('hstone', 'Comments'),
            'rated' => Yii::t('hstone', 'Rated'),
            'rate' => Yii::t('hstone', 'Rate'),
            'interests' => Yii::t('hstone', 'Interests'),
            'client_review' => Yii::t('hstone', 'Client Review'),
            'client_signature' => Yii::t('hstone', 'Client Signature'),
            'tech_signature' => Yii::t('hstone', 'Tech Signature'),
            'date_signature' => Yii::t('hstone', 'Date Signature'),
            'lock' => Yii::t('hstone', 'Lock'),
        ];
    }
    

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(Branch::className(), ['id' => 'branch_id']);
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
     * @return \app\models\HairTreatmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\HairTreatmentQuery(get_called_class());
        return $query->where(['hair_treatment.deleted_by' => 0]);
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
