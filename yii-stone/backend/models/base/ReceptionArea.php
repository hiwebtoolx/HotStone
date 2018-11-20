<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "reception_area".
 *
 * @property integer $id
 * @property integer $shift_id
 * @property integer $sweep_and_mop_floors
 * @property integer $clean_the_chairs_used_by_staff
 * @property integer $clean_behind_desk
 * @property integer $clean_the_computer_keyboard_mouse_and_telephone
 * @property integer $dust_chair
 * @property integer $remove_stains_and_dust_on_surfaces
 * @property string $notes
 * @property string $shift_am
 * @property string $shift_pm
 * @property integer $lock
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_at
 * @property integer $deleted_by
 *
 * @property \backend\models\User $updatedBy
 * @property \backend\models\User $createdBy
 * @property \backend\models\CommonArea $shift
 */
class ReceptionArea extends \yii\db\ActiveRecord
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
            'shift'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shift_id'], 'required'],
            [['shift_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by'], 'integer'],
            [['notes'], 'string'],
            [['shift_am', 'shift_pm'], 'safe'],
            [['sweep_and_mop_floors', 'clean_the_chairs_used_by_staff', 'clean_behind_desk', 'clean_the_computer_keyboard_mouse_and_telephone', 'dust_chair', 'remove_stains_and_dust_on_surfaces', 'lock'],'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reception_area';
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
            'sweep_and_mop_floors' => Yii::t('hstone', 'Sweep and mop floors '),
            'clean_the_chairs_used_by_staff' => Yii::t('hstone', 'Clean the chairs used by staff'),
            'clean_behind_desk' => Yii::t('hstone', 'Clean behind desk'),
            'clean_the_computer_keyboard_mouse_and_telephone' => Yii::t('hstone', 'Clean the computer, keyboard, mouse and telephone'),
            'dust_chair' => Yii::t('hstone', 'Dust chair'),
            'remove_stains_and_dust_on_surfaces' => Yii::t('hstone', 'Remove Stains And Dust On Surfaces'),
            'notes' => Yii::t('hstone', 'Notes'),
            'shift_am' => Yii::t('hstone', 'Shift Am'),
            'shift_pm' => Yii::t('hstone', 'Shift Pm'),
            'lock' => Yii::t('hstone', 'Lock'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'updated_by']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'created_by']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShift()
    {
        return $this->hasOne(\backend\models\CommonArea::className(), ['id' => 'shift_id']);
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
     * @return \backend\models\ReceptionAreaQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\ReceptionAreaQuery(get_called_class());
        return $query->where(['reception_area.deleted_by' => 0]);
    }
}
