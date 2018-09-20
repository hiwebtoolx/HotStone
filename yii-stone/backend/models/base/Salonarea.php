<?php

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "salon_area".
 *
 * @property integer $id
 * @property integer $hair_sweep_and_mop_floors
 * @property integer $clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha
 * @property integer $hair_remove_stains_and_dust_on_surfaces
 * @property integer $hair_clean_mirrors
 * @property integer $hair_clean_cart_and_trolleys
 * @property integer $hair_clean_drawers_and_cabinets
 * @property integer $hair_empty_trash
 * @property integer $hair_detect_and_change_busted_light
 * @property integer $shampoo_sweep_and_mop_floors
 * @property integer $shampoo_clean_under_chairs_from_hair_and_put_leader
 * @property integer $shampoo_clean_sinks_from_hair_and_product_residue
 * @property integer $shampoo_clean_shampoo_bowls
 * @property integer $shampoo_empty_trash
 * @property integer $shampoo_remove_stains_and_dust_on_surfaces
 * @property integer $shampoo_clean_mirrors
 * @property integer $shampoo_clean_the_product_containers
 * @property integer $shampoo_empty_towel_basket
 * @property integer $shampoo_detect_and_change_busted_light
 * @property integer $treatment_sweep_and_mop_floors
 * @property integer $treatment_clean_under_chairs_from_hair_and_put_leader
 * @property integer $treatment_clean_sinks_from_hair_and_product_residue
 * @property integer $treatment_empty_trash
 * @property integer $treatment_remove_stains_and_dust_on_surfaces
 * @property integer $treatment_draw_up_the_decoration
 * @property integer $treatment_clean_mixed_bowls
 * @property integer $treatment_clean_mirrors
 * @property integer $treatment_clean_the_product_containers
 * @property integer $treatment_empty_used_towel_bascket
 * @property integer $treatment_clean_the_product_containers2
 * @property integer $treatment_detect_and_change_busted_light
 * @property integer $pedicure_the_curtains_should_be_clean
 * @property integer $pedicure_sweep_and_mop_floors
 * @property integer $pedicure_clean_under_chairs__and_put_leader
 * @property integer $pedicure_clean_and_sanitize_sink
 * @property integer $pedicure_empty_trash
 * @property integer $pedicure_remove_stains_and_dust_on_surfaces
 * @property integer $pedicure_remove_basket_cleaning_items_and_dirty_towels
 * @property integer $pedicure_remove_empty_glasses
 * @property integer $manicure_bar_draw_up_products
 * @property integer $manicure_bar_empty_trash
 * @property integer $manicure_bar_clean_all_surfaces_with_a_disinfectant
 * @property integer $manicure_bar_clean_and_organize_nail_polish_racks
 * @property integer $manicure_bar_empty_used_towel_bascket
 * @property string $shift_am
 * @property string $shift_pm
 * @property string $shift_date
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $checked_by
 * @property integer $lock
 * @property integer $deleted_by
 * @property integer $deleted_at
 *
 * @property \backend\models\User $createdBy
 * @property \backend\models\User $checkedBy
 * @property \backend\models\User $updatedBy
 */
class Salonarea extends \yii\db\ActiveRecord
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
            'createdBy',
            'checkedBy',
            'updatedBy'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hair_sweep_and_mop_floors', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha', 'hair_remove_stains_and_dust_on_surfaces', 'hair_clean_mirrors', 'hair_clean_cart_and_trolleys', 'hair_clean_drawers_and_cabinets', 'hair_empty_trash', 'hair_detect_and_change_busted_light', 'shampoo_sweep_and_mop_floors', 'shampoo_clean_under_chairs_from_hair_and_put_leader', 'shampoo_clean_sinks_from_hair_and_product_residue', 'shampoo_clean_shampoo_bowls', 'shampoo_empty_trash', 'shampoo_remove_stains_and_dust_on_surfaces', 'shampoo_clean_mirrors', 'shampoo_clean_the_product_containers', 'shampoo_empty_towel_basket', 'shampoo_detect_and_change_busted_light', 'treatment_sweep_and_mop_floors', 'treatment_clean_under_chairs_from_hair_and_put_leader', 'treatment_clean_sinks_from_hair_and_product_residue', 'treatment_empty_trash', 'treatment_remove_stains_and_dust_on_surfaces', 'treatment_draw_up_the_decoration', 'treatment_clean_mixed_bowls', 'treatment_clean_mirrors', 'treatment_clean_the_product_containers', 'treatment_empty_used_towel_bascket', 'treatment_clean_the_product_containers2', 'treatment_detect_and_change_busted_light', 'pedicure_the_curtains_should_be_clean', 'pedicure_sweep_and_mop_floors', 'pedicure_clean_under_chairs__and_put_leader', 'pedicure_clean_and_sanitize_sink', 'pedicure_empty_trash', 'pedicure_remove_stains_and_dust_on_surfaces', 'pedicure_remove_basket_cleaning_items_and_dirty_towels', 'pedicure_remove_empty_glasses', 'manicure_bar_draw_up_products', 'manicure_bar_empty_trash', 'manicure_bar_clean_all_surfaces_with_a_disinfectant', 'manicure_bar_clean_and_organize_nail_polish_racks', 'manicure_bar_empty_used_towel_bascket', 'shift_am', 'shift_pm', 'shift_date', 'created_at', 'updated_at', 'created_by', 'updated_by', 'checked_by', 'lock', 'deleted_by', 'deleted_at'], 'required'],
            [['shampoo_sweep_and_mop_floors', 'shampoo_clean_under_chairs_from_hair_and_put_leader', 'created_at', 'updated_at', 'created_by', 'updated_by', 'checked_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date'], 'safe'],
            [['hair_sweep_and_mop_floors', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha', 'hair_remove_stains_and_dust_on_surfaces', 'hair_clean_mirrors', 'hair_clean_cart_and_trolleys', 'hair_clean_drawers_and_cabinets', 'hair_empty_trash', 'hair_detect_and_change_busted_light', 'shampoo_clean_sinks_from_hair_and_product_residue', 'shampoo_clean_shampoo_bowls', 'shampoo_empty_trash', 'shampoo_remove_stains_and_dust_on_surfaces', 'shampoo_clean_mirrors', 'shampoo_clean_the_product_containers', 'shampoo_empty_towel_basket', 'shampoo_detect_and_change_busted_light', 'treatment_sweep_and_mop_floors', 'treatment_clean_under_chairs_from_hair_and_put_leader', 'treatment_clean_sinks_from_hair_and_product_residue', 'treatment_empty_trash', 'treatment_remove_stains_and_dust_on_surfaces', 'treatment_draw_up_the_decoration', 'treatment_clean_mixed_bowls', 'treatment_clean_mirrors', 'treatment_clean_the_product_containers', 'treatment_empty_used_towel_bascket', 'treatment_clean_the_product_containers2', 'treatment_detect_and_change_busted_light', 'pedicure_the_curtains_should_be_clean', 'pedicure_sweep_and_mop_floors', 'pedicure_clean_under_chairs__and_put_leader', 'pedicure_clean_and_sanitize_sink', 'pedicure_empty_trash', 'pedicure_remove_stains_and_dust_on_surfaces', 'pedicure_remove_basket_cleaning_items_and_dirty_towels', 'pedicure_remove_empty_glasses', 'manicure_bar_draw_up_products', 'manicure_bar_empty_trash', 'manicure_bar_clean_all_surfaces_with_a_disinfectant', 'manicure_bar_clean_and_organize_nail_polish_racks', 'manicure_bar_empty_used_towel_bascket', 'lock'], 'string', 'max' => 1],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'salon_area';
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
            'hair_sweep_and_mop_floors' => Yii::t('stone', 'Hair Sweep And Mop Floors'),
            'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha' => Yii::t('stone', 'Clean Under Chairs From Hair And Put Leader Conditionner For Cha'),
            'hair_remove_stains_and_dust_on_surfaces' => Yii::t('stone', 'Hair Remove Stains And Dust On Surfaces'),
            'hair_clean_mirrors' => Yii::t('stone', 'Hair Clean Mirrors'),
            'hair_clean_cart_and_trolleys' => Yii::t('stone', 'Hair Clean Cart And Trolleys'),
            'hair_clean_drawers_and_cabinets' => Yii::t('stone', 'Hair Clean Drawers And Cabinets'),
            'hair_empty_trash' => Yii::t('stone', 'Hair Empty Trash'),
            'hair_detect_and_change_busted_light' => Yii::t('stone', 'Hair Detect And Change Busted Light'),
            'shampoo_sweep_and_mop_floors' => Yii::t('stone', 'Shampoo Sweep And Mop Floors'),
            'shampoo_clean_under_chairs_from_hair_and_put_leader' => Yii::t('stone', 'Shampoo Clean Under Chairs From Hair And Put Leader'),
            'shampoo_clean_sinks_from_hair_and_product_residue' => Yii::t('stone', 'Shampoo Clean Sinks From Hair And Product Residue'),
            'shampoo_clean_shampoo_bowls' => Yii::t('stone', 'Shampoo Clean Shampoo Bowls'),
            'shampoo_empty_trash' => Yii::t('stone', 'Shampoo Empty Trash'),
            'shampoo_remove_stains_and_dust_on_surfaces' => Yii::t('stone', 'Shampoo Remove Stains And Dust On Surfaces'),
            'shampoo_clean_mirrors' => Yii::t('stone', 'Shampoo Clean Mirrors'),
            'shampoo_clean_the_product_containers' => Yii::t('stone', 'Shampoo Clean The Product Containers'),
            'shampoo_empty_towel_basket' => Yii::t('stone', 'Shampoo Empty Towel Basket'),
            'shampoo_detect_and_change_busted_light' => Yii::t('stone', 'Shampoo Detect And Change Busted Light'),
            'treatment_sweep_and_mop_floors' => Yii::t('stone', 'Treatment Sweep And Mop Floors'),
            'treatment_clean_under_chairs_from_hair_and_put_leader' => Yii::t('stone', 'Treatment Clean Under Chairs From Hair And Put Leader'),
            'treatment_clean_sinks_from_hair_and_product_residue' => Yii::t('stone', 'Treatment Clean Sinks From Hair And Product Residue'),
            'treatment_empty_trash' => Yii::t('stone', 'Treatment Empty Trash'),
            'treatment_remove_stains_and_dust_on_surfaces' => Yii::t('stone', 'Treatment Remove Stains And Dust On Surfaces'),
            'treatment_draw_up_the_decoration' => Yii::t('stone', 'Treatment Draw Up The Decoration'),
            'treatment_clean_mixed_bowls' => Yii::t('stone', 'Treatment Clean Mixed Bowls'),
            'treatment_clean_mirrors' => Yii::t('stone', 'Treatment Clean Mirrors'),
            'treatment_clean_the_product_containers' => Yii::t('stone', 'Treatment Clean The Product Containers'),
            'treatment_empty_used_towel_bascket' => Yii::t('stone', 'Treatment Empty Used Towel Bascket'),
            'treatment_clean_the_product_containers2' => Yii::t('stone', 'Treatment Clean The Product Containers2'),
            'treatment_detect_and_change_busted_light' => Yii::t('stone', 'Treatment Detect And Change Busted Light'),
            'pedicure_the_curtains_should_be_clean' => Yii::t('stone', 'Pedicure The Curtains Should Be Clean'),
            'pedicure_sweep_and_mop_floors' => Yii::t('stone', 'Pedicure Sweep And Mop Floors'),
            'pedicure_clean_under_chairs__and_put_leader' => Yii::t('stone', 'Pedicure Clean Under Chairs  And Put Leader'),
            'pedicure_clean_and_sanitize_sink' => Yii::t('stone', 'Pedicure Clean And Sanitize Sink'),
            'pedicure_empty_trash' => Yii::t('stone', 'Pedicure Empty Trash'),
            'pedicure_remove_stains_and_dust_on_surfaces' => Yii::t('stone', 'Pedicure Remove Stains And Dust On Surfaces'),
            'pedicure_remove_basket_cleaning_items_and_dirty_towels' => Yii::t('stone', 'Pedicure Remove Basket Cleaning Items And Dirty Towels'),
            'pedicure_remove_empty_glasses' => Yii::t('stone', 'Pedicure Remove Empty Glasses'),
            'manicure_bar_draw_up_products' => Yii::t('stone', 'Manicure Bar Draw Up Products'),
            'manicure_bar_empty_trash' => Yii::t('stone', 'Manicure Bar Empty Trash'),
            'manicure_bar_clean_all_surfaces_with_a_disinfectant' => Yii::t('stone', 'Manicure Bar Clean All Surfaces With A Disinfectant'),
            'manicure_bar_clean_and_organize_nail_polish_racks' => Yii::t('stone', 'Manicure Bar Clean And Organize Nail Polish Racks'),
            'manicure_bar_empty_used_towel_bascket' => Yii::t('stone', 'Manicure Bar Empty Used Towel Bascket'),
            'shift_am' => Yii::t('stone', 'Shift Am'),
            'shift_pm' => Yii::t('stone', 'Shift Pm'),
            'shift_date' => Yii::t('stone', 'Shift Date'),
            'checked_by' => Yii::t('stone', 'Checked By'),
            'lock' => Yii::t('stone', 'Lock'),
        ];
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
    public function getCheckedBy()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'checked_by']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'updated_by']);
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
     * @return \backend\models\SalonareaQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\SalonareaQuery(get_called_class());
        return $query->where(['salon_area.deleted_by' => 0]);
    }
}
