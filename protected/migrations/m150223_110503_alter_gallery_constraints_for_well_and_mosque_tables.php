<?php

class m150223_110503_alter_gallery_constraints_for_well_and_mosque_tables extends CDbMigration
{
	public function up()
	{
	    $this->execute("ALTER TABLE  `mosque` DROP FOREIGN KEY  `fk_mosque_gallery1` ,
ADD FOREIGN KEY (  `gallery_id` ) REFERENCES  `sadaqat_online`.`gallery` (
`id`
) ON DELETE SET NULL ON UPDATE SET NULL ;");
	    $this->execute("ALTER TABLE  `well` DROP FOREIGN KEY  `fk_well_gallery1` ,
ADD FOREIGN KEY (  `gallery_id` ) REFERENCES  `sadaqat_online`.`gallery` (
`id`
) ON DELETE SET NULL ON UPDATE SET NULL ;");

	}

	public function down()
	{
		echo "m150223_110503_alter_gallery_constraints_for_well_and_mosque_tables does not support migration down.\n";
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