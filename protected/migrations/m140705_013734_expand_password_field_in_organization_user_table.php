<?php

class m140705_013734_expand_password_field_in_organization_user_table extends CDbMigration
{
	public function up()
	{
	    $this->execute("ALTER TABLE  `organization_user` CHANGE  `password`  `password` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
        $this->execute("UPDATE `organization_user` SET password='d3656cb774b34dfa0a105781329153b26ff0c2f3049decd667ef4dd82d13856640ace2adb959488494e0d95c3ab605fb76a8fa2cfff6bbcc9bd5daf60d7e93a4' WHERE `username`='admin'");
	}

	public function down()
	{
		echo "m140705_013734_expand_password_field_in_organization_user_table does not support migration down.\n";
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