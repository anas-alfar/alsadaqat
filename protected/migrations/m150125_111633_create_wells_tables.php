<?php

class m150125_111633_create_wells_tables extends CDbMigration
{
	public function up()
	{
	    $this->execute("CREATE TABLE `well_type` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `construction_cost` float unsigned NOT NULL,
 `construction_time` int(11) NOT NULL,
 `number_of_people` tinyint(3) NOT NULL,
 `agent_id` int(11) unsigned NOT NULL,
 `owner_id` int(11) unsigned NOT NULL,
 `created_at` datetime DEFAULT NULL,
 `updated_at` datetime DEFAULT NULL,
 PRIMARY KEY (`id`),
 KEY `agent_id` (`agent_id`),
 KEY `owner_id` (`owner_id`),
 CONSTRAINT `well_type_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `mosque_agent` (`id`),
 CONSTRAINT `well_type_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `organization_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8");


        $this->execute("CREATE TABLE `well` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `address` varchar(255) NOT NULL,
 `contract_date` date NOT NULL,
 `contract_photo_path` varchar(255) NOT NULL,
 `construction_progress` int(11) unsigned NOT NULL,
 `real_construction_cost` float unsigned NOT NULL,
 `donator_id` int(11) unsigned NOT NULL,
 `agent_id` int(11) unsigned NOT NULL,
 `well_type_id` int(11) unsigned NOT NULL,
 `country_id` int(11) unsigned NOT NULL,
 `city_id` int(11) unsigned NOT NULL,
 `gallery_id` int(11) DEFAULT NULL,
 `owner_id` int(11) unsigned NOT NULL,
 `created_at` datetime DEFAULT NULL,
 `updated_at` datetime DEFAULT NULL,
 `notes` varchar(1024) NOT NULL,
 `options` varchar(1024) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `donator_id` (`donator_id`),
 KEY `agent_id` (`agent_id`),
 KEY `well_type_id` (`well_type_id`),
 KEY `country_id` (`country_id`),
 KEY `city_id` (`city_id`),
 KEY `owner_id` (`owner_id`),
 KEY `gallery_id` (`gallery_id`),
 CONSTRAINT `fk_well_gallery1` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`),
 CONSTRAINT `well_ibfk_1` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`id`),
 CONSTRAINT `well_ibfk_2` FOREIGN KEY (`agent_id`) REFERENCES `mosque_agent` (`id`),
 CONSTRAINT `well_ibfk_3` FOREIGN KEY (`well_type_id`) REFERENCES `well_type` (`id`),
 CONSTRAINT `well_ibfk_4` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
 CONSTRAINT `well_ibfk_5` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
 CONSTRAINT `well_ibfk_6` FOREIGN KEY (`owner_id`) REFERENCES `organization_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8");


	}

	public function down()
	{
		echo "m150125_111633_create_wells_tables does not support migration down.\n";
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