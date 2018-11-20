<?php

namespace backend\models\api;

use backend\models\Branch;
use common\models\User;
use mootensai\behaviors\UUIDBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "consult_body_scrub".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $user_id
 * @property string $how_do_you_prefer_the_scrubbing
 * @property int $are_you_pregnant
 * @property int $are_you_recently_delivered
 * @property int $did_you_have_a_surgery_operation_during_the_last_3_months
 * @property string $when_was_your_last_laser_session
 * @property string $when_last_time_you_remove_the_hair
 * @property int $did_you_do_a_peeling
 * @property string $If_yes_when
 * @property string $which_hammam_or_body_scrub_do_you_prefer
 * @property int $rated
 * @property int $rate
 * @property string $client_signature
 * @property string $tech_signature
 * @property string $date_signature
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 * @property int $deleted_by
 * @property int $deleted_at
 * @property int $lock
 *
 * @property User $createdBy
 * @property User $user
 * @property Branch $branch
 */
class ConsultBodyScrub extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consult_body_scrub';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'user_id'], 'required'],
            [['branch_id', 'user_id', 'rate', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at'], 'integer'],
            [['how_do_you_prefer_the_scrubbing','client_signature' , 'tech_signature','client_review'], 'string'],
            //['client_signature', 'image', 'extensions' => 'jpeg, jpg , gif, png'],
            [['are_you_pregnant', 'are_you_recently_delivered', 'did_you_have_a_surgery_operation_during_the_last_3_months', 'did_you_do_a_peeling', 'rated', 'lock'], 'default', 'value' => 0],
            [['when_was_your_last_laser_session', 'when_last_time_you_remove_the_hair', 'If_yes_when', 'which_hammam_or_body_scrub_do_you_prefer', 'date_signature'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('stone', 'ID'),
            'branch_id' => Yii::t('stone', 'Branch ID'),
            'user_id' => Yii::t('stone', 'User ID'),
            'how_do_you_prefer_the_scrubbing' => Yii::t('stone', 'How Do You Prefer The Scrubbing'),
            'are_you_pregnant' => Yii::t('stone', 'Are You Pregnant'),
            'are_you_recently_delivered' => Yii::t('stone', 'Are You Recently Delivered'),
            'did_you_have_a_surgery_operation_during_the_last_3_months' => Yii::t('stone', 'Did You Have A Surgery Operation During The Last 3 Months'),
            'when_was_your_last_laser_session' => Yii::t('stone', 'When Was Your Last Laser Session'),
            'when_last_time_you_remove_the_hair' => Yii::t('stone', 'When Last Time You Remove The Hair'),
            'did_you_do_a_peeling' => Yii::t('stone', 'Did You Do A Peeling'),
            'If_yes_when' => Yii::t('stone', 'If Yes When'),
            'which_hammam_or_body_scrub_do_you_prefer' => Yii::t('stone', 'Which Hammam Or Body Scrub Do You Prefer'),
            'rated' => Yii::t('stone', 'Rated'),
            'rate' => Yii::t('stone', 'Rate'),
            'client_signature' => Yii::t('stone', 'Client Signature'),
            'tech_signature' => Yii::t('stone', 'Tech Signature'),
            'date_signature' => Yii::t('stone', 'Date Signature'),
            'created_by' => Yii::t('stone', 'Created By'),
            'updated_by' => Yii::t('stone', 'Updated By'),
            'created_at' => Yii::t('stone', 'Created At'),
            'updated_at' => Yii::t('stone', 'Updated At'),
            'deleted_by' => Yii::t('stone', 'Deleted By'),
            'deleted_at' => Yii::t('stone', 'Deleted At'),
            'lock' => Yii::t('stone', 'Lock'),
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(Branch::className(), ['id' => 'branch_id']);
    }

    /**
     * @inheritdoc
     * @return ConsultBodyScrubQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ConsultBodyScrubQuery(get_called_class());
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => time(),
            ],
//        'blameable' => [
//            'class' => BlameableBehavior::className(),
//            'createdByAttribute' => 'created_by',
//            'updatedByAttribute' => 'updated_by',
//        ],
//            'uuid' => [
//                'class' => UUIDBehavior::className(),
//                'column' => 'id',
//            ],
//            [
//                'class' => '\yiidreamteam\upload\ImageUploadBehavior',
//                'attribute' => 'client_signature',
//                'thumbs' => [
//                    'thumb' => ['width' => 400, 'height' => 300],
//                ],
//                'filePath' => '@uploads/posts/[[pk]][[basename]]',
//                'fileUrl' => '/posts/[[pk]][[basename]]',
//                'thumbPath' => '@uploads/posts/thumbs/[[pk]][[basename]]',
//                'thumbUrl' => '/posts/thumbs/[[pk]][[basename]]',
//            ],
        ];
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
