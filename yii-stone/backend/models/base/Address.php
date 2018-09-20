<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "address".
 *
 * @property integer $id
 * @property integer $custome_id
 * @property string $first_name
 * @property string $address_line1
 * @property string $address_line2
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $postal_code
 *
 * @property \backend\models\Customer $custome
 */
class Address extends \yii\db\ActiveRecord
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
            'custome'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['custome_id', 'first_name', 'address_line1', 'address_line2', 'city', 'state', 'country', 'postal_code'], 'required'],
            [['custome_id'], 'integer'],
            [['first_name'], 'string', 'max' => 128],
            [['address_line1', 'address_line2'], 'string', 'max' => 255],
            [['city', 'state', 'country'], 'string', 'max' => 64],
            [['postal_code'], 'string', 'max' => 20],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
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
            'id' => Yii::t('stone', 'ID'),
            'custome_id' => Yii::t('stone', 'Custome ID'),
            'first_name' => Yii::t('stone', 'First Name'),
            'address_line1' => Yii::t('stone', 'Address Line1'),
            'address_line2' => Yii::t('stone', 'Address Line2'),
            'city' => Yii::t('stone', 'City'),
            'state' => Yii::t('stone', 'State'),
            'country' => Yii::t('stone', 'Country'),
            'postal_code' => Yii::t('stone', 'Postal Code'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustome()
    {
        return $this->hasOne(\backend\models\Customer::className(), ['id' => 'custome_id']);
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
     * @return \backend\models\AddressQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\AddressQuery(get_called_class());
        return $query->where(['address.deleted_by' => 0]);
    }
}
