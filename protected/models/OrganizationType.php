<?php

/**
 * This is the model class for table "organization_type".
 *
 * The followings are the available columns in table 'organization_type':
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Organization[] $organizations
 */
class OrganizationType extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organization_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description', 'required'),
			array('title', 'length', 'max'=>255),
			array('description', 'length', 'max'=>512),
			array('created_at, updated_at', 'safe'),

            array('updated_at', 'default', 'value'   => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value'   => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'organizations' => array(self::HAS_MANY, 'Organization', 'organization_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('organization_type','ID'),
			'title' => Yii::t('organization_type','Title'),
			'description' => Yii::t('organization_type','Description'),
			'created_at' => Yii::t('organization_type','Created At'),
			'updated_at' => Yii::t('organization_type','Updated At'),
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
		$criteria->compare('description',$this->description,true);
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
	 * @return OrganizationType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function getOptions() {
        $criteria         = new CDbCriteria;
        $criteria->select = 'id,title';

        return CHtml::listData($this->findAll($criteria), 'id', 'title');  
    }
    
}
