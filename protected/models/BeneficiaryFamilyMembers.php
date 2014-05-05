<?php

/**
 * This is the model class for table "beneficiary_family_members".
 *
 * The followings are the available columns in table 'beneficiary_family_members':
 * @property string $id
 * @property string $full_name
 * @property string $ssn
 * @property string $date_of_birth
 * @property string $beneficiary_relation_id
 * @property string $marital_status
 * @property string $educational_status
 * @property string $health_status
 * @property string $business
 * @property string $other
 * @property string $beneficiary_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property BeneficiaryRelation $beneficiaryRelation
 * @property Beneficiary $beneficiary
 * @property OrganizationUser $owner
 */
class BeneficiaryFamilyMembers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'beneficiary_family_members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('full_name, ssn, beneficiary_relation_id, beneficiary_id, owner_id', 'required'),
			array('full_name, marital_status, educational_status, health_status, business, other', 'length', 'max'=>255),
			array('ssn', 'length', 'max'=>32),
			array('beneficiary_relation_id, beneficiary_id, owner_id', 'length', 'max'=>11),
			array('date_of_birth, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, full_name, ssn, date_of_birth, beneficiary_relation_id, marital_status, educational_status, health_status, business, other, beneficiary_id, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'beneficiaryRelation' => array(self::BELONGS_TO, 'BeneficiaryRelation', 'beneficiary_relation_id'),
			'beneficiary' => array(self::BELONGS_TO, 'Beneficiary', 'beneficiary_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('beneficiary_family_members','ID'),
			'full_name' => Yii::t('beneficiary_family_members','Full Name'),
			'ssn' => Yii::t('beneficiary_family_members','Ssn'),
			'date_of_birth' => Yii::t('beneficiary_family_members','Date Of Birth'),
			'beneficiary_relation_id' => Yii::t('beneficiary_family_members','Beneficiary Relation'),
			'marital_status' => Yii::t('beneficiary_family_members','Marital Status'),
			'educational_status' => Yii::t('beneficiary_family_members','Educational Status'),
			'health_status' => Yii::t('beneficiary_family_members','Health Status'),
			'business' => Yii::t('beneficiary_family_members','Business'),
			'other' => Yii::t('beneficiary_family_members','Other'),
			'beneficiary_id' => Yii::t('beneficiary_family_members','Beneficiary'),
			'owner_id' => Yii::t('beneficiary_family_members','Owner'),
			'created_at' => Yii::t('beneficiary_family_members','Created At'),
			'updated_at' => Yii::t('beneficiary_family_members','Updated At'),
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
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('beneficiary_relation_id',$this->beneficiary_relation_id,true);
		$criteria->compare('marital_status',$this->marital_status,true);
		$criteria->compare('educational_status',$this->educational_status,true);
		$criteria->compare('health_status',$this->health_status,true);
		$criteria->compare('business',$this->business,true);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('beneficiary_id',$this->beneficiary_id,true);
		$criteria->compare('owner_id',$this->owner_id,true);
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
	 * @return BeneficiaryFamilyMembers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
