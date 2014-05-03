<?php

/**
 * This is the model class for table "alsadaqat.donator".
 *
 * The followings are the available columns in table 'alsadaqat.donator':
 * @property string $id
 * @property string $title
 * @property string $fullname
 * @property string $ssn
 * @property string $gender
 * @property string $email
 * @property string $date_of_birth
 * @property string $home_phone
 * @property string $work_phone
 * @property string $mobile
 * @property string $nationality_id
 * @property string $organization_id
 * @property string $organization_branch_id
 * @property string $owner_id
 * @property string $personal_photo_path
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property Nationality $nationality
 * @property Organization $organization
 * @property OrganizationBranch $organizationBranch
 * @property Owner $owner
 * @property Mosque[] $mosques
 */
class Donator extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.donator';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fullname, ssn, email, date_of_birth, home_phone, work_phone, mobile, nationality_id, organization_id, organization_branch_id, owner_id, personal_photo_path, created_at, updated_at, notes, options', 'required'),
			array('title', 'length', 'max'=>4),
			array('fullname, email, personal_photo_path', 'length', 'max'=>255),
			array('ssn', 'length', 'max'=>32),
			array('gender', 'length', 'max'=>6),
			array('home_phone, work_phone, mobile', 'length', 'max'=>17),
			array('nationality_id, organization_id, organization_branch_id, owner_id', 'length', 'max'=>11),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, fullname, ssn, gender, email, date_of_birth, home_phone, work_phone, mobile, nationality_id, organization_id, organization_branch_id, owner_id, personal_photo_path, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'nationality' => array(self::BELONGS_TO, 'Nationality', 'nationality_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'organizationBranch' => array(self::BELONGS_TO, 'OrganizationBranch', 'organization_branch_id'),
			'owner' => array(self::BELONGS_TO, 'Owner', 'owner_id'),
			'mosques' => array(self::HAS_MANY, 'Mosque', 'donator_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'fullname' => 'Fullname',
			'ssn' => 'Ssn',
			'gender' => 'Gender',
			'email' => 'Email',
			'date_of_birth' => 'Date Of Birth',
			'home_phone' => 'Home Phone',
			'work_phone' => 'Work Phone',
			'mobile' => 'Mobile',
			'nationality_id' => 'Nationality',
			'organization_id' => 'Organization',
			'organization_branch_id' => 'Organization Branch',
			'owner_id' => 'Owner',
			'personal_photo_path' => 'Personal Photo Path',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('ssn',$this->ssn,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('work_phone',$this->work_phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('nationality_id',$this->nationality_id,true);
		$criteria->compare('organization_id',$this->organization_id,true);
		$criteria->compare('organization_branch_id',$this->organization_branch_id,true);
		$criteria->compare('owner_id',$this->owner_id,true);
		$criteria->compare('personal_photo_path',$this->personal_photo_path,true);
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
	 * @return Donator the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
