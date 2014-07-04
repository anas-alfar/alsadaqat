<?php

class m140704_003101_add_gallery_id_to_mail_inbox extends CDbMigration
{
	public function up()
	{
        $this->execute("ALTER TABLE  `mail_inbox` ADD  `gallery_id` INTEGER DEFAULT NULL AFTER  `owner_id`");
        $this->execute("ALTER TABLE  `mail_inbox` ADD INDEX (  `gallery_id` )");
        $this->addForeignKey( 'fk_mail_inbox_gallery1', 'mail_inbox', 'gallery_id', 'gallery', 'id', 'RESTRICT', 'RESTRICT' );
	} 

	public function down()
	{
		echo "m140704_003101_add_gallery_id_to_mail_inbox does not support migration down.\n";
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