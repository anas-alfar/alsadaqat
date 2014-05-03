<?php

/**
 * This is the model class for table "alsadaqat.beneficiary_finance".
 *
 * The followings are the available columns in table 'alsadaqat.beneficiary_finance':
 * @property string $id
 * @property integer $has_supplies_card
 * @property double $income_from_paterfamilias
 * @property double $income_from_beneficiary_business
 * @property double $income_from_beneficiary_family_business
 * @property double $income_from_social_security
 * @property double $income_from_retirement
 * @property double $income_from_lands
 * @property double $income_from_property
 * @property double $income_from_agriculture
 * @property double $income_from_national_aid_fund
 * @property double $income_from_zakat_fund
 * @property double $income_from_charity_fund
 * @property double $income_total
 * @property double $spending_home_rent
 * @property double $spending_food
 * @property double $spending_clothes
 * @property double $spending_medication
 * @property double $spending_smoking
 * @property double $spending_education
 * @property double $spending_transportation
 * @property double $spending_gas_invoice
 * @property double $spending_water_invoice
 * @property double $spending_elctricity_invoice
 * @property string $spending_kerosene
 * @property double $spending_other
 * @property double $spending_total
 * @property string $beneficiary_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property OrganizationUser $owner
 * @property Beneficiary $beneficiary
 */
class BeneficiaryFinance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.beneficiary_finance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('has_supplies_card, income_from_paterfamilias, income_from_beneficiary_business, income_from_beneficiary_family_business, income_from_social_security, income_from_retirement, income_from_lands, income_from_property, income_from_agriculture, income_from_national_aid_fund, income_from_zakat_fund, income_from_charity_fund, income_total, spending_home_rent, spending_food, spending_clothes, spending_medication, spending_smoking, spending_education, spending_transportation, spending_gas_invoice, spending_water_invoice, spending_elctricity_invoice, spending_kerosene, spending_other, spending_total, beneficiary_id, owner_id, created_at, updated_at, notes, options', 'required'),
			array('has_supplies_card', 'numerical', 'integerOnly'=>true),
			array('income_from_paterfamilias, income_from_beneficiary_business, income_from_beneficiary_family_business, income_from_social_security, income_from_retirement, income_from_lands, income_from_property, income_from_agriculture, income_from_national_aid_fund, income_from_zakat_fund, income_from_charity_fund, income_total, spending_home_rent, spending_food, spending_clothes, spending_medication, spending_smoking, spending_education, spending_transportation, spending_gas_invoice, spending_water_invoice, spending_elctricity_invoice, spending_other, spending_total', 'numerical'),
			array('spending_kerosene', 'length', 'max'=>10),
			array('beneficiary_id, owner_id', 'length', 'max'=>11),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, has_supplies_card, income_from_paterfamilias, income_from_beneficiary_business, income_from_beneficiary_family_business, income_from_social_security, income_from_retirement, income_from_lands, income_from_property, income_from_agriculture, income_from_national_aid_fund, income_from_zakat_fund, income_from_charity_fund, income_total, spending_home_rent, spending_food, spending_clothes, spending_medication, spending_smoking, spending_education, spending_transportation, spending_gas_invoice, spending_water_invoice, spending_elctricity_invoice, spending_kerosene, spending_other, spending_total, beneficiary_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'beneficiary' => array(self::BELONGS_TO, 'Beneficiary', 'beneficiary_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'has_supplies_card' => 'Has Supplies Card',
			'income_from_paterfamilias' => 'Income From Paterfamilias',
			'income_from_beneficiary_business' => 'Income From Beneficiary Business',
			'income_from_beneficiary_family_business' => 'Income From Beneficiary Family Business',
			'income_from_social_security' => 'Income From Social Security',
			'income_from_retirement' => 'Income From Retirement',
			'income_from_lands' => 'Income From Lands',
			'income_from_property' => 'Income From Property',
			'income_from_agriculture' => 'Income From Agriculture',
			'income_from_national_aid_fund' => 'Income From National Aid Fund',
			'income_from_zakat_fund' => 'Income From Zakat Fund',
			'income_from_charity_fund' => 'Income From Charity Fund',
			'income_total' => 'Income Total',
			'spending_home_rent' => 'Spending Home Rent',
			'spending_food' => 'Spending Food',
			'spending_clothes' => 'Spending Clothes',
			'spending_medication' => 'Spending Medication',
			'spending_smoking' => 'Spending Smoking',
			'spending_education' => 'Spending Education',
			'spending_transportation' => 'Spending Transportation',
			'spending_gas_invoice' => 'Spending Gas Invoice',
			'spending_water_invoice' => 'Spending Water Invoice',
			'spending_elctricity_invoice' => 'Spending Elctricity Invoice',
			'spending_kerosene' => 'Spending Kerosene',
			'spending_other' => 'Spending Other',
			'spending_total' => 'Spending Total',
			'beneficiary_id' => 'Beneficiary',
			'owner_id' => 'Owner',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'notes' => 'Notes',
			'options' => 'Options',
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
		$criteria->compare('has_supplies_card',$this->has_supplies_card);
		$criteria->compare('income_from_paterfamilias',$this->income_from_paterfamilias);
		$criteria->compare('income_from_beneficiary_business',$this->income_from_beneficiary_business);
		$criteria->compare('income_from_beneficiary_family_business',$this->income_from_beneficiary_family_business);
		$criteria->compare('income_from_social_security',$this->income_from_social_security);
		$criteria->compare('income_from_retirement',$this->income_from_retirement);
		$criteria->compare('income_from_lands',$this->income_from_lands);
		$criteria->compare('income_from_property',$this->income_from_property);
		$criteria->compare('income_from_agriculture',$this->income_from_agriculture);
		$criteria->compare('income_from_national_aid_fund',$this->income_from_national_aid_fund);
		$criteria->compare('income_from_zakat_fund',$this->income_from_zakat_fund);
		$criteria->compare('income_from_charity_fund',$this->income_from_charity_fund);
		$criteria->compare('income_total',$this->income_total);
		$criteria->compare('spending_home_rent',$this->spending_home_rent);
		$criteria->compare('spending_food',$this->spending_food);
		$criteria->compare('spending_clothes',$this->spending_clothes);
		$criteria->compare('spending_medication',$this->spending_medication);
		$criteria->compare('spending_smoking',$this->spending_smoking);
		$criteria->compare('spending_education',$this->spending_education);
		$criteria->compare('spending_transportation',$this->spending_transportation);
		$criteria->compare('spending_gas_invoice',$this->spending_gas_invoice);
		$criteria->compare('spending_water_invoice',$this->spending_water_invoice);
		$criteria->compare('spending_elctricity_invoice',$this->spending_elctricity_invoice);
		$criteria->compare('spending_kerosene',$this->spending_kerosene,true);
		$criteria->compare('spending_other',$this->spending_other);
		$criteria->compare('spending_total',$this->spending_total);
		$criteria->compare('beneficiary_id',$this->beneficiary_id,true);
		$criteria->compare('owner_id',$this->owner_id,true);
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
	 * @return BeneficiaryFinance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
