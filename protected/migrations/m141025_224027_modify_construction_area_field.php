<?php

class m141025_224027_modify_construction_area_field extends CDbMigration
{
	public function up()
	{
	    $this->execute("ALTER TABLE  `mosque_type` CHANGE  `construction_area`  `construction_area` VARCHAR( 255 ) NOT NULL");
	}

	public function down()
	{
		echo "m141025_224027_modify_construction_area_field does not support migration down.\n";
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