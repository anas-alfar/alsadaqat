<?php

class m140524_224141_create_image_gallery_migration extends CDbMigration
{
	public function up()
	{

        //$this->execute("SET foreign_key_checks = 0;");
        
       $this->createTable( 'gallery', array(
          'id' => 'pk',
          'versions_data' => 'text NOT NULL',
          'name' => 'boolean NOT NULL DEFAULT 1',
          'description' => 'boolean NOT NULL DEFAULT 1',
          //'type'        => 'enum("archive","statistic") NOT NULL'
        ) );
        
        $this->createTable( 'gallery_photo', array(
          'id' => 'pk',
          'gallery_id' => 'integer NOT NULL',
          'rank' => 'integer NOT NULL DEFAULT 0',
          'name' => 'string NOT NULL',
          'description' => 'text',
          'file_name' => 'string NOT NULL'
        ) );

        $this->addForeignKey( 'fk_gallery_photo_gallery1', 'gallery_photo', 'gallery_id', 'gallery', 'id', 'NO ACTION', 'NO ACTION' );
        
        $this->execute("ALTER TABLE  `mosque` ADD  `gallery_id` INTEGER DEFAULT NULL AFTER  `city_id`");
        $this->execute("ALTER TABLE  `mosque` ADD INDEX (  `gallery_id` )");
        $this->addForeignKey( 'fk_mosque_gallery1', 'mosque', 'gallery_id', 'gallery', 'id', 'RESTRICT', 'RESTRICT' );
        
	}

    public function down() {
        $this->execute("SET foreign_key_checks = 0;");
        $this->dropTable( 'gallery_photo' );
        $this->dropTable( 'gallery' );
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