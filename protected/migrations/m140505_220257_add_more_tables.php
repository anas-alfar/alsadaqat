<?php

class m140505_220257_add_more_tables extends CDbMigration
{
	public function up()
	{
        $this -> execute("
  CREATE TABLE `beneficiary_disabled` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `father_full_name` varchar(255) NOT NULL,
  `is_father_alive` enum('Yes','No') NOT NULL DEFAULT 'No',
  `father_job` varchar(255) NOT NULL,
  `father_date_of_birth` date DEFAULT NULL,
  `father_date_of_death` date DEFAULT NULL,
  `father_reason_of_death` varchar(255) DEFAULT NULL,
  `father_death_certificate_path` varchar(255) DEFAULT NULL,
  `mother_full_name` varchar(255) NOT NULL,
  `is_mother_alive` enum('Yes','No') NOT NULL DEFAULT 'No',
  `mother_job` varchar(255) NOT NULL,
  `mother_date_of_birth` date DEFAULT NULL,
  `mother_date_of_death` date DEFAULT NULL,
  `mother_reason_of_death` varchar(255) DEFAULT NULL,
  `mother_death_certificate_path` varchar(255) DEFAULT NULL,
  `number_of_brothers` tinyint(3) unsigned NOT NULL,
  `number_of_sisters` tinyint(3) unsigned NOT NULL,
  `disability_type` enum('Physical','Mental','Social') NOT NULL DEFAULT 'Physical',
  `disability_reason` enum('Genetic','Pregnancy defect','Childbirth defect','Infection','Accident','Environmental','Other') NOT NULL DEFAULT 'Genetic',
  `disability_description` varchar(255) DEFAULT NULL,
  `beneficiary_id` int(11) unsigned NOT NULL,
  `owner_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beneficiary_id` (`beneficiary_id`),
  KEY `owner_id` (`owner_id`),
  CONSTRAINT `beneficiary_disabled_ibfk_1` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiary` (`id`),
  CONSTRAINT `beneficiary_disabled_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `organization_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
       	");

		$this -> execute("
  CREATE TABLE `beneficiary_family_members` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `ssn` varchar(32) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `beneficiary_relation_id` int(11) unsigned NOT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `educational_status` varchar(255) DEFAULT NULL,
  `health_status` varchar(255) DEFAULT NULL,
  `business` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `beneficiary_id` int(11) unsigned NOT NULL,
  `owner_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ssn` (`ssn`),
  KEY `beneficiary_id` (`beneficiary_id`),
  KEY `owner_id` (`owner_id`),
  KEY `beneficiary_relation_id` (`beneficiary_relation_id`),
  CONSTRAINT `beneficiary_family_members_ibfk_1` FOREIGN KEY (`beneficiary_relation_id`) REFERENCES `beneficiary_relation` (`id`),
  CONSTRAINT `beneficiary_family_members_ibfk_2` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiary` (`id`),
  CONSTRAINT `beneficiary_family_members_ibfk_3` FOREIGN KEY (`owner_id`) REFERENCES `organization_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
       	");

		$this -> execute("
  CREATE TABLE `beneficiary_poor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `father_full_name` varchar(255) NOT NULL,
  `is_father_alive` enum('Yes','No') NOT NULL DEFAULT 'No',
  `father_job` varchar(255) NOT NULL,
  `father_date_of_birth` date DEFAULT NULL,
  `father_date_of_death` date DEFAULT NULL,
  `father_reason_of_death` varchar(255) DEFAULT NULL,
  `father_death_certificate_path` varchar(255) DEFAULT NULL,
  `mother_full_name` varchar(255) NOT NULL,
  `is_mother_alive` enum('Yes','No') NOT NULL DEFAULT 'No',
  `mother_job` varchar(255) NOT NULL,
  `mother_date_of_birth` date DEFAULT NULL,
  `mother_date_of_death` date DEFAULT NULL,
  `mother_reason_of_death` varchar(255) DEFAULT NULL,
  `mother_death_certificate_path` varchar(255) DEFAULT NULL,
  `number_of_brothers` tinyint(3) unsigned NOT NULL,
  `number_of_sisters` tinyint(3) unsigned NOT NULL,
  `beneficiary_id` int(11) unsigned NOT NULL,
  `owner_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beneficiary_id` (`beneficiary_id`),
  KEY `owner_id` (`owner_id`),
  CONSTRAINT `beneficiary_poor_ibfk_1` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiary` (`id`),
  CONSTRAINT `beneficiary_poor_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `organization_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
       	");

		$this -> execute("
  CREATE TABLE `beneficiary_research_notes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `support_type` enum('Frequent','Emergency','Medical','Educational','Other') NOT NULL DEFAULT 'Frequent',
  `support_period` enum('Permanent','Once','Until healing','Until graduate') NOT NULL DEFAULT 'Permanent',
  `expected_support_period` varchar(255) DEFAULT NULL,
  `support_modality` enum('Money','In-kind','Money and in-kind','Volunteer','By hand','Educate a family member','Employ a family member','Other') NOT NULL DEFAULT 'Money',
  `information_source` enum('Official documents','Work visit','Home visit','Trusted neighbors') NOT NULL DEFAULT 'Official documents',
  `has_small_business_idea` enum('Yes','No') NOT NULL DEFAULT 'No',
  `small_business_idea_description` varchar(255) NOT NULL,
  `researcher_recommendations` varchar(512) NOT NULL,
  `researcher_name` varchar(255) NOT NULL,
  `notes` varchar(512) NOT NULL,
  `committee_recommendations` varchar(512) NOT NULL,
  `committee_member_name` varchar(512) NOT NULL,
  `committee_manager_name` varchar(512) NOT NULL,
  `beneficiary_id` int(11) unsigned NOT NULL,
  `owner_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beneficiary_id` (`beneficiary_id`),
  KEY `owner_id` (`owner_id`),
  CONSTRAINT `beneficiary_research_notes_ibfk_1` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiary` (`id`),
  CONSTRAINT `beneficiary_research_notes_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `organization_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
       	");
	}

	public function down()
	{
		echo "m140505_220257_add_more_tables does not support migration down.\n";
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