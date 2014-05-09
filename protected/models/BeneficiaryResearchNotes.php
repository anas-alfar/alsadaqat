<?php

/**
 * This is the model class for table "beneficiary_research_notes".
 *
 * The followings are the available columns in table 'beneficiary_research_notes':
 * @property string $id
 * @property string $support_type
 * @property string $support_period
 * @property string $expected_support_period
 * @property string $support_modality
 * @property string $information_source
 * @property string $has_small_business_idea
 * @property string $small_business_idea_description
 * @property string $researcher_recommendations
 * @property string $researcher_name
 * @property string $notes
 * @property string $committee_recommendations
 * @property string $committee_member_name
 * @property string $committee_manager_name
 * @property string $beneficiary_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Beneficiary $beneficiary
 * @property OrganizationUser $owner
 */
class BeneficiaryResearchNotes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'beneficiary_research_notes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('small_business_idea_description, researcher_recommendations, researcher_name, notes, committee_recommendations, committee_member_name, committee_manager_name, beneficiary_id, owner_id', 'required'),
			array('support_type, beneficiary_id, owner_id', 'length', 'max'=>11),
			array('support_period', 'length', 'max'=>14),
			array('expected_support_period, small_business_idea_description, researcher_name', 'length', 'max'=>255),
			array('support_modality', 'length', 'max'=>23),
			array('information_source', 'length', 'max'=>18),
			array('has_small_business_idea', 'length', 'max'=>3),
			array('researcher_recommendations, notes, committee_recommendations, committee_member_name, committee_manager_name', 'length', 'max'=>512),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, support_type, support_period, expected_support_period, support_modality, information_source, has_small_business_idea, small_business_idea_description, researcher_recommendations, researcher_name, notes, committee_recommendations, committee_member_name, committee_manager_name, beneficiary_id, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id' => Yii::t('beneficiary_research_notes','ID'),
			'support_type' => Yii::t('beneficiary_research_notes','Support Type'),
			'support_period' => Yii::t('beneficiary_research_notes','Support Period'),
			'expected_support_period' => Yii::t('beneficiary_research_notes','Expected Support Period'),
			'support_modality' => Yii::t('beneficiary_research_notes','Support Modality'),
			'information_source' => Yii::t('beneficiary_research_notes','Information Source'),
			'has_small_business_idea' => Yii::t('beneficiary_research_notes','Has Small Business Idea'),
			'small_business_idea_description' => Yii::t('beneficiary_research_notes','Small Business Idea Description'),
			'researcher_recommendations' => Yii::t('beneficiary_research_notes','Researcher Recommendations'),
			'researcher_name' => Yii::t('beneficiary_research_notes','Researcher Name'),
			'notes' => Yii::t('beneficiary_research_notes','Notes'),
			'committee_recommendations' => Yii::t('beneficiary_research_notes','Committee Recommendations'),
			'committee_member_name' => Yii::t('beneficiary_research_notes','Committee Member Name'),
			'committee_manager_name' => Yii::t('beneficiary_research_notes','Committee Manager Name'),
			'beneficiary_id' => Yii::t('beneficiary_research_notes','Beneficiary'),
			'owner_id' => Yii::t('beneficiary_research_notes','Owner'),
			'created_at' => Yii::t('beneficiary_research_notes','Created At'),
			'updated_at' => Yii::t('beneficiary_research_notes','Updated At'),
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
		$criteria->compare('support_type',$this->support_type,true);
		$criteria->compare('support_period',$this->support_period,true);
		$criteria->compare('expected_support_period',$this->expected_support_period,true);
		$criteria->compare('support_modality',$this->support_modality,true);
		$criteria->compare('information_source',$this->information_source,true);
		$criteria->compare('has_small_business_idea',$this->has_small_business_idea,true);
		$criteria->compare('small_business_idea_description',$this->small_business_idea_description,true);
		$criteria->compare('researcher_recommendations',$this->researcher_recommendations,true);
		$criteria->compare('researcher_name',$this->researcher_name,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('committee_recommendations',$this->committee_recommendations,true);
		$criteria->compare('committee_member_name',$this->committee_member_name,true);
		$criteria->compare('committee_manager_name',$this->committee_manager_name,true);
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
	 * @return BeneficiaryResearchNotes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
