<?php

class m141224_014157_update_users_password_after_password_fix extends CDbMigration {
	public function up() {
		$this->execute("UPDATE `sadaqat_online`.`organization_user` SET `password` = '8092f425d1fcef41749d5df945f8e120fc57b5d6d84fc304fd8438d84affc4bd5ce00afea3488ef8f383bdc029b81438bf32c31dffb1e6d7aec96ad50781dc88' WHERE `organization_user`.`id` =1;");
		$this->execute("UPDATE `sadaqat_online`.`organization_user` SET `password` = '7711c868276af3ef758e2c5a3fd7438f86e1246c11f30ef1f5f5e3bc2a8882276d2e1765e9fb36e112bd19ba1931ff540fd4da39006886e641d55e720cf8de6d' WHERE `organization_user`.`id` =2;");
	}

	public function down() {
		echo "m141224_014157_update_users_password_after_password_fix does not support migration down.\n";
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