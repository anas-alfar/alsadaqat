<?php

class m151010_212239_add_organization_id_and_organization_branch_id_to_all_missing_tables extends CDbMigration
{
	public function up()
	{
        $this->execute("SET foreign_key_checks = 0;");

	    $this->execute("ALTER TABLE  `event` ADD  `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER  `organization_id`;");
        $this->execute("ALTER TABLE  `event` ADD INDEX (  `organization_branch_id` );");
        $this->execute("ALTER TABLE  `event` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");

        $this->execute("ALTER TABLE `event_agenda` ADD `owner_id` INT( 11 ) UNSIGNED NOT NULL AFTER `day_number`");
        $this->execute("ALTER TABLE `event_agenda` ADD INDEX ( `owner_id` ) ");
        $this->execute("ALTER TABLE `event_agenda` ADD FOREIGN KEY ( `owner_id` ) REFERENCES `sadaqat_online`.`organization_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");

        $this->execute("ALTER TABLE  `event_type` ADD  `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER  `organization_id`;");
        $this->execute("ALTER TABLE  `event_type` ADD INDEX (  `organization_branch_id` );");
        $this->execute("ALTER TABLE  `event_type` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");

        $this->execute("ALTER TABLE  `gallery` ADD `owner_id` INT( 11 ) UNSIGNED NOT NULL");
        $this->execute("ALTER TABLE  `gallery` ADD `organization_id` INT( 11 ) UNSIGNED NOT NULL");
        $this->execute("ALTER TABLE  `gallery` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL;");
        $this->execute("ALTER TABLE  `gallery` ADD INDEX (  `owner_id`  ) ;");
        $this->execute("ALTER TABLE  `gallery` ADD INDEX (  `organization_id`  ) ;");
        $this->execute("ALTER TABLE  `gallery` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `gallery` ADD FOREIGN KEY (  `owner_id` ) REFERENCES  `sadaqat_online`.`organization_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        $this->execute("ALTER TABLE  `gallery` ADD FOREIGN KEY (  `organization_id` ) REFERENCES  `sadaqat_online`.`organization` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        $this->execute("ALTER TABLE  `gallery` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        
        $this->execute("ALTER TABLE  `mail_inbox` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `mail_inbox` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `mail_inbox` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `mail_outbox` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `mail_outbox` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `mail_outbox` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `mail_template` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `mail_template` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `mail_template` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `mail_type` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `mail_type` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `mail_type` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `mosque` ADD `organization_id` INT( 11 ) UNSIGNED NOT NULL AFTER `owner_id`");
        $this->execute("ALTER TABLE  `mosque` ADD INDEX (  `organization_id`  ) ;");
        $this->execute("ALTER TABLE  `mosque` ADD FOREIGN KEY (  `organization_id` ) REFERENCES  `sadaqat_online`.`organization` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `mosque` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `mosque` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `mosque` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `mosque` ADD `organization_id` INT( 11 ) UNSIGNED NOT NULL AFTER `owner_id`");
        $this->execute("ALTER TABLE  `mosque` ADD INDEX (  `organization_id`  ) ;");
        $this->execute("ALTER TABLE  `mosque` ADD FOREIGN KEY (  `organization_id` ) REFERENCES  `sadaqat_online`.`organization` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `mosque` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `mosque` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `mosque` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  ` mosque_agent` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  ` mosque_agent` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  ` mosque_agent` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");                
        
        $this->execute("ALTER TABLE  `mosque_type` ADD `organization_id` INT( 11 ) UNSIGNED NOT NULL AFTER `owner_id`");
        $this->execute("ALTER TABLE  `mosque_type` ADD INDEX (  `organization_id`  ) ;");
        $this->execute("ALTER TABLE  `mosque_type` ADD FOREIGN KEY (  `organization_id` ) REFERENCES  `sadaqat_online`.`organization` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `mosque_type` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `mosque_type` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `mosque_type` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");        
        
        $this->execute("ALTER TABLE  `well` ADD `organization_id` INT( 11 ) UNSIGNED NOT NULL AFTER `owner_id`");
        $this->execute("ALTER TABLE  `well` ADD INDEX (  `organization_id`  ) ;");
        $this->execute("ALTER TABLE  `well` ADD FOREIGN KEY (  `organization_id` ) REFERENCES  `sadaqat_online`.`organization` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `well` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `well` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `well` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");

        $this->execute("ALTER TABLE  `well_type` ADD `organization_id` INT( 11 ) UNSIGNED NOT NULL AFTER `owner_id`");
        $this->execute("ALTER TABLE  `well_type` ADD INDEX (  `organization_id`  ) ;");
        $this->execute("ALTER TABLE  `well_type` ADD FOREIGN KEY (  `organization_id` ) REFERENCES  `sadaqat_online`.`organization` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `well_type` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `well_type` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `well_type` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `task` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `task` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `task` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");
        
        $this->execute("ALTER TABLE  `organization_position` ADD `organization_branch_id` INT( 11 ) UNSIGNED NOT NULL AFTER `organization_id`;");
        $this->execute("ALTER TABLE  `organization_position` ADD INDEX (  `organization_branch_id` ) ;");
        $this->execute("ALTER TABLE  `organization_position` ADD FOREIGN KEY (  `organization_branch_id` ) REFERENCES  `sadaqat_online`.`organization_branch` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;");

        
        
        
        
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
        $this->execute("");
	}

	public function down()
	{
		echo "m151010_212239_add_organization_id_and_organization_branch_id_to_all_missing_tables does not support migration down.\n";
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