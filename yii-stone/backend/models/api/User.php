<?php

namespace backend\models\api;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property int $status
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property int $confirmed_at
 * @property string $unconfirmed_email
 * @property int $blocked_at
 * @property string $registration_ip
 * @property int $created_at
 * @property int $updated_at
 * @property int $flags
 * @property int $last_login_at
 *
 * @property AcrylicGel[] $acrylicGels
 * @property AcrylicGel[] $acrylicGels0
 * @property AcrylicGel[] $acrylicGels1
 * @property Category[] $categories
 * @property Category[] $categories0
 * @property Certificate[] $certificates
 * @property Certificate[] $certificates0
 * @property Certificate[] $certificates1
 * @property CertificateRequest[] $certificateRequests
 * @property CertificateRequest[] $certificateRequests0
 * @property CertificateRequest[] $certificateRequests1
 * @property CommonArea[] $commonAreas
 * @property CommonArea[] $commonAreas0
 * @property CommonAreaBackzone[] $commonAreaBackzones
 * @property CommonAreaBackzone[] $commonAreaBackzones0
 * @property CommonAreaBreak[] $commonAreaBreaks
 * @property CommonAreaBreak[] $commonAreaBreaks0
 * @property CommonAreaChanging[] $commonAreaChangings
 * @property CommonAreaChanging[] $commonAreaChangings0
 * @property CommonAreaElevator[] $commonAreaElevators
 * @property CommonAreaElevator[] $commonAreaElevators0
 * @property CommonAreaHallways[] $commonAreaHallways
 * @property CommonAreaHallways[] $commonAreaHallways0
 * @property CommonAreaLaundry[] $commonAreaLaundries
 * @property CommonAreaLaundry[] $commonAreaLaundries0
 * @property CommonAreaPrayer[] $commonAreaPrayers
 * @property CommonAreaPrayer[] $commonAreaPrayers0
 * @property CommonAreaRelaxation[] $commonAreaRelaxations
 * @property CommonAreaRelaxation[] $commonAreaRelaxations0
 * @property CommonAreaToilets[] $commonAreaToilets
 * @property CommonAreaToilets[] $commonAreaToilets0
 * @property CommonAreaWaiting[] $commonAreaWaitings
 * @property CommonAreaWaiting[] $commonAreaWaitings0
 * @property ConsultBodyScrub[] $consultBodyScrubs
 * @property ConsultBodyScrub[] $consultBodyScrubs0
 * @property EntranceArea[] $entranceAreas
 * @property EntranceArea[] $entranceAreas0
 * @property FacialTreatment[] $facialTreatments
 * @property FacialTreatment[] $facialTreatments0
 * @property FacialTreatment[] $facialTreatments1
 * @property FrontHouse[] $frontHouses
 * @property FrontHouseBar[] $frontHouseBars
 * @property FrontHouseBar[] $frontHouseBars0
 * @property FrontHouseOpening[] $frontHouseOpenings
 * @property FrontHouseOpening[] $frontHouseOpenings0
 * @property FrontHouseReception[] $frontHouseReceptions
 * @property FrontHouseReception[] $frontHouseReceptions0
 * @property FrontOfTheHouse[] $frontOfTheHouses
 * @property FrontOfTheHouse[] $frontOfTheHouses0
 * @property FrontOfTheHouse[] $frontOfTheHouses1
 * @property HairMakeup[] $hairMakeups
 * @property HairMakeup[] $hairMakeups0
 * @property Health[] $healths
 * @property Health[] $healths0
 * @property Health[] $healths1
 * @property KeratinConsultation[] $keratinConsultations
 * @property KeratinConsultation[] $keratinConsultations0
 * @property KeratinConsultation[] $keratinConsultations1
 * @property Manicure[] $manicures
 * @property Manicure[] $manicures0
 * @property ManicurePedicure[] $manicurePedicures
 * @property ManicurePedicure[] $manicurePedicures0
 * @property ManicurePedicure[] $manicurePedicures1
 * @property Massage[] $massages
 * @property Massage[] $massages0
 * @property Massage[] $massages1
 * @property Post[] $posts
 * @property Post[] $posts0
 * @property Post[] $posts1
 * @property Post[] $posts2
 * @property ProductBarArea[] $productBarAreas
 * @property ProductBarArea[] $productBarAreas0
 * @property ProductionArea[] $productionAreas
 * @property ProductionAreaOpening[] $productionAreaOpenings
 * @property ProductionAreaOpening[] $productionAreaOpenings0
 * @property Profile $profile
 * @property ReceptionArea[] $receptionAreas
 * @property ReceptionArea[] $receptionAreas0
 * @property SalonArea[] $salonAreas
 * @property SalonArea[] $salonAreas0
 * @property SalonArea[] $salonAreas1
 * @property SocialAccount[] $socialAccounts
 * @property Spa[] $spas
 * @property Spa[] $spas0
 * @property SpaArea[] $spaAreas
 * @property SpaArea[] $spaAreas0
 * @property SpaArea[] $spaAreas1
 * @property Token[] $tokens
 * @property VisitsList[] $visitsLists
 * @property VisitsList[] $visitsLists0
 * @property VisitsList[] $visitsLists1
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'status', 'password_hash', 'password_reset_token', 'auth_key', 'created_at', 'updated_at'], 'required'],
            [['status', 'confirmed_at', 'blocked_at', 'created_at', 'updated_at', 'flags', 'last_login_at'], 'integer'],
            [['username', 'email', 'unconfirmed_email'], 'string', 'max' => 255],
            [['password_hash'], 'string', 'max' => 60],
            [['password_reset_token'], 'string', 'max' => 100],
            [['auth_key'], 'string', 'max' => 32],
            [['registration_ip'], 'string', 'max' => 45],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('stone', 'ID'),
            'username' => Yii::t('stone', 'Username'),
            'email' => Yii::t('stone', 'Email'),
            'status' => Yii::t('stone', 'Status'),
            'password_hash' => Yii::t('stone', 'Password Hash'),
            'password_reset_token' => Yii::t('stone', 'Password Reset Token'),
            'auth_key' => Yii::t('stone', 'Auth Key'),
            'confirmed_at' => Yii::t('stone', 'Confirmed At'),
            'unconfirmed_email' => Yii::t('stone', 'Unconfirmed Email'),
            'blocked_at' => Yii::t('stone', 'Blocked At'),
            'registration_ip' => Yii::t('stone', 'Registration Ip'),
            'created_at' => Yii::t('stone', 'Created At'),
            'updated_at' => Yii::t('stone', 'Updated At'),
            'flags' => Yii::t('stone', 'Flags'),
            'last_login_at' => Yii::t('stone', 'Last Login At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcrylicGels()
    {
        return $this->hasMany(AcrylicGel::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcrylicGels0()
    {
        return $this->hasMany(AcrylicGel::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcrylicGels1()
    {
        return $this->hasMany(AcrylicGel::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories0()
    {
        return $this->hasMany(Category::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCertificates()
    {
        return $this->hasMany(Certificate::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCertificates0()
    {
        return $this->hasMany(Certificate::className(), ['deleted_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCertificates1()
    {
        return $this->hasMany(Certificate::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCertificateRequests()
    {
        return $this->hasMany(CertificateRequest::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCertificateRequests0()
    {
        return $this->hasMany(CertificateRequest::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCertificateRequests1()
    {
        return $this->hasMany(CertificateRequest::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreas()
    {
        return $this->hasMany(CommonArea::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreas0()
    {
        return $this->hasMany(CommonArea::className(), ['checked_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaBackzones()
    {
        return $this->hasMany(CommonAreaBackzone::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaBackzones0()
    {
        return $this->hasMany(CommonAreaBackzone::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaBreaks()
    {
        return $this->hasMany(CommonAreaBreak::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaBreaks0()
    {
        return $this->hasMany(CommonAreaBreak::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaChangings()
    {
        return $this->hasMany(CommonAreaChanging::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaChangings0()
    {
        return $this->hasMany(CommonAreaChanging::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaElevators()
    {
        return $this->hasMany(CommonAreaElevator::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaElevators0()
    {
        return $this->hasMany(CommonAreaElevator::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaHallways()
    {
        return $this->hasMany(CommonAreaHallways::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaHallways0()
    {
        return $this->hasMany(CommonAreaHallways::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaLaundries()
    {
        return $this->hasMany(CommonAreaLaundry::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaLaundries0()
    {
        return $this->hasMany(CommonAreaLaundry::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaPrayers()
    {
        return $this->hasMany(CommonAreaPrayer::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaPrayers0()
    {
        return $this->hasMany(CommonAreaPrayer::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaRelaxations()
    {
        return $this->hasMany(CommonAreaRelaxation::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaRelaxations0()
    {
        return $this->hasMany(CommonAreaRelaxation::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaToilets()
    {
        return $this->hasMany(CommonAreaToilets::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaToilets0()
    {
        return $this->hasMany(CommonAreaToilets::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaWaitings()
    {
        return $this->hasMany(CommonAreaWaiting::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonAreaWaitings0()
    {
        return $this->hasMany(CommonAreaWaiting::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsultBodyScrubs()
    {
        return $this->hasMany(ConsultBodyScrub::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsultBodyScrubs0()
    {
        return $this->hasMany(ConsultBodyScrub::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntranceAreas()
    {
        return $this->hasMany(EntranceArea::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntranceAreas0()
    {
        return $this->hasMany(EntranceArea::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacialTreatments()
    {
        return $this->hasMany(FacialTreatment::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacialTreatments0()
    {
        return $this->hasMany(FacialTreatment::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacialTreatments1()
    {
        return $this->hasMany(FacialTreatment::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontHouses()
    {
        return $this->hasMany(FrontHouse::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontHouseBars()
    {
        return $this->hasMany(FrontHouseBar::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontHouseBars0()
    {
        return $this->hasMany(FrontHouseBar::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontHouseOpenings()
    {
        return $this->hasMany(FrontHouseOpening::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontHouseOpenings0()
    {
        return $this->hasMany(FrontHouseOpening::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontHouseReceptions()
    {
        return $this->hasMany(FrontHouseReception::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontHouseReceptions0()
    {
        return $this->hasMany(FrontHouseReception::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontOfTheHouses()
    {
        return $this->hasMany(FrontOfTheHouse::className(), ['checked_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontOfTheHouses0()
    {
        return $this->hasMany(FrontOfTheHouse::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrontOfTheHouses1()
    {
        return $this->hasMany(FrontOfTheHouse::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHairMakeups()
    {
        return $this->hasMany(HairMakeup::className(), ['checked_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHairMakeups0()
    {
        return $this->hasMany(HairMakeup::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHealths()
    {
        return $this->hasMany(Health::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHealths0()
    {
        return $this->hasMany(Health::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHealths1()
    {
        return $this->hasMany(Health::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeratinConsultations()
    {
        return $this->hasMany(KeratinConsultation::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeratinConsultations0()
    {
        return $this->hasMany(KeratinConsultation::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeratinConsultations1()
    {
        return $this->hasMany(KeratinConsultation::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManicures()
    {
        return $this->hasMany(Manicure::className(), ['checked_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManicures0()
    {
        return $this->hasMany(Manicure::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManicurePedicures()
    {
        return $this->hasMany(ManicurePedicure::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManicurePedicures0()
    {
        return $this->hasMany(ManicurePedicure::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManicurePedicures1()
    {
        return $this->hasMany(ManicurePedicure::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMassages()
    {
        return $this->hasMany(Massage::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMassages0()
    {
        return $this->hasMany(Massage::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMassages1()
    {
        return $this->hasMany(Massage::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts0()
    {
        return $this->hasMany(Post::className(), ['deleted_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts1()
    {
        return $this->hasMany(Post::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts2()
    {
        return $this->hasMany(Post::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductBarAreas()
    {
        return $this->hasMany(ProductBarArea::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductBarAreas0()
    {
        return $this->hasMany(ProductBarArea::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductionAreas()
    {
        return $this->hasMany(ProductionArea::className(), ['checked_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductionAreaOpenings()
    {
        return $this->hasMany(ProductionAreaOpening::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductionAreaOpenings0()
    {
        return $this->hasMany(ProductionAreaOpening::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceptionAreas()
    {
        return $this->hasMany(ReceptionArea::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceptionAreas0()
    {
        return $this->hasMany(ReceptionArea::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalonAreas()
    {
        return $this->hasMany(SalonArea::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalonAreas0()
    {
        return $this->hasMany(SalonArea::className(), ['checked_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalonAreas1()
    {
        return $this->hasMany(SalonArea::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocialAccounts()
    {
        return $this->hasMany(SocialAccount::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpas()
    {
        return $this->hasMany(Spa::className(), ['checked_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpas0()
    {
        return $this->hasMany(Spa::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpaAreas()
    {
        return $this->hasMany(SpaArea::className(), ['checked_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpaAreas0()
    {
        return $this->hasMany(SpaArea::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpaAreas1()
    {
        return $this->hasMany(SpaArea::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTokens()
    {
        return $this->hasMany(Token::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitsLists()
    {
        return $this->hasMany(VisitsList::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitsLists0()
    {
        return $this->hasMany(VisitsList::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitsLists1()
    {
        return $this->hasMany(VisitsList::className(), ['user_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}
