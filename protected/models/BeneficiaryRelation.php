<?php

/**
 * This is the model class for table "beneficiary_relation".
 *
 * The followings are the available columns in table 'beneficiary_relation':
 * @property string $id
 * @property string $name
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property BeneficiaryFamilyMembers[] $beneficiaryFamilyMembers
 * @property BeneficiaryPaterfamilias[] $beneficiaryPaterfamiliases
 * @property OrganizationUser $owner
 */
class BeneficiaryRelation extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'beneficiary_relation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>255),
			array('owner_id', 'length', 'max'=>11),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),

            array('owner_id', 'default', 'value' => Yii::app()->user->id, 'setOnEmpty' => false ),
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
			'beneficiaryFamilyMembers' => array(self::HAS_MANY, 'BeneficiaryFamilyMembers', 'beneficiary_relation_id'),
			'beneficiaryPaterfamiliases' => array(self::HAS_MANY, 'BeneficiaryPaterfamilias', 'beneficiary_relation_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('beneficiary_relation','ID'),
			'name' => Yii::t('beneficiary_relation','Name'),
			'owner_id' => Yii::t('beneficiary_relation','Owner'),
			'created_at' => Yii::t('beneficiary_relation','Created At'),
			'updated_at' => Yii::t('beneficiary_relation','Updated At'),
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
	 * @return BeneficiaryRelation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getOptions(){
        $criteria         = new CDbCriteria;
        $criteria->select = 'id,name';
        //$criteria->addCondition('iso3 is NOT NUll AND iso3 !=""');

        return CHtml::listData($this->findAll($criteria),'id','name');
    }
}
