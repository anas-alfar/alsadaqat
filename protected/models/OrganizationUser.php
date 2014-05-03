<?php

/**
 * This is the model class for table "alsadaqat.organization_user".
 *
 * The followings are the available columns in table 'alsadaqat.organization_user':
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
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property Beneficiary[] $beneficiaries
 * @property Beneficiary[] $beneficiaries1
 * @property BeneficiaryFinance[] $beneficiaryFinances
 * @property BeneficiaryHome[] $beneficiaryHomes
 * @property BeneficiaryOrphan[] $beneficiaryOrphans
 * @property BeneficiaryPaterfamilias[] $beneficiaryPaterfamiliases
 * @property BeneficiaryRelation[] $beneficiaryRelations
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
class OrganizationUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.organization_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, fullname, ssn, email, date_of_birth, home_phone, work_phone, local_mobile, international_mobile, nationality_id, organization_id, organization_branch_id, personal_photo_path, passport_photo_path, last_login_date, last_login_ip, created_at, updated_at, notes, options', 'required'),
			array('username, password, ssn', 'length', 'max'=>32),
			array('title', 'length', 'max'=>4),
			array('fullname, email, personal_photo_path, passport_photo_path', 'length', 'max'=>255),
			array('gender', 'length', 'max'=>6),
			array('home_phone, work_phone, local_mobile, international_mobile', 'length', 'max'=>17),
			array('nationality_id, organization_id, organization_branch_id', 'length', 'max'=>11),
			array('blocked', 'length', 'max'=>3),
			array('last_login_ip', 'length', 'max'=>15),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, title, fullname, ssn, gender, email, date_of_birth, home_phone, work_phone, local_mobile, international_mobile, nationality_id, organization_id, organization_branch_id, personal_photo_path, passport_photo_path, blocked, last_login_date, last_login_ip, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'beneficiaries' => array(self::HAS_MANY, 'Beneficiary', 'owner_id'),
			'beneficiaries1' => array(self::HAS_MANY, 'Beneficiary', 'donator_id'),
			'beneficiaryFinances' => array(self::HAS_MANY, 'BeneficiaryFinance', 'owner_id'),
			'beneficiaryHomes' => array(self::HAS_MANY, 'BeneficiaryHome', 'owner_id'),
			'beneficiaryOrphans' => array(self::HAS_MANY, 'BeneficiaryOrphan', 'owner_id'),
			'beneficiaryPaterfamiliases' => array(self::HAS_MANY, 'BeneficiaryPaterfamilias', 'owner_id'),
			'beneficiaryRelations' => array(self::HAS_MANY, 'BeneficiaryRelation', 'owner_id'),
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
			'nationality' => array(self::BELONGS_TO, 'Nationality', 'nationality_id'),
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
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'title' => 'Title',
			'fullname' => 'Fullname',
			'ssn' => 'Ssn',
			'gender' => 'Gender',
			'email' => 'Email',
			'date_of_birth' => 'Date Of Birth',
			'home_phone' => 'Home Phone',
			'work_phone' => 'Work Phone',
			'local_mobile' => 'Local Mobile',
			'international_mobile' => 'International Mobile',
			'nationality_id' => 'Nationality',
			'organization_id' => 'Organization',
			'organization_branch_id' => 'Organization Branch',
			'personal_photo_path' => 'Personal Photo Path',
			'passport_photo_path' => 'Passport Photo Path',
			'blocked' => 'Blocked',
			'last_login_date' => 'Last Login Date',
			'last_login_ip' => 'Last Login Ip',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'notes' => 'Notes',
			'options' => 'Options',
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
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('options',$this->options,true);

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
}
