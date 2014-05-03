<?php

class m140503_190913_test_migration extends CDbMigration
{
	public function up()
	{
	    $this->execute("");
	}

	public function down()
	{
		echo "m140503_190913_test_migration does not support migration down.\n";
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