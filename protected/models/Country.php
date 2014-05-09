<?php

/**
 * This is the model class for table "country".
 *
 * The followings are the available columns in table 'country':
 * @property string $id
 * @property string $name
 * @property string $name_ar
 * @property string $iso_code_2
 * @property string $iso_code_3
 * @property string $published
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Beneficiary[] $beneficiaries
 * @property Beneficiary[] $beneficiaries1
 * @property City[] $cities
 * @property Event[] $events
 * @property Mosque[] $mosques
 * @property MosqueAgent[] $mosqueAgents
 * @property OrganizationBranch[] $organizationBranches
 * @property OrganizationBranchCountry[] $organizationBranchCountries
 */
class Country extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'country';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, name_ar', 'required'),
			array('name', 'length', 'max'=>128),
			array('name_ar', 'length', 'max'=>255),
			array('iso_code_2', 'length', 'max'=>2),
			array('iso_code_3, published', 'length', 'max'=>3),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, name_ar, iso_code_2, iso_code_3, published, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'beneficiaries' => array(self::HAS_MANY, 'Beneficiary', 'nationality_id'),
			'beneficiaries1' => array(self::HAS_MANY, 'Beneficiary', 'country_id'),
			'cities' => array(self::HAS_MANY, 'City', 'country_id'),
			'events' => array(self::HAS_MANY, 'Event', 'country_id'),
			'mosques' => array(self::HAS_MANY, 'Mosque', 'country_id'),
			'mosqueAgents' => array(self::HAS_MANY, 'MosqueAgent', 'country_id'),
			'organizationBranches' => array(self::HAS_MANY, 'OrganizationBranch', 'country_id'),
			'organizationBranchCountries' => array(self::HAS_MANY, 'OrganizationBranchCountry', 'country_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('country','ID'),
			'name' => Yii::t('country','Name'),
			'name_ar' => Yii::t('country','Name Ar'),
			'iso_code_2' => Yii::t('country','Iso Code 2'),
			'iso_code_3' => Yii::t('country','Iso Code 3'),
			'published' => Yii::t('country','Published'),
			'created_at' => Yii::t('country','Created At'),
			'updated_at' => Yii::t('country','Updated At'),
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('name_ar',$this->name_ar,true);
		$criteria->compare('iso_code_2',$this->iso_code_2,true);
		$criteria->compare('iso_code_3',$this->iso_code_3,true);
		$criteria->compare('published',$this->published,true);
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
	 * @return Country the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
