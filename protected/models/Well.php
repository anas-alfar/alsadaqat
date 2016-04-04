<?php

/**
 * This is the model class for table "well".
 *
 * The followings are the available columns in table 'well':
 * @property string $id
 * @property string $name
 * @property string $address
 * @property string $contract_date
 * @property string $contract_photo_path
 * @property string $construction_progress
 * @property double $real_construction_cost
 * @property string $donator_id
 * @property string $agent_id
 * @property string $well_type_id
 * @property string $country_id
 * @property string $city_id
 * @property integer $gallery_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property Donator $donator
 * @property MosqueAgent $agent
 * @property WellType $wellType
 * @property Country $country
 * @property City $city
 * @property OrganizationUser $owner
 * @property Gallery $gallery
 */
class Well extends Aulaula {
	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'well';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organization_id, organization_branch_id, name, address, contract_date, construction_progress, real_construction_cost, donator_id, agent_id, well_type_id, country_id, city_id', 'required'),
			array('gallery_id', 'numerical', 'integerOnly' => true),
			array('real_construction_cost', 'numerical'),
			array('name, address, contract_photo_path', 'length', 'max'                                                       => 255),
			array('organization_id, organization_branch_id, construction_progress, donator_id, agent_id, well_type_id, country_id, city_id, owner_id', 'length', 'max' => 11),
			array('notes, options', 'length', 'max'                                                                           => 1024),
			array('created_at, updated_at', 'safe'),

			array('updated_at', 'default', 'value'             => new CDbExpression('NOW()'), 'setOnEmpty'             => false, 'on'             => 'update'),
			array('created_at, updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_id, organization_branch_id, name, address, contract_date, contract_photo_path, construction_progress, real_construction_cost, donator_id, agent_id, well_type_id, country_id, city_id, gallery_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on' => 'search'),

            array('organization_id, organization_branch_id', 'safe'),
			array('owner_id', 'default', 'value' => Yii::app()->user->id, 'setOnEmpty' => false),
			array('organization_id',        'default', 'value' => Yii::app()->user->organization_id,        'setOnEmpty' => false ),
            array('organization_branch_id', 'default', 'value' => Yii::app()->user->organization_branch_id, 'setOnEmpty' => TRUE ),
		);
	}

	public function defaultScope() {
		return array(
			'condition' => $this->getTableAlias(false, false).'.owner_id='.Yii::app()->user->id,
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'donator'  => array(self::BELONGS_TO, 'Donator', 'donator_id'),
			'agent'    => array(self::BELONGS_TO, 'MosqueAgent', 'agent_id'),
			'wellType' => array(self::BELONGS_TO, 'WellType', 'well_type_id'),
			'country'  => array(self::BELONGS_TO, 'Country', 'country_id'),
			'city'     => array(self::BELONGS_TO, 'City', 'city_id'),
			'owner'    => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'gallery'  => array(self::BELONGS_TO, 'Gallery', 'gallery_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
            'organizationBranch' => array(self::BELONGS_TO, 'OrganizationBranch', 'organization_branch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
			'id'                     => Yii::t('well', 'ID'),
			'organization_id'        => Yii::t('well','Organization'),
            'organization_branch_id' => Yii::t('well','Organization Branch'),
			'name'                   => Yii::t('well', 'Name'),
			'address'                => Yii::t('well', 'Address'),
			'contract_date'          => Yii::t('well', 'Contract Date'),
			'contract_photo_path'    => Yii::t('well', 'Contract Photo Path'),
			'construction_progress'  => Yii::t('well', 'Construction Progress'),
			'real_construction_cost' => Yii::t('well', 'Real Construction Cost'),
			'donator_id'             => Yii::t('well', 'Donator'),
			'agent_id'               => Yii::t('well', 'Agent'),
			'well_type_id'           => Yii::t('well', 'well Type'),
			'country_id'             => Yii::t('well', 'Country'),
			'city_id'                => Yii::t('well', 'City'),
			'gallery_id'             => Yii::t('well', 'Gallery'),
			'owner_id'               => Yii::t('well', 'Owner'),
			'created_at'             => Yii::t('well', 'Created At'),
			'updated_at'             => Yii::t('well', 'Updated At'),
			'notes'                  => Yii::t('well', 'Notes'),
			'options'                => Yii::t('well', 'Options'),
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
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
        $criteria->compare('organization_id',$this->organization_id,true);
        $criteria->compare('organization_branch_id',$this->organization_branch_id,true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('address', $this->address, true);
		$criteria->compare('contract_date', $this->contract_date, true);
		$criteria->compare('contract_photo_path', $this->contract_photo_path, true);
		$criteria->compare('construction_progress', $this->construction_progress);
		$criteria->compare('real_construction_cost', $this->real_construction_cost);
		$criteria->compare('donator_id', $this->donator_id);
		$criteria->compare('agent_id', $this->agent_id);
		$criteria->compare('well_type_id', $this->well_type_id, true);
		$criteria->compare('country_id', $this->country_id, true);
		$criteria->compare('city_id', $this->city_id, true);
		$criteria->compare('gallery_id', $this->gallery_id);
		$criteria->compare('owner_id', $this->owner_id, true);
		$criteria->compare('created_at', $this->created_at, true);
		$criteria->compare('updated_at', $this->updated_at, true);
		$criteria->compare('notes', $this->notes, true);
		$criteria->compare('options', $this->options, true);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.'controllerRoute' => '/admin/gallery', //route to gallery controller
	 * @return Well the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	public function behaviors() {
		return array(
			'galleryBehavior'    => array(
				'class'             => 'GalleryBehavior',
				'idAttribute'       => 'gallery_id',
				'versions'          => array(
					'small'            => array(
						'centeredpreview' => array(98, 98),
					),
					'medium'  => array(
						'resize' => array(100, null),
					)
				),
				'name'        => true,
				'description' => true,
			),
			'preview'        => array(
				'class'         => 'ext.imageAttachment.ImageAttachmentBehavior',
				'previewHeight' => 200,
				'previewWidth'  => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'jpg',
				// folder to store images
				'directory' => Yii::getPathOfAlias('webroot').'/wells/contracts/'.$this->id.'/'.substr(sha1($this->id), 0, 10).'/'.substr(sha1($this->id), -10).'/'.$this->id%100, //Controller::getImagePath($this->id, 'donators'),
				// url for images folder
				'url' => Yii::app()->request->baseUrl.'/wells/contracts/'.$this->id.'/'.substr(sha1($this->id), 0, 10).'/'.substr(sha1($this->id), -10).'/'.$this->id%100, //Controller::getImagePath($this->id, 'donators'),
				// image versions
				'versions' => array(
					'small'   => array(
						'resize' => array(70, null),
						//'crop'   => array(55, null),
					),
					'medium'  => array(
						'resize' => array(150, null),
						//'crop'   => array(70, null),
					),
					'large'   => array(
						'resize' => array(300, null),
						//'crop'   => array(140, null),
					),
					'avatar'  => array(
						'resize' => array(70, null),
						//'crop'   => array(140, null),
					)
				)
			),

		);
	}

}
