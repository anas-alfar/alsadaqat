<?php

/**
 * This is the model class for table "alsadaqat.mosque_agent".
 *
 * The followings are the available columns in table 'alsadaqat.mosque_agent':
 * @property string $id
 * @property string $company_name
 * @property string $title
 * @property string $fullname
 * @property string $ssn
 * @property string $gender
 * @property string $email
 * @property string $home_phone
 * @property string $work_phone
 * @property string $mobile
 * @property string $address
 * @property string $bank_name
 * @property string $bank_branch_name
 * @property string $bank_branch_number
 * @property string $bank_swift_code
 * @property string $bank_account_number
 * @property string $personal_photo_path
 * @property string $country_id
 * @property string $city_id
 * @property string $organization_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property Mosque[] $mosques
 * @property Country $country
 * @property City $city
 * @property Organization $organization
 * @property OrganizationUser $owner
 * @property MosqueType[] $mosqueTypes
 */
class MosqueAgent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.mosque_agent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_name, fullname, ssn, email, home_phone, work_phone, mobile, address, bank_name, bank_branch_name, bank_branch_number, bank_swift_code, bank_account_number, personal_photo_path, country_id, city_id, organization_id, owner_id, created_at, updated_at, notes, options', 'required'),
			array('company_name, fullname, email, address, bank_name, bank_branch_name, bank_branch_number, bank_account_number, personal_photo_path', 'length', 'max'=>255),
			array('title', 'length', 'max'=>4),
			array('ssn, bank_swift_code', 'length', 'max'=>32),
			array('gender', 'length', 'max'=>6),
			array('home_phone, work_phone, mobile', 'length', 'max'=>17),
			array('country_id, city_id, organization_id, owner_id', 'length', 'max'=>11),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company_name, title, fullname, ssn, gender, email, home_phone, work_phone, mobile, address, bank_name, bank_branch_name, bank_branch_number, bank_swift_code, bank_account_number, personal_photo_path, country_id, city_id, organization_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'mosques' => array(self::HAS_MANY, 'Mosque', 'agent_id'),
			'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
			'city' => array(self::BELONGS_TO, 'City', 'city_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'mosqueTypes' => array(self::HAS_MANY, 'MosqueType', 'agent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'company_name' => 'Company Name',
			'title' => 'Title',
			'fullname' => 'Fullname',
			'ssn' => 'Ssn',
			'gender' => 'Gender',
			'email' => 'Email',
			'home_phone' => 'Home Phone',
			'work_phone' => 'Work Phone',
			'mobile' => 'Mobile',
			'address' => 'Address',
			'bank_name' => 'Bank Name',
			'bank_branch_name' => 'Bank Branch Name',
			'bank_branch_number' => 'Bank Branch Number',
			'bank_swift_code' => 'Bank Swift Code',
			'bank_account_number' => 'Bank Account Number',
			'personal_photo_path' => 'Personal Photo Path',
			'country_id' => 'Country',
			'city_id' => 'City',
			'organization_id' => 'Organization',
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
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('ssn',$this->ssn,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('work_phone',$this->work_phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('bank_branch_name',$this->bank_branch_name,true);
		$criteria->compare('bank_branch_number',$this->bank_branch_number,true);
		$criteria->compare('bank_swift_code',$this->bank_swift_code,true);
		$criteria->compare('bank_account_number',$this->bank_account_number,true);
		$criteria->compare('personal_photo_path',$this->personal_photo_path,true);
		$criteria->compare('country_id',$this->country_id,true);
		$criteria->compare('city_id',$this->city_id,true);
		$criteria->compare('organization_id',$this->organization_id,true);
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
	 * @return MosqueAgent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
