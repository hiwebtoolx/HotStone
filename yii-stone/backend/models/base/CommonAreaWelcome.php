<?php

namespace backend\models\base;

use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "common_area_welcome".
 *
 * @property integer $id
 * @property integer $shift_id
 * @property integer $bars_remove_stains_and_dust_on_surfaces
 * @property integer $bars_draw_up_the_decoration
 * @property integer $bars_prepare_food_canapes
 * @property integer $bars_prepare_tea_bags_sugar_cups_and_saucers
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $shift_am
 * @property string $shift_pm
 * @property integer $lock
 * @property integer $deleted_by
 * @property integer $deleted_at
 *
 * @property \backend\models\CommonArea $shift
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $updatedAt
 */
class CommonAreaWelcome extends \yii\db\ActiveRecord
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
            'shift',
            'createdBy',
            'updatedAt'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shift_id'], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['bars_remove_stains_and_dust_on_surfaces', 'bars_draw_up_the_decoration', 'bars_prepare_food_canapes', 'bars_prepare_tea_bags_sugar_cups_and_saucers', 'lock'], 'default', 'value' => '0'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_area_welcome';
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
            'shift_id' => Yii::t('hstone', 'Shift ID'),
            'bars_remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Bars Remove Stains And Dust On Surfaces'),
            'bars_draw_up_the_decoration' => Yii::t('hstone', 'Bars Draw Up The Decoration'),
            'bars_prepare_food_canapes' => Yii::t('hstone', 'Bars Prepare Food Canapes'),
            'bars_prepare_tea_bags_sugar_cups_and_saucers' => Yii::t('hstone', 'Bars Prepare Tea Bags Sugar Cups And Saucers'),
            'shift_am' => Yii::t('hstone', 'Shift Am'),
            'shift_pm' => Yii::t('hstone', 'Shift Pm'),
            'lock' => Yii::t('hstone', 'Lock'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShift()
    {
        return $this->hasOne(\backend\models\CommonArea::className(), ['id' => 'shift_id']);
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
    public function getUpdatedAt()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_at']);
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
            ]
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
     * @return \backend\models\CommonAreaWelcomeQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\CommonAreaWelcomeQuery(get_called_class());
        return $query->where(['common_area_welcome.deleted_by' => 0]);
    }
}
