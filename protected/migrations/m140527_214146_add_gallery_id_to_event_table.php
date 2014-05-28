<?php

class m140527_214146_add_gallery_id_to_event_table extends CDbMigration
{
	public function up()
	{
        $this->execute("ALTER TABLE  `event` ADD  `gallery_id` INTEGER DEFAULT NULL AFTER  `city_id`");
        $this->execute("ALTER TABLE  `event` ADD INDEX (  `gallery_id` )");
        $this->addForeignKey( 'fk_event_gallery1', 'event', 'gallery_id', 'gallery', 'id', 'RESTRICT', 'RESTRICT' );
	}

	public function down()
	{
		echo "m140527_214146_add_gallery_id_to_event_table does not support migration down.\n";
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