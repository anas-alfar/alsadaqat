<?php

class m150222_200653_add_forget_password_columns_to_organization_user_table extends CDbMigration
{
	public function up()
	{
	    $this->execute("ALTER TABLE  `organization_user` ADD  `perishable_token` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER  `password` ,
ADD  `forget_password_expiration` DATETIME NOT NULL AFTER  `perishable_token`");
	}

	public function down()
	{
		echo "m150222_200653_add_forget_password_columns_to_organization_user_table does not support migration down.\n";
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