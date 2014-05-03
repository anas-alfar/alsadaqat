<?php

/**
 * This is the model class for table "alsadaqat.beneficiary".
 *
 * The followings are the available columns in table 'alsadaqat.beneficiary':
 * @property string $id
 * @property string $full_name
 * @property string $ssn
 * @property string $gender
 * @property string $date_of_birth
 * @property string $email
 * @property string $home_phone
 * @property string $mobile
 * @property string $address
 * @property string $personal_photo_path
 * @property string $nationality_id
 * @property string $country_id
 * @property string $city_id
 * @property string $beneficiary_type
 * @property integer $has_paterfamilias
 * @property integer $has_family_members
 * @property integer $has_home
 * @property integer $has_income
 * @property string $organization_id
 * @property string $organization_branch_id
 * @property string $donator_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property OrganizationUser $owner
 * @property Country $nationality
 * @property Country $country
 * @property City $city
 * @property Organization $organization
 * @property OrganizationBranch $organizationBranch
 * @property OrganizationUser $donator
 * @property BeneficiaryFinance[] $beneficiaryFinances
 * @property BeneficiaryHome[] $beneficiaryHomes
 * @property BeneficiaryOrphan[] $beneficiaryOrphans
 * @property BeneficiaryPaterfamilias[] $beneficiaryPaterfamiliases
 * @property BeneficiaryStudent[] $beneficiaryStudents
 * @property BeneficiaryStudentClass[] $beneficiaryStudentClasses
 * @property BeneficiaryTeacher[] $beneficiaryTeachers
 * @property BeneficiaryWidow[] $beneficiaryWidows
 */
class Beneficiary extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.beneficiary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('full_name, ssn, date_of_birth, email, home_phone, mobile, address, personal_photo_path, nationality_id, country_id, city_id, has_paterfamilias, has_family_members, has_home, has_income, organization_id, organization_branch_id, donator_id, owner_id, created_at, updated_at, notes, options', 'required'),
			array('has_paterfamilias, has_family_members, has_home, has_income', 'numerical', 'integerOnly'=>true),
			array('full_name, email, address, personal_photo_path', 'length', 'max'=>255),
			array('ssn', 'length', 'max'=>32),
			array('gender', 'length', 'max'=>6),
			array('home_phone, mobile', 'length', 'max'=>17),
			array('nationality_id, country_id, city_id, organization_id, organization_branch_id, donator_id, owner_id', 'length', 'max'=>11),
			array('beneficiary_type', 'length', 'max'=>8),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, full_name, ssn, gender, date_of_birth, email, home_phone, mobile, address, personal_photo_path, nationality_id, country_id, city_id, beneficiary_type, has_paterfamilias, has_family_members, has_home, has_income, organization_id, organization_branch_id, donator_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'nationality' => array(self::BELONGS_TO, 'Country', 'nationality_id'),
			'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
			'city' => array(self::BELONGS_TO, 'City', 'city_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'organizationBranch' => array(self::BELONGS_TO, 'OrganizationBranch', 'organization_branch_id'),
			'donator' => array(self::BELONGS_TO, 'OrganizationUser', 'donator_id'),
			'beneficiaryFinances' => array(self::HAS_MANY, 'BeneficiaryFinance', 'beneficiary_id'),
			'beneficiaryHomes' => array(self::HAS_MANY, 'BeneficiaryHome', 'beneficiary_id'),
			'beneficiaryOrphans' => array(self::HAS_MANY, 'BeneficiaryOrphan', 'beneficiary_id'),
			'beneficiaryPaterfamiliases' => array(self::HAS_MANY, 'BeneficiaryPaterfamilias', 'beneficiary_id'),
			'beneficiaryStudents' => array(self::HAS_MANY, 'BeneficiaryStudent', 'beneficiary_id'),
			'beneficiaryStudentClasses' => array(self::HAS_MANY, 'BeneficiaryStudentClass', 'beneficiary_id'),
			'beneficiaryTeachers' => array(self::HAS_MANY, 'BeneficiaryTeacher', 'beneficiary_id'),
			'beneficiaryWidows' => array(self::HAS_MANY, 'BeneficiaryWidow', 'beneficiary_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'full_name' => 'Full Name',
			'ssn' => 'Ssn',
			'gender' => 'Gender',
			'date_of_birth' => 'Date Of Birth',
			'email' => 'Email',
			'home_phone' => 'Home Phone',
			'mobile' => 'Mobile',
			'address' => 'Address',
			'personal_photo_path' => 'Personal Photo Path',
			'nationality_id' => 'Nationality',
			'country_id' => 'Country',
			'city_id' => 'City',
			'beneficiary_type' => 'Beneficiary Type',
			'has_paterfamilias' => 'Has Paterfamilias',
			'has_family_members' => 'Has Family Members',
			'has_home' => 'Has Home',
			'has_income' => 'Has Income',
			'organization_id' => 'Organization',
			'organization_branch_id' => 'Organization Branch',
			'donator_id' => 'Donator',
			'owner_id' => 'Owner',
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
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('ssn',$this->ssn,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('personal_photo_path',$this->personal_photo_path,true);
		$criteria->compare('nationality_id',$this->nationality_id,true);
		$criteria->compare('country_id',$this->country_id,true);
		$criteria->compare('city_id',$this->city_id,true);
		$criteria->compare('beneficiary_type',$this->beneficiary_type,true);
		$criteria->compare('has_paterfamilias',$this->has_paterfamilias);
		$criteria->compare('has_family_members',$this->has_family_members);
		$criteria->compare('has_home',$this->has_home);
		$criteria->compare('has_income',$this->has_income);
		$criteria->compare('organization_id',$this->organization_id,true);
		$criteria->compare('organization_branch_id',$this->organization_branch_id,true);
		$criteria->compare('donator_id',$this->donator_id,true);
		$criteria->compare('owner_id',$this->owner_id,true);
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
	 * @return Beneficiary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
