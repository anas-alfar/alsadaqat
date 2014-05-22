<?php

/**
 * This is the model class for table "beneficiary_paterfamilias".
 *
 * The followings are the available columns in table 'beneficiary_paterfamilias':
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
 *
 * The followings are the available model relations:
 * @property BeneficiaryRelation $beneficiaryRelation
 * @property Beneficiary $beneficiary
 * @property OrganizationUser $owner
 */
class BeneficiaryPaterfamilias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'beneficiary_paterfamilias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paterfamilias_first_name, paterfamilias_middle_name, paterfamilias_grandfather_name, paterfamilias_family_name, paterfamilias_date_of_birth, beneficiary_relation_id, beneficiary_id, owner_id', 'required'),
			array('paterfamilias_first_name, paterfamilias_middle_name, paterfamilias_grandfather_name, paterfamilias_family_name', 'length', 'max'=>255),
			array('ssn', 'length', 'max'=>32),
			array('beneficiary_relation_id, beneficiary_id, owner_id', 'length', 'max'=>11),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, paterfamilias_first_name, paterfamilias_middle_name, paterfamilias_grandfather_name, paterfamilias_family_name, paterfamilias_date_of_birth, ssn, beneficiary_relation_id, beneficiary_id, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id' => Yii::t('beneficiary_paterfamilias','ID'),
			'paterfamilias_first_name' => Yii::t('beneficiary_paterfamilias','Paterfamilias First Name'),
			'paterfamilias_middle_name' => Yii::t('beneficiary_paterfamilias','Paterfamilias Middle Name'),
			'paterfamilias_grandfather_name' => Yii::t('beneficiary_paterfamilias','Paterfamilias Grandfather Name'),
			'paterfamilias_family_name' => Yii::t('beneficiary_paterfamilias','Paterfamilias Family Name'),
			'paterfamilias_date_of_birth' => Yii::t('beneficiary_paterfamilias','Paterfamilias Date Of Birth'),
			'ssn' => Yii::t('beneficiary_paterfamilias','Ssn'),
			'beneficiary_relation_id' => Yii::t('beneficiary_paterfamilias','Beneficiary Relation'),
			'beneficiary_id' => Yii::t('beneficiary_paterfamilias','Beneficiary'),
			'owner_id' => Yii::t('beneficiary_paterfamilias','Owner'),
			'created_at' => Yii::t('beneficiary_paterfamilias','Created At'),
			'updated_at' => Yii::t('beneficiary_paterfamilias','Updated At'),
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
