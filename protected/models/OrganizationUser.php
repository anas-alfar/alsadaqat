<?php

/**
 * This is the model class for table "organization_user".
 *
 * The followings are the available columns in table 'organization_user':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $title
 * @property string $fullname
 * @property string $ssn
 * @property string $gender
 * @property string $email
 * @property string $date_of_birth
 * @property string $home_phone
 * @property string $work_phone
 * @property string $local_mobile
 * @property string $international_mobile
 * @property string $nationality_id
 * @property string $organization_id
 * @property string $organization_branch_id
 * @property string $personal_photo_path
 * @property string $passport_photo_path
 * @property string $blocked
 * @property string $last_login_date
 * @property string $last_login_ip
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Beneficiary[] $beneficiaries
 * @property Beneficiary[] $beneficiaries1
 * @property BeneficiaryDisabled[] $beneficiaryDisableds
 * @property BeneficiaryFamilyMembers[] $beneficiaryFamilyMembers
 * @property BeneficiaryFinance[] $beneficiaryFinances
 * @property BeneficiaryHome[] $beneficiaryHomes
 * @property BeneficiaryOrphan[] $beneficiaryOrphans
 * @property BeneficiaryPaterfamilias[] $beneficiaryPaterfamiliases
 * @property BeneficiaryPoor[] $beneficiaryPoors
 * @property BeneficiaryRelation[] $beneficiaryRelations
 * @property BeneficiaryResearchNotes[] $beneficiaryResearchNotes
 * @property BeneficiaryStudent[] $beneficiaryStudents
 * @property BeneficiaryStudentClass[] $beneficiaryStudentClasses
 * @property BeneficiaryTeacher[] $beneficiaryTeachers
 * @property BeneficiaryWidow[] $beneficiaryWidows
 * @property EventPhoto[] $eventPhotos
 * @property Mosque[] $mosques
 * @property MosqueAgent[] $mosqueAgents
 * @property MosquePhoto[] $mosquePhotos
 * @property MosqueType[] $mosqueTypes
 * @property OrganizationBranchCountryCommitteeUser[] $organizationBranchCountryCommitteeUsers
 * @property Nationality $nationality
 * @property Organization $organization
 * @property OrganizationBranch $organizationBranch
 */
class OrganizationUser extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organization_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, fullname, ssn, email, date_of_birth, local_mobile, nationality_id, organization_id, organization_branch_id', 'required'),
			array('username, password, ssn', 'length', 'max'=>32),
			array('title', 'length', 'max'=>4),
			array('fullname, email, personal_photo_path, passport_photo_path', 'length', 'max'=>255),
			array('gender', 'length', 'max'=>6),
			array('home_phone, work_phone, local_mobile, international_mobile', 'length', 'max'=>17),
			array('nationality_id, organization_id, organization_branch_id', 'length', 'max'=>11),
			array('blocked', 'length', 'max'=>3),
			array('last_login_ip', 'length', 'max'=>15),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, title, fullname, ssn, gender, email, date_of_birth, home_phone, work_phone, local_mobile, international_mobile, nationality_id, organization_id, organization_branch_id, personal_photo_path, passport_photo_path, blocked, last_login_date, last_login_ip, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'beneficiaries' => array(self::HAS_MANY, 'Beneficiary', 'donator_id'),
			'beneficiaries1' => array(self::HAS_MANY, 'Beneficiary', 'owner_id'),
			'beneficiaryDisableds' => array(self::HAS_MANY, 'BeneficiaryDisabled', 'owner_id'),
			'beneficiaryFamilyMembers' => array(self::HAS_MANY, 'BeneficiaryFamilyMembers', 'owner_id'),
			'beneficiaryFinances' => array(self::HAS_MANY, 'BeneficiaryFinance', 'owner_id'),
			'beneficiaryHomes' => array(self::HAS_MANY, 'BeneficiaryHome', 'owner_id'),
			'beneficiaryOrphans' => array(self::HAS_MANY, 'BeneficiaryOrphan', 'owner_id'),
			'beneficiaryPaterfamiliases' => array(self::HAS_MANY, 'BeneficiaryPaterfamilias', 'owner_id'),
			'beneficiaryPoors' => array(self::HAS_MANY, 'BeneficiaryPoor', 'owner_id'),
			'beneficiaryRelations' => array(self::HAS_MANY, 'BeneficiaryRelation', 'owner_id'),
			'beneficiaryResearchNotes' => array(self::HAS_MANY, 'BeneficiaryResearchNotes', 'owner_id'),
			'beneficiaryStudents' => array(self::HAS_MANY, 'BeneficiaryStudent', 'owner_id'),
			'beneficiaryStudentClasses' => array(self::HAS_MANY, 'BeneficiaryStudentClass', 'owner_id'),
			'beneficiaryTeachers' => array(self::HAS_MANY, 'BeneficiaryTeacher', 'owner_id'),
			'beneficiaryWidows' => array(self::HAS_MANY, 'BeneficiaryWidow', 'owner_id'),
			'eventPhotos' => array(self::HAS_MANY, 'EventPhoto', 'owner_id'),
			'mosques' => array(self::HAS_MANY, 'Mosque', 'owner_id'),
			'mosqueAgents' => array(self::HAS_MANY, 'MosqueAgent', 'owner_id'),
			'mosquePhotos' => array(self::HAS_MANY, 'MosquePhoto', 'owner_id'),
			'mosqueTypes' => array(self::HAS_MANY, 'MosqueType', 'owner_id'),
			'organizationBranchCountryCommitteeUsers' => array(self::HAS_MANY, 'OrganizationBranchCountryCommitteeUser', 'organization_user_id'),
			'nationality' => array(self::BELONGS_TO, 'Country', 'nationality_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'organizationBranch' => array(self::BELONGS_TO, 'OrganizationBranch', 'organization_branch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('organization_user','ID'),
			'username' => Yii::t('organization_user','Username'),
			'password' => Yii::t('organization_user','Password'),
			'title' => Yii::t('organization_user','Title'),
			'fullname' => Yii::t('organization_user','Fullname'),
			'ssn' => Yii::t('organization_user','Ssn'),
			'gender' => Yii::t('organization_user','Gender'),
			'email' => Yii::t('organization_user','Email'),
			'date_of_birth' => Yii::t('organization_user','Date Of Birth'),
			'home_phone' => Yii::t('organization_user','Home Phone'),
			'work_phone' => Yii::t('organization_user','Work Phone'),
			'local_mobile' => Yii::t('organization_user','Local Mobile'),
			'international_mobile' => Yii::t('organization_user','International Mobile'),
			'nationality_id' => Yii::t('organization_user','Nationality'),
			'organization_id' => Yii::t('organization_user','Organization'),
			'organization_branch_id' => Yii::t('organization_user','Organization Branch'),
			'personal_photo_path' => Yii::t('organization_user','Personal Photo Path'),
			'passport_photo_path' => Yii::t('organization_user','Passport Photo Path'),
			'blocked' => Yii::t('organization_user','Blocked'),
			'last_login_date' => Yii::t('organization_user','Last Login Date'),
			'last_login_ip' => Yii::t('organization_user','Last Login Ip'),
			'created_at' => Yii::t('organization_user','Created At'),
			'updated_at' => Yii::t('organization_user','Updated At'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('ssn',$this->ssn,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('work_phone',$this->work_phone,true);
		$criteria->compare('local_mobile',$this->local_mobile,true);
		$criteria->compare('international_mobile',$this->international_mobile,true);
		$criteria->compare('nationality_id',$this->nationality_id,true);
		$criteria->compare('organization_id',$this->organization_id,true);
		$criteria->compare('organization_branch_id',$this->organization_branch_id,true);
		$criteria->compare('personal_photo_path',$this->personal_photo_path,true);
		$criteria->compare('passport_photo_path',$this->passport_photo_path,true);
		$criteria->compare('blocked',$this->blocked,true);
		$criteria->compare('last_login_date',$this->last_login_date,true);
		$criteria->compare('last_login_ip',$this->last_login_ip,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrganizationUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getOptions(){
        $criteria         = new CDbCriteria;
        $criteria->select = 'id,fullname';

        return CHtml::listData($this->findAll($criteria),'id','fullname');
    }
}
