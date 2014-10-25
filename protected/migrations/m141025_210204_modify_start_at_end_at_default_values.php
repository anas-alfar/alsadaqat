<?php

class m141025_210204_modify_start_at_end_at_default_values extends CDbMigration
{
	public function up()
	{
	    $this->execute("ALTER TABLE  `task` CHANGE  `start_at`  `start_at` DATETIME NULL DEFAULT NULL");
        $this->execute("ALTER TABLE  `task` CHANGE  `end_at`  `end_at` DATETIME NULL DEFAULT NULL");
	}

	public function down()
	{
		echo "m141025_210204_modify_start_at_end_at_default_values does not support migration down.\n";
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