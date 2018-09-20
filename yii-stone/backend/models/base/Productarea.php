<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "product_bar_area".
 *
 * @property integer $id
 * @property integer $sweep_and_mop_floors
 * @property integer $remove_stains_and_dust_on_surfaces
 * @property integer $clean_and_sanitize_sink
 * @property integer $draw_up_the_decoration
 * @property integer $clean_the_product_containers
 * @property integer $checked_by
 * @property string $notes
 * @property string $shift_am
 * @property string $shift_pm
 * @property string $shift_date
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $lock
 * @property integer $deleted_by
 * @property integer $deleted_at
 *
 * @property \backend\models\User $checkedBy
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedBy
 */
class Productarea extends \yii\db\ActiveRecord
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
            'checkedBy',
            'createdBy',
            'updatedBy'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sweep_and_mop_floors', 'remove_stains_and_dust_on_surfaces', 'clean_and_sanitize_sink', 'draw_up_the_decoration', 'clean_the_product_containers', 'checked_by', 'notes', 'shift_am', 'shift_pm', 'shift_date', 'created_at', 'updated_at', 'created_by', 'updated_by', 'lock', 'deleted_by', 'deleted_at'], 'required'],
            [['checked_by', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['notes'], 'string'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['sweep_and_mop_floors', 'remove_stains_and_dust_on_surfaces', 'clean_and_sanitize_sink', 'draw_up_the_decoration', 'clean_the_product_containers', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_bar_area';
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
            'sweep_and_mop_floors' => Yii::t('hstone', 'Sweep And Mop Floors'),
            'remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'clean_and_sanitize_sink' => Yii::t('hstone', 'Clean And Sanitize Sink'),
            'draw_up_the_decoration' => Yii::t('hstone', 'Draw Up The Decoration'),
            'clean_the_product_containers' => Yii::t('hstone', 'Clean The Product Containers'),
            'checked_by' => Yii::t('hstone', 'Checked By'),
            'notes' => Yii::t('hstone', 'Notes'),
            'shift_am' => Yii::t('hstone', 'Shift Am'),
            'shift_pm' => Yii::t('hstone', 'Shift Pm'),
            'shift_date' => Yii::t('hstone', 'Shift Date'),
            'lock' => Yii::t('hstone', 'Lock'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheckedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'checked_by']);
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
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => time(),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
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
     * @return \backend\models\ProductareaQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\ProductareaQuery(get_called_class());
        return $query->where(['product_bar_area.deleted_by' => 0]);
    }
}
