<?php

/**
 * This is the model class for table "beneficiary".
 *
 * The followings are the available columns in table 'beneficiary':
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
 * @property string $has_paterfamilias
 * @property string $has_family_members
 * @property string $has_home
 * @property string $has_income
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
 * @property Country $nationality
 * @property Country $country
 * @property City $city
 * @property Organization $organization
 * @property OrganizationBranch $organizationBranch
 * @property OrganizationUser $donator
 * @property OrganizationUser $owner
 * @property BeneficiaryDisabled[] $beneficiaryDisableds
 * @property BeneficiaryFamilyMembers[] $beneficiaryFamilyMembers
 * @property BeneficiaryFinance[] $beneficiaryFinances
 * @property BeneficiaryHome[] $beneficiaryHomes
 * @property BeneficiaryOrphan[] $beneficiaryOrphans
 * @property BeneficiaryPaterfamilias[] $beneficiaryPaterfamiliases
 * @property BeneficiaryPoor[] $beneficiaryPoors
 * @property BeneficiaryResearchNotes[] $beneficiaryResearchNotes
 * @property BeneficiaryStudent[] $beneficiaryStudents
 * @property BeneficiaryStudentClass[] $beneficiaryStudentClasses
 * @property BeneficiaryTeacher[] $beneficiaryTeachers
 * @property BeneficiaryWidow[] $beneficiaryWidows
 */
class Beneficiary extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'beneficiary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('full_name, date_of_birth, address, nationality_id, country_id, city_id, donator_id', 'required'),
			array('full_name, email, address, personal_photo_path', 'length', 'max'=>255),
			array('ssn', 'length', 'max'=>32),
			array('email', 'email'),
			array('gender', 'length', 'max'=>6),
			array('home_phone, mobile', 'length', 'max'=>17),
			array('nationality_id, country_id, city_id, organization_id, organization_branch_id, donator_id, owner_id', 'length', 'max'=>11),
			array('beneficiary_type', 'length', 'max'=>8),
			array('has_paterfamilias, has_family_members, has_home, has_income', 'length', 'max'=>3),
			array('notes, options', 'length', 'max'=>1024),

            array('image', 'file', 'types'=>'jpg,gif,png,jpeg', 'allowEmpty'=>true, 'on'=>'update'),
            array('image, created_at, updated_at', 'safe'),

            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, full_name, ssn, gender, date_of_birth, email, home_phone, mobile, address, personal_photo_path, nationality_id, country_id, city_id, beneficiary_type, has_paterfamilias, has_family_members, has_home, has_income, organization_id, organization_branch_id, donator_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),

            array('owner_id',               'default', 'value' => Yii::app()->user->id,                     'setOnEmpty' => false ),
            array('organization_id',        'default', 'value' => Yii::app()->user->organization_id,        'setOnEmpty' => false ),
            array('organization_branch_id', 'default', 'value' => Yii::app()->user->organization_branch_id, 'setOnEmpty' => false ),

		);
	}

	public function defaultScope() {
		if (Rights::getAuthorizer()->isSuperuser(Yii::app()->user->id)) {
			return array(    
				'condition' => 	$this->getTableAlias(false, false) . '.organization_id='. Yii::app()->user->organization_id,
			);
		}
		return array(    
			'condition' => 	$this->getTableAlias(false, false) . '.organization_id='. Yii::app()->user->organization_id,
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
			'nationality' => array(self::BELONGS_TO, 'Country', 'nationality_id'),
			'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
			'city' => array(self::BELONGS_TO, 'City', 'city_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'organizationBranch' => array(self::BELONGS_TO, 'OrganizationBranch', 'organization_branch_id'),
			'donator' => array(self::BELONGS_TO, 'OrganizationUser', 'donator_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'beneficiaryDisableds' => array(self::HAS_MANY, 'BeneficiaryDisabled', 'beneficiary_id'),
			'beneficiaryFamilyMembers' => array(self::HAS_MANY, 'BeneficiaryFamilyMembers', 'beneficiary_id'),
			'beneficiaryFinances' => array(self::HAS_MANY, 'BeneficiaryFinance', 'beneficiary_id'),
			'beneficiaryHomes' => array(self::HAS_MANY, 'BeneficiaryHome', 'beneficiary_id'),
			'beneficiaryOrphans' => array(self::HAS_MANY, 'BeneficiaryOrphan', 'beneficiary_id'),
			'beneficiaryPaterfamiliases' => array(self::HAS_MANY, 'BeneficiaryPaterfamilias', 'beneficiary_id'),
			'beneficiaryPoors' => array(self::HAS_MANY, 'BeneficiaryPoor', 'beneficiary_id'),
			'beneficiaryResearchNotes' => array(self::HAS_MANY, 'BeneficiaryResearchNotes', 'beneficiary_id'),
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
			'id' => Yii::t('beneficiary','ID'),
			'full_name' => Yii::t('beneficiary','Full Name'),
			'ssn' => Yii::t('beneficiary','Ssn'),
			'gender' => Yii::t('beneficiary','Gender'),
			'date_of_birth' => Yii::t('beneficiary','Date Of Birth'),
			'email' => Yii::t('beneficiary','Email'),
			'home_phone' => Yii::t('beneficiary','Home Phone'),
			'mobile' => Yii::t('beneficiary','Mobile'),
			'address' => Yii::t('beneficiary','Address'),
			'personal_photo_path' => Yii::t('beneficiary','Personal Photo Path'),
			'nationality_id' => Yii::t('beneficiary','Nationality'),
			'country_id' => Yii::t('beneficiary','Country'),
			'city_id' => Yii::t('beneficiary','City'),
			'beneficiary_type' => Yii::t('beneficiary','Beneficiary Type'),
			'has_paterfamilias' => Yii::t('beneficiary','Has Paterfamilias'),
			'has_family_members' => Yii::t('beneficiary','Has Family Members'),
			'has_home' => Yii::t('beneficiary','Has Home'),
			'has_income' => Yii::t('beneficiary','Has Income'),
			'organization_id' => Yii::t('beneficiary','Organization'),
			'organization_branch_id' => Yii::t('beneficiary','Organization Branch'),
			'donator_id' => Yii::t('beneficiary','Donator'),
			'owner_id' => Yii::t('beneficiary','Owner'),
			'created_at' => Yii::t('beneficiary','Created At'),
			'updated_at' => Yii::t('beneficiary','Updated At'),
			'notes' => Yii::t('beneficiary','Notes'),
			'options' => Yii::t('beneficiary','Options'),
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
		$criteria->compare('has_paterfamilias',$this->has_paterfamilias,true);
		$criteria->compare('has_family_members',$this->has_family_members,true);
		$criteria->compare('has_home',$this->has_home,true);
		$criteria->compare('has_income',$this->has_income,true);
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

	public function getOptions(){
        $criteria         = new CDbCriteria;
        $criteria->select = 'id,full_name';
        //$criteria->addCondition('iso3 is NOT NUll AND iso3 !=""');

        return CHtml::listData($this->findAll($criteria),'id','full_name');
    }
    
    public function behaviors() {
        return array(
            'preview' => array(
                'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
                'previewHeight' => 200,
                'previewWidth'  => 200,
                // extension for image saving, can be also tiff, png or gif
                'extension' => 'jpg',
                // folder to store images
                'directory' => Yii::getPathOfAlias('webroot'). '/beneficiaries/'. $this->id. '/' .substr(sha1($this->id), 0, 10).'/'.substr(sha1($this->id), -10) . '/' . $this->id % 100, //Controller::getImagePath($this->id, 'donators'),
                // url for images folder
                'url' => Yii::app()->request->baseUrl . '/beneficiaries/'. $this->id . '/' . substr(sha1($this->id), 0, 10). '/' .substr(sha1($this->id), -10) . '/' . $this->id % 100, //Controller::getImagePath($this->id, 'donators'),
                // image versions
                'versions' => array(
                    'small' => array(
                        'resize' => array(70, null),
                        //'crop'   => array(55, null),
                    ),
                    'medium' => array(
                        'resize' => array(150, null),
                        //'crop'   => array(70, null),
                    ),
                   'large' => array(
                        'resize' => array(300, null),
                        //'crop'   => array(140, null),
                    ),
                   'avatar' => array(
                        'resize' => array(70, null),
                        //'crop'   => array(140, null),
                    )
                )
            ),
        );
    }
    
}
