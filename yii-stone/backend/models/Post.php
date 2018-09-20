<?php

namespace backend\models;

use common\models\User;
use Yii;
use himiklab\sortablegrid\SortableGridBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $category_id
 * @property double $price
 * @property int $user_id
 * @property string $content
 * @property string $image
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $deleted_at
 * @property int $deleted_by
 * @property int $created
 * @property int $modified
 * @property int $deleted
 * @property int $sort_order
 * @property int $lock
 *
 * @property Category $category
 * @property User $createdBy
 * @property User $deletedBy
 * @property User $updatedBy
 * @property User $user
 * @property Size[] $sizes
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }
    public function behaviors()
    {
        return [
            'sort' => [
                'class' => SortableGridBehavior::className(),
                'sortableAttribute' => 'sort_order'
            ],
            [
                'class' => '\yiidreamteam\upload\ImageUploadBehavior',
                'attribute' => 'image',
                'thumbs' => [
                    'thumb' => ['width' => 400, 'height' => 300],
                ],
                'filePath' => '@uploads/posts/[[pk]][[basename]]',
                'fileUrl' => '/posts/[[pk]][[basename]]',
                'thumbPath' => '@uploads/posts/thumbs/[[pk]][[basename]]',
                'thumbUrl' => '/posts/thumbs/[[pk]][[basename]]',
            ],
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',

            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'content', 'status'], 'required'],
            [['category_id', 'user_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by', 'created', 'modified', 'deleted', 'sort_order', 'lock'], 'integer'],
            [['content'], 'string'],
            [['title','price'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 1],
            ['image', 'image', 'extensions' => 'jpeg, jpg , gif, png'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['deleted_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['deleted_by' => 'id']],
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
            'id' => Yii::t('resturant', 'ID'),
            'category_id' => Yii::t('resturant', 'Category ID'),
            'price' => Yii::t('resturant', 'Price'),
            'user_id' => Yii::t('resturant', 'User ID'),
            'content' => Yii::t('resturant', 'Content'),
            'image' => Yii::t('resturant', 'Image'),
            'status' => Yii::t('resturant', 'Status'),
            'created_at' => Yii::t('resturant', 'Created At'),
            'updated_at' => Yii::t('resturant', 'Updated At'),
            'created_by' => Yii::t('resturant', 'Created By'),
            'updated_by' => Yii::t('resturant', 'Updated By'),
            'deleted_at' => Yii::t('resturant', 'Deleted At'),
            'deleted_by' => Yii::t('resturant', 'Deleted By'),
            'created' => Yii::t('resturant', 'Created'),
            'modified' => Yii::t('resturant', 'Modified'),
            'deleted' => Yii::t('resturant', 'Deleted'),
            'sort_order' => Yii::t('resturant', 'Sort Order'),
            'lock' => Yii::t('resturant', 'Lock'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
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
    public function getDeletedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'deleted_by']);
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
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        return $this->hasMany(Size::className(), ['post_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return PostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PostQuery(get_called_class());
    }
}
