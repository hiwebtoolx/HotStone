<?php

namespace backend\models\api;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $user_id
 * @property string $name
 * @property int $branch_id
 * @property string $public_email
 * @property string $phone
 * @property string $gravatar_email
 * @property string $gravatar_id
 * @property string $location
 * @property string $website
 * @property string $bio
 * @property string $timezone
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'branch_id'], 'integer'],
            [['bio'], 'string'],
            [['name', 'public_email', 'gravatar_email', 'location', 'website'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 50],
            [['gravatar_id'], 'string', 'max' => 32],
            [['timezone'], 'string', 'max' => 40],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('stone', 'User ID'),
            'name' => Yii::t('stone', 'Name'),
            'branch_id' => Yii::t('stone', 'Branch ID'),
            'public_email' => Yii::t('stone', 'Public Email'),
            'phone' => Yii::t('stone', 'Phone'),
            'gravatar_email' => Yii::t('stone', 'Gravatar Email'),
            'gravatar_id' => Yii::t('stone', 'Gravatar ID'),
            'location' => Yii::t('stone', 'Location'),
            'website' => Yii::t('stone', 'Website'),
            'bio' => Yii::t('stone', 'Bio'),
            'timezone' => Yii::t('stone', 'Timezone'),
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
     * @inheritdoc
     * @return ProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProfileQuery(get_called_class());
    }
}
