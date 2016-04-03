<?php

/**
 * This is the model class for table "organization".
 *
 * The followings are the available columns in table 'organization':
 * @property string $id
 * @property string $organization_type_id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property Beneficiary[] $beneficiaries
 * @property Donator[] $donators
 * @property Event[] $events
 * @property EventType[] $eventTypes
 * @property MailInbox[] $mailInboxes
 * @property MailOutbox[] $mailOutboxes
 * @property MailTemplate[] $mailTemplates
 * @property MailType[] $mailTypes
 * @property MosqueAgent[] $mosqueAgents
 * @property OrganizationType $organizationType
 * @property OrganizationAccessLevel[] $organizationAccessLevels
 * @property OrganizationBranch[] $organizationBranches
 * @property OrganizationPosition[] $organizationPositions
 * @property OrganizationUser[] $organizationUsers
 * @property Tasks[] $tasks
 */
class Organization extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organization';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('organization_type_id, name, description, notes, options', 'required'),
			array('organization_type_id, name, description', 'required'),
			array('organization_type_id', 'length', 'max'=>11),
			array('name', 'length', 'max'=>255),
			array('description', 'length', 'max'=>512),
			array('notes, options', 'length', 'max'=>1024),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_type_id, name, description, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
		);
	}

	public function defaultScope() {
		if (Rights::getAuthorizer()->isSuperuser(Yii::app()->user->id)) {
		    return array();
			//do nothing
		} else {
			return array(    
				'condition' => 	$this->getTableAlias(false, false) . '.id='. Yii::app()->user->organization_id,
			);
		}
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'beneficiaries' => array(self::HAS_MANY, 'Beneficiary', 'organization_id'),
            'donators' => array(self::HAS_MANY, 'Donator', 'organization_id'),
            'events' => array(self::HAS_MANY, 'Event', 'organization_id'),
            'eventTypes' => array(self::HAS_MANY, 'EventType', 'organization_id'),
            'galleries' => array(self::HAS_MANY, 'Gallery', 'organization_id'),
            'mailInboxes' => array(self::HAS_MANY, 'MailInbox', 'organization_id'),
            'mailOutboxes' => array(self::HAS_MANY, 'MailOutbox', 'organization_id'),
            'mailTemplates' => array(self::HAS_MANY, 'MailTemplate', 'organization_id'),
            'mailTypes' => array(self::HAS_MANY, 'MailType', 'organization_id'),
            'mosques' => array(self::HAS_MANY, 'Mosque', 'organization_id'),
            'mosqueAgents' => array(self::HAS_MANY, 'MosqueAgent', 'organization_id'),
            'mosqueTypes' => array(self::HAS_MANY, 'MosqueType', 'organization_id'),
            'organizationType' => array(self::BELONGS_TO, 'OrganizationType', 'organization_type_id'),
            'organizationPositions' => array(self::HAS_MANY, 'OrganizationPosition', 'organization_id'),
            'organizationUsers' => array(self::HAS_MANY, 'OrganizationUser', 'organization_id'),
            'tasks' => array(self::HAS_MANY, 'Task', 'organization_id'),
            'wells' => array(self::HAS_MANY, 'Well', 'organization_id'),
            'wellTypes' => array(self::HAS_MANY, 'WellType', 'organization_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('organization','ID'),
			'organization_type_id' => Yii::t('organization','Organization Type'),
			'name' => Yii::t('organization','Name'),
			'description' => Yii::t('organization','Description'),
			'created_at' => Yii::t('organization','Created At'),
			'updated_at' => Yii::t('organization','Updated At'),
			'notes' => Yii::t('organization','Notes'),
			'options' => Yii::t('organization','Options'),
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
		$criteria->compare('organization_type_id',$this->organization_type_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
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
	 * @return Organization the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function organizationTypeFilter($model) {
        return OrganizationType::model()->findByPk($model->organization_type_id)->title;
    }
    
    public function getOptions(){
        $criteria         = new CDbCriteria;
        $criteria->select = 'id,name';
        //$criteria->addCondition('iso3 is NOT NUll AND iso3 !=""');

        return CHtml::listData($this->findAll($criteria),'id','name');
    }

}
