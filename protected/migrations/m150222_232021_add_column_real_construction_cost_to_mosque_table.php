<?php

class m150222_232021_add_column_real_construction_cost_to_mosque_table extends CDbMigration
{
	public function up()
	{
	    $this->execute("ALTER TABLE  `mosque` ADD  `real_construction_cost` FLOAT UNSIGNED NOT NULL AFTER  `construction_progress`");
	}

	public function down()
	{
		echo "m150222_232021_add_column_real_construction_cost_to_mosque_table does not support migration down.\n";
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