<?php

/**
 * This is the model class for table "alsadaqat.beneficiary_paterfamilias".
 *
 * The followings are the available columns in table 'alsadaqat.beneficiary_paterfamilias':
 * @property string $id
 * @property string $paterfamilias_first_name
 * @property string $paterfamilias_middle_name
 * @property string $paterfamilias_grandfather_name
 * @property string $paterfamilias_family_name
 * @property string $paterfamilias_date_of_birth
 * @property string $ssn
 * @property string $beneficiary_relation_id
 * @property string $beneficiary_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property OrganizationUser $owner
 * @property BeneficiaryRelation $beneficiaryRelation
 * @property Beneficiary $beneficiary
 */
class BeneficiaryPaterfamilias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.beneficiary_paterfamilias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paterfamilias_first_name, paterfamilias_middle_name, paterfamilias_grandfather_name, paterfamilias_family_name, paterfamilias_date_of_birth, ssn, beneficiary_relation_id, beneficiary_id, owner_id, created_at, updated_at, notes, options', 'required'),
			array('paterfamilias_first_name, paterfamilias_middle_name, paterfamilias_grandfather_name, paterfamilias_family_name', 'length', 'max'=>255),
			array('ssn', 'length', 'max'=>32),
			array('beneficiary_relation_id, beneficiary_id, owner_id', 'length', 'max'=>11),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, paterfamilias_first_name, paterfamilias_middle_name, paterfamilias_grandfather_name, paterfamilias_family_name, paterfamilias_date_of_birth, ssn, beneficiary_relation_id, beneficiary_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'beneficiaryRelation' => array(self::BELONGS_TO, 'BeneficiaryRelation', 'beneficiary_relation_id'),
			'beneficiary' => array(self::BELONGS_TO, 'Beneficiary', 'beneficiary_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'paterfamilias_first_name' => 'Paterfamilias First Name',
			'paterfamilias_middle_name' => 'Paterfamilias Middle Name',
			'paterfamilias_grandfather_name' => 'Paterfamilias Grandfather Name',
			'paterfamilias_family_name' => 'Paterfamilias Family Name',
			'paterfamilias_date_of_birth' => 'Paterfamilias Date Of Birth',
			'ssn' => 'Ssn',
			'beneficiary_relation_id' => 'Beneficiary Relation',
			'beneficiary_id' => 'Beneficiary',
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
		$criteria->compare('paterfamilias_first_name',$this->paterfamilias_first_name,true);
		$criteria->compare('paterfamilias_middle_name',$this->paterfamilias_middle_name,true);
		$criteria->compare('paterfamilias_grandfather_name',$this->paterfamilias_grandfather_name,true);
		$criteria->compare('paterfamilias_family_name',$this->paterfamilias_family_name,true);
		$criteria->compare('paterfamilias_date_of_birth',$this->paterfamilias_date_of_birth,true);
		$criteria->compare('ssn',$this->ssn,true);
		$criteria->compare('beneficiary_relation_id',$this->beneficiary_relation_id,true);
		$criteria->compare('beneficiary_id',$this->beneficiary_id,true);
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
	 * @return BeneficiaryPaterfamilias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
