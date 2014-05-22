<?php

class m140522_104515_set_default_values_for_beneficiary_finance extends CDbMigration
{
	public function up()
	{
	}

	public function down()
	{
		echo "m140522_104515_set_default_values_for_beneficiary_finance does not support migration down.\n";
		$this -> execute("SET foreign_key_checks = 0;");
	    $this -> execute("
	    	ALTER TABLE `beneficiary_finance` 
	    		CHANGE `income_from_paterfamilias` `income_from_paterfamilias` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_beneficiary_business` `income_from_beneficiary_business` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_beneficiary_family_business` `income_from_beneficiary_family_business` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_social_security` `income_from_social_security` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_retirement` `income_from_retirement` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_lands` `income_from_lands` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_property` `income_from_property` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_agriculture` `income_from_agriculture` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_national_aid_fund` `income_from_national_aid_fund` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_zakat_fund` `income_from_zakat_fund` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_from_charity_fund` `income_from_charity_fund` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `income_total` `income_total` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_home_rent` `spending_home_rent` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_food` `spending_food` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_clothes` `spending_clothes` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_medication` `spending_medication` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_smoking` `spending_smoking` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_education` `spending_education` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_transportation` `spending_transportation` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_gas_invoice` `spending_gas_invoice` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_water_invoice` `spending_water_invoice` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_elctricity_invoice` `spending_elctricity_invoice` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_kerosene` `spending_kerosene` INT(10) UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_other` `spending_other` FLOAT UNSIGNED NOT NULL DEFAULT '0', 
	    		CHANGE `spending_total` `spending_total` FLOAT UNSIGNED NOT NULL DEFAULT '0'
	    	");

		$this -> execute("
			ALTER TABLE `mail_template` DROP `mail_template_id` ;
	    	");


		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}