<?php

/**
 * This is the model class for table "mail_outbox".
 *
 * The followings are the available columns in table 'mail_outbox':
 * @property integer $id
 * @property string $organization_id
 * @property string $mail_type_id
 * @property string $mail_template_id
 * @property string $number
 * @property string $from_mail
 * @property string $from_name
 * @property string $from_department
 * @property string $to_mail
 * @property string $to_name
 * @property string $to_department
 * @property string $subject
 * @property string $description
 * @property string $send_at
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Organization $organization
 * @property Owner $owner
 * @property MailType $mailType
 */
class MailOutbox extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mail_outbox';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mail_type_id, number, from_mail, from_name, to_mail, to_name, subject, description', 'required'),
			array('organization_id, mail_type_id, mail_template_id, owner_id', 'length', 'max'=>11),
			array('number, from_mail, from_name, from_department, to_mail, to_name, to_department, subject', 'length', 'max'=>255),
			array('send_at, created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
            array('send_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_id, mail_type_id, mail_template_id, number, from_mail, from_name, from_department, to_mail, to_name, to_department, subject, description, send_at, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),

            array('organization_id, organization_branch_id', 'safe'),
            array('owner_id',               'default', 'value' => Yii::app()->user->id,                     'setOnEmpty' => false ),
            array('organization_id',        'default', 'value' => Yii::app()->user->organization_id,        'setOnEmpty' => false ),
            array('organization_branch_id', 'default', 'value' => Yii::app()->user->organization_branch_id, 'setOnEmpty' => false ),
		);
	}

	public function defaultScope() {
		return array(    
			'condition' => 	$this->getTableAlias(false, false) . '.organization_id='. Yii::app()->user->organization_id,
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
			'organization'       => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'organizationBranch' => array(self::BELONGS_TO, 'OrganizationBranch', 'organization_branch_id'),
			'owner'              => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'mailType'           => array(self::BELONGS_TO, 'MailType', 'mail_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('mail_outbox','ID'),
			'organization_id' => Yii::t('mail_outbox','Organization'),
			'organization_branch_id' => Yii::t('mail_outbox','Organization Branch'),
			'mail_type_id' => Yii::t('mail_outbox','Mail Type'),
			'mail_template_id' => Yii::t('mail_outbox','Mail Template'),
			'number' => Yii::t('mail_outbox','Number'),
			'from_mail' => Yii::t('mail_outbox','From Mail'),
			'from_name' => Yii::t('mail_outbox','From Name'),
			'from_department' => Yii::t('mail_outbox','From Department'),
			'to_mail' => Yii::t('mail_outbox','To Mail'),
			'to_name' => Yii::t('mail_outbox','To Name'),
			'to_department' => Yii::t('mail_outbox','To Department'),
			'subject' => Yii::t('mail_outbox','Subject'),
			'description' => Yii::t('mail_outbox','Description'),
			'send_at' => Yii::t('mail_outbox','Send At'),
			'owner_id' => Yii::t('mail_outbox','Owner'),
			'created_at' => Yii::t('mail_outbox','Created At'),
			'updated_at' => Yii::t('mail_outbox','Updated At'),
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

		$criteria->compare('id',$this->id);
		$criteria->compare('organization_id',$this->organization_id,true);
        $criteria->compare('organization_branch_id',$this->organization_branch_id,true);
		$criteria->compare('mail_type_id',$this->mail_type_id,true);
		$criteria->compare('mail_template_id',$this->mail_template_id,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('from_mail',$this->from_mail,true);
		$criteria->compare('from_name',$this->from_name,true);
		$criteria->compare('from_department',$this->from_department,true);
		$criteria->compare('to_mail',$this->to_mail,true);
		$criteria->compare('to_name',$this->to_name,true);
		$criteria->compare('to_department',$this->to_department,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('send_at',$this->send_at,true);
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
	 * @return MailOutbox the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	} 
    
    public function behaviors()
    {
        return array(
            'galleryBehavior' => array(
                'class' => 'GalleryBehavior',
                'idAttribute' => 'gallery_id',
                'versions' => array(
                    'small' => array(
                        'centeredpreview' => array(98, 98),
                    ),
                    'medium' => array(
                        'resize' => array(100, null),
                    )
                ),
                'name' => true,
                'description' => true,
            ),
        );
    }

}
