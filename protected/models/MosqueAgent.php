<?php

/**
 * This is the model class for table "mosque_agent".
 *
 * The followings are the available columns in table 'mosque_agent':
 * @property string $id
 * @property string $company_name
 * @property string $title
 * @property string $fullname
 * @property string $ssn
 * @property string $gender
 * @property string $email
 * @property string $home_phone
 * @property string $work_phone
 * @property string $mobile
 * @property string $address
 * @property string $bank_name
 * @property string $bank_branch_name
 * @property string $bank_branch_number
 * @property string $bank_swift_code
 * @property string $bank_account_number
 * @property string $personal_photo_path
 * @property string $country_id
 * @property string $city_id
 * @property string $organization_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Mosque[] $mosques
 * @property Country $country
 * @property City $city
 * @property Organization $organization
 * @property OrganizationUser $owner
 * @property MosqueType[] $mosqueTypes
 */
class MosqueAgent extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mosque_agent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_name, fullname, ssn, email, mobile, address, country_id, city_id', 'required'),
			array('company_name, fullname, email, address, bank_name, bank_branch_name, bank_branch_number, bank_account_number, personal_photo_path', 'length', 'max'=>255),
			array('title', 'length', 'max'=>4),
			array('ssn, bank_swift_code', 'length', 'max'=>32),
			array('gender', 'length', 'max'=>6),
			array('home_phone, work_phone, mobile', 'length', 'max'=>17),
			array('country_id, city_id, organization_id, owner_id', 'length', 'max'=>11),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company_name, title, fullname, ssn, gender, email, home_phone, work_phone, mobile, address, bank_name, bank_branch_name, bank_branch_number, bank_swift_code, bank_account_number, personal_photo_path, country_id, city_id, organization_id, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
			
            array('owner_id',               'default', 'value' => Yii::app()->user->id,                     'setOnEmpty' => false ),
            array('organization_id',        'default', 'value' => Yii::app()->user->organization_id,        'setOnEmpty' => false ),
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
			'mosques' => array(self::HAS_MANY, 'Mosque', 'agent_id'),
			'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
			'city' => array(self::BELONGS_TO, 'City', 'city_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'mosqueTypes' => array(self::HAS_MANY, 'MosqueType', 'agent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('mosque_agent','ID'),
			'company_name' => Yii::t('mosque_agent','Company Name'),
			'title' => Yii::t('mosque_agent','Title'),
			'fullname' => Yii::t('mosque_agent','Fullname'),
			'ssn' => Yii::t('mosque_agent','Ssn'),
			'gender' => Yii::t('mosque_agent','Gender'),
			'email' => Yii::t('mosque_agent','Email'),
			'home_phone' => Yii::t('mosque_agent','Home Phone'),
			'work_phone' => Yii::t('mosque_agent','Work Phone'),
			'mobile' => Yii::t('mosque_agent','Mobile'),
			'address' => Yii::t('mosque_agent','Address'),
			'bank_name' => Yii::t('mosque_agent','Bank Name'),
			'bank_branch_name' => Yii::t('mosque_agent','Bank Branch Name'),
			'bank_branch_number' => Yii::t('mosque_agent','Bank Branch Number'),
			'bank_swift_code' => Yii::t('mosque_agent','Bank Swift Code'),
			'bank_account_number' => Yii::t('mosque_agent','Bank Account Number'),
			'personal_photo_path' => Yii::t('mosque_agent','Personal Photo Path'),
			'country_id' => Yii::t('mosque_agent','Country'),
			'city_id' => Yii::t('mosque_agent','City'),
			'organization_id' => Yii::t('mosque_agent','Organization'),
			'owner_id' => Yii::t('mosque_agent','Owner'),
			'created_at' => Yii::t('mosque_agent','Created At'),
			'updated_at' => Yii::t('mosque_agent','Updated At'),
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
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('ssn',$this->ssn,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('work_phone',$this->work_phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('bank_branch_name',$this->bank_branch_name,true);
		$criteria->compare('bank_branch_number',$this->bank_branch_number,true);
		$criteria->compare('bank_swift_code',$this->bank_swift_code,true);
		$criteria->compare('bank_account_number',$this->bank_account_number,true);
		$criteria->compare('personal_photo_path',$this->personal_photo_path,true);
		$criteria->compare('country_id',$this->country_id,true);
		$criteria->compare('city_id',$this->city_id,true);
		$criteria->compare('organization_id',$this->organization_id,true);
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
	 * @return MosqueAgent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getOptions(){
        $criteria         = new CDbCriteria;
        $criteria->select = 'id,company_name';

        return CHtml::listData($this->findAll($criteria),'id','company_name' );
    }
    
    public function getOptionsLabel(){
        $result = $this->findAll();
        $agents = array();

        if ( $result ) {
            foreach ($result as $value) {
                $agents[$value->id] = array( 'label' => 'tooltips', 'title' => Yii::t('enumItem', $value->title) . ': ' . $value->fullname );
            }
        }
        return $agents;
    }
    
    public function behaviors() {
        return array(
            'preview' => array(
                'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
                'previewHeight' => 200,
                'previewWidth'  => 200,
                // extension for image saving, can be also tiff, png or gif
                'extension' => 'jpg',
                // folder to store images
                'directory' => Yii::getPathOfAlias('webroot'). '/mosques/agents/'. $this->id. '/' .substr(sha1($this->id), 0, 10).'/'.substr(sha1($this->id), -10) . '/' . $this->id % 100, //Controller::getImagePath($this->id, 'donators'),
                // url for images folder
                'url' => Yii::app()->request->baseUrl . '/mosques/agents/'. $this->id . '/' . substr(sha1($this->id), 0, 10). '/' .substr(sha1($this->id), -10) . '/' . $this->id % 100, //Controller::getImagePath($this->id, 'donators'),
                // image versions
                'versions' => array(
                    'small' => array(
                        'resize' => array(70, null),
                        //'crop'   => array(55, null),
                    ),
                    'medium' => array(
                        'resize' => array(150, null),
                        //'crop'   => array(70, null),
                    ),
                   'large' => array(
                        'resize' => array(300, null),
                        //'crop'   => array(140, null),
                    ),
                   'avatar' => array(
                        'resize' => array(70, null),
                        //'crop'   => array(140, null),
                    )
                )
            ),
        );
    }
    
}
