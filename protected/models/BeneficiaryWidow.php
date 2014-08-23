<?php

/**
 * This is the model class for table "beneficiary_widow".
 *
 * The followings are the available columns in table 'beneficiary_widow':
 * @property string $id
 * @property string $husband_full_name
 * @property string $husband_job
 * @property string $husband_date_of_birth
 * @property string $husband_date_of_death
 * @property string $husband_reason_of_death
 * @property string $husband_death_certificate_path
 * @property integer $number_of_sons
 * @property integer $number_of_daughters
 * @property string $beneficiary_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Beneficiary $beneficiary
 * @property OrganizationUser $owner
 */
class BeneficiaryWidow extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'beneficiary_widow';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('husband_full_name, husband_job, number_of_sons, number_of_daughters, beneficiary_id', 'required'),
			array('number_of_sons, number_of_daughters', 'numerical', 'integerOnly'=>true),
			array('husband_full_name, husband_job, husband_reason_of_death, husband_death_certificate_path', 'length', 'max'=>255),
			array('beneficiary_id, owner_id', 'length', 'max'=>11),
			array('husband_date_of_birth, husband_date_of_death, created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, husband_full_name, husband_job, husband_date_of_birth, husband_date_of_death, husband_reason_of_death, husband_death_certificate_path, number_of_sons, number_of_daughters, beneficiary_id, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'id' => Yii::t('beneficiary_widow','ID'),
			'husband_full_name' => Yii::t('beneficiary_widow','Husband Full Name'),
			'husband_job' => Yii::t('beneficiary_widow','Husband Job'),
			'husband_date_of_birth' => Yii::t('beneficiary_widow','Husband Date Of Birth'),
			'husband_date_of_death' => Yii::t('beneficiary_widow','Husband Date Of Death'),
			'husband_reason_of_death' => Yii::t('beneficiary_widow','Husband Reason Of Death'),
			'husband_death_certificate_path' => Yii::t('beneficiary_widow','Husband Death Certificate Path'),
			'number_of_sons' => Yii::t('beneficiary_widow','Number Of Sons'),
			'number_of_daughters' => Yii::t('beneficiary_widow','Number Of Daughters'),
			'beneficiary_id' => Yii::t('beneficiary_widow','Beneficiary'),
			'owner_id' => Yii::t('beneficiary_widow','Owner'),
			'created_at' => Yii::t('beneficiary_widow','Created At'),
			'updated_at' => Yii::t('beneficiary_widow','Updated At'),
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
		$criteria->compare('husband_full_name',$this->husband_full_name,true);
		$criteria->compare('husband_job',$this->husband_job,true);
		$criteria->compare('husband_date_of_birth',$this->husband_date_of_birth,true);
		$criteria->compare('husband_date_of_death',$this->husband_date_of_death,true);
		$criteria->compare('husband_reason_of_death',$this->husband_reason_of_death,true);
		$criteria->compare('husband_death_certificate_path',$this->husband_death_certificate_path,true);
		$criteria->compare('number_of_sons',$this->number_of_sons);
		$criteria->compare('number_of_daughters',$this->number_of_daughters);
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
	 * @return BeneficiaryWidow the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
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
                'directory' => Yii::getPathOfAlias('webroot'). '/beneficiaries/widow/'. $this->id. '/' .substr(sha1($this->id), 0, 10).'/'.substr(sha1($this->id), -10) . '/' . $this->id % 100, //Controller::getImagePath($this->id, 'donators'),
                // url for images folder
                'url' => Yii::app()->request->baseUrl . '/beneficiaries/widow/'. $this->id . '/' . substr(sha1($this->id), 0, 10). '/' .substr(sha1($this->id), -10) . '/' . $this->id % 100, //Controller::getImagePath($this->id, 'donators'),
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
                        'resize' => array(48, null),
                        //'crop'   => array(140, null),
                    )
                )
            ),
            
         );
    }
    
}
