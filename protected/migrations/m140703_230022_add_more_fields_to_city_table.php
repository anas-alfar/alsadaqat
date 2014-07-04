<?php

class m140703_230022_add_more_fields_to_city_table extends CDbMigration
{
	public function up()
	{
	    $this->execute("
	               ALTER TABLE  `city` ADD  `population_count` INT( 11 ) UNSIGNED NULL AFTER  `published` ,
	               ADD  `houses_count` INT( 11 ) UNSIGNED NULL AFTER  `population_count` ,
	               ADD  `distance_to_capital` INT( 11 ) UNSIGNED NULL AFTER  `houses_count`
	                   "
       );
	}

	public function down()
	{
		echo "m140703_230022_add_more_fields_to_city_table does not support migration down.\n";
        $this->execute("
                    ALTER TABLE  `city` DROP  `population_count` ,
                    DROP  `houses_count` ,
                    DROP  `distance_to_capital` ;
                    "
        );
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