<?php

/**
 * This is the model class for table "beneficiary_teacher".
 *
 * The followings are the available columns in table 'beneficiary_teacher':
 * @property string $id
 * @property string $scientific_degree
 * @property string $beneficiary_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Beneficiary $beneficiary
 * @property OrganizationUser $owner
 */
class BeneficiaryTeacher extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'beneficiary_teacher';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('scientific_degree, beneficiary_id, owner_id', 'required'),
			array('scientific_degree', 'length', 'max'=>255),
			array('beneficiary_id, owner_id', 'length', 'max'=>11),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, scientific_degree, beneficiary_id, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id' => Yii::t('beneficiary_teacher','ID'),
			'scientific_degree' => Yii::t('beneficiary_teacher','Scientific Degree'),
			'beneficiary_id' => Yii::t('beneficiary_teacher','Beneficiary'),
			'owner_id' => Yii::t('beneficiary_teacher','Owner'),
			'created_at' => Yii::t('beneficiary_teacher','Created At'),
			'updated_at' => Yii::t('beneficiary_teacher','Updated At'),
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
		$criteria->compare('scientific_degree',$this->scientific_degree,true);
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
	 * @return BeneficiaryTeacher the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
