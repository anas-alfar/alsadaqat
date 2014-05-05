<?php

class m140505_210935_modify_created_at_and_updated_at_in_all_tables extends CDbMigration
{
	public function up()
	{
	    
        $this -> execute("ALTER TABLE `country` ADD `created_at` datetime DEFAULT NULL AFTER `published`;");
        $this -> execute("ALTER TABLE `city` ADD `created_at` datetime DEFAULT NULL AFTER `published`;");
        
        $this -> execute(
    "ALTER TABLE `alsadaqat`.`beneficiary` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_finance` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_home` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_orphan` MODIFY `created_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`beneficiary_paterfamilias` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_relation` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_student` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_student_class` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_teacher` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_widow` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`city` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`country` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`donator` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`event` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`event_activity` MODIFY `created_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`event_agenda` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`event_photo` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`event_type` MODIFY `created_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`mail_attachment` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mail_inbox` MODIFY `created_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`mail_outbox` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mail_template` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mail_type` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mosque` MODIFY `created_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`mosque_agent` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mosque_photo` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mosque_type` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_access_level` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_access_level_permission` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_branch` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_branch_country` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_branch_country_committee` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_branch_country_committee_user` MODIFY `created_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`organization_position` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_type` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_user` MODIFY `created_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_user_access_level` MODIFY `created_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`tasks` MODIFY `created_at` datetime DEFAULT NULL;"
);

        $this->execute(
    "ALTER TABLE `alsadaqat`.`beneficiary` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_finance` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_home` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_orphan` MODIFY `updated_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`beneficiary_paterfamilias` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_relation` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_student` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_student_class` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_teacher` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`beneficiary_widow` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`city` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`country` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`donator` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`event` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`event_activity` MODIFY `updated_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`event_agenda` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`event_photo` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`event_type` MODIFY `updated_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`mail_attachment` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mail_inbox` MODIFY `updated_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`mail_outbox` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mail_template` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mail_type` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mosque` MODIFY `updated_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`mosque_agent` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mosque_photo` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`mosque_type` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_access_level` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_access_level_permission` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_branch` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_branch_country` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_branch_country_committee` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_branch_country_committee_user` MODIFY `updated_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`organization_position` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_type` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_user` MODIFY `updated_at` datetime DEFAULT NULL;
    ALTER TABLE `alsadaqat`.`organization_user_access_level` MODIFY `updated_at` datetime DEFAULT NULL; 
    ALTER TABLE `alsadaqat`.`tasks` MODIFY `updated_at` datetime DEFAULT NULL;"
);
	}

	public function down()
	{
		echo "m140505_210935_modify_created_at_and_updated_at_in_all_tables does not support migration down.\n";
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