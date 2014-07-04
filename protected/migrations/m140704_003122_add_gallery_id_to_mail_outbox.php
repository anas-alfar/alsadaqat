<?php

class m140704_003122_add_gallery_id_to_mail_outbox extends CDbMigration
{
	public function up()
	{
        $this->execute("ALTER TABLE  `mail_outbox` ADD  `gallery_id` INTEGER DEFAULT NULL AFTER  `owner_id`");
        $this->execute("ALTER TABLE  `mail_outbox` ADD INDEX (  `gallery_id` )");
        $this->addForeignKey( 'fk_mail_outbox_gallery1', 'mail_outbox', 'gallery_id', 'gallery', 'id', 'RESTRICT', 'RESTRICT' );
	} 

	public function down()
	{
		echo "m140704_003122_add_gallery_id_to_mail_outbox does not support migration down.\n";
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