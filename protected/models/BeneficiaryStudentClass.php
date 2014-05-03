<?php

/**
 * This is the model class for table "alsadaqat.beneficiary_student_class".
 *
 * The followings are the available columns in table 'alsadaqat.beneficiary_student_class':
 * @property string $id
 * @property string $class_name
 * @property string $major_name
 * @property string $school_name
 * @property string $address
 * @property string $start_at
 * @property string $end_at
 * @property string $beneficiary_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property OrganizationUser $owner
 * @property Beneficiary $beneficiary
 */
class BeneficiaryStudentClass extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.beneficiary_student_class';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('class_name, major_name, school_name, address, start_at, end_at, beneficiary_id, owner_id, created_at, updated_at, notes, options', 'required'),
			array('class_name, major_name, school_name, address', 'length', 'max'=>255),
			array('beneficiary_id, owner_id', 'length', 'max'=>11),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, class_name, major_name, school_name, address, start_at, end_at, beneficiary_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'class_name' => 'Class Name',
			'major_name' => 'Major Name',
			'school_name' => 'School Name',
			'address' => 'Address',
			'start_at' => 'Start At',
			'end_at' => 'End At',
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
		$criteria->compare('class_name',$this->class_name,true);
		$criteria->compare('major_name',$this->major_name,true);
		$criteria->compare('school_name',$this->school_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('start_at',$this->start_at,true);
		$criteria->compare('end_at',$this->end_at,true);
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
	 * @return BeneficiaryStudentClass the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
