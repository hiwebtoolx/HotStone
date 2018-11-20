<?php

namespace backend\models;

use common\models\User;
use PhpOffice\PhpSpreadsheet\Reader\Html;
use Yii;
use himiklab\sortablegrid\SortableGridBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $slug
 * @property string $content
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
 * @property User $createdBy
 * @property User $updatedBy
 * @property Post[] $posts
 */
class Category extends \yii\db\ActiveRecord
{

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
                'filePath' => '@uploads/uploads/[[pk]][[basename]]',
                'fileUrl' => '/uploads/[[pk]][[basename]]',
                'thumbPath' => '@uploads/uploads/thumbs/[[pk]][[basename]]',
                'thumbUrl' => '/uploads/thumbs/[[pk]][[basename]]',
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
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title',  'content'], 'required'],
            [['content'], 'string'],
            [['created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_at', 'deleted_by', 'created', 'modified', 'deleted', 'sort_order', 'lock'], 'integer'],
            [['title'], 'string', 'max' => 255],
            ['image', 'image', 'extensions' => 'jpeg, jpg , gif, png'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('resturant', 'ID'),
            'title' => Yii::t('resturant', 'Title'),
            'image' => Yii::t('resturant', 'Image'),
            'slug' => Yii::t('resturant', 'Slug'),
            'content' => Yii::t('resturant', 'Content'),
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
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['category_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoryQuery(get_called_class());
    }
    public function fields()
    {
        return [
            'id',
        ];
    }

//    public function fields()
//    {
//        return [
//            'image' => function($model){
//                  return Html::img(Yii::getAlias('@home'). $model->getThumbFileUrl('image', 'thumb'),
//                    ['width' => '70px']);
//
//            },
//        ];
//    }
}
