<?php

class m141219_220526_upadte_users_passwords extends CDbMigration {
	public function up() {
		$this->execute("UPDATE `sadaqat_online`.`organization_user` SET `password` = '534fec41c127916ced85689cf11ec711825bd7c31977337d63dfc389a9a54cedd16896374c9882c70160ed8a9eeb340801a635fff819a878f08d98a05a06e7aa' WHERE `organization_user`.`id` =1;");
		$this->execute("UPDATE `sadaqat_online`.`organization_user` SET `password` = 'd43a8657e43d9d9df69d40382f03d29ff50b971aac3f9642e32abf1941e537100cd041cf3eb5565877afc03c01de1017df109e4475ed00fdd19914309c6206b9' WHERE `organization_user`.`id` =2;");
	}

	public function down() {
		echo "m141219_220526_upadte_users_passwords does not support migration down.\n";
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