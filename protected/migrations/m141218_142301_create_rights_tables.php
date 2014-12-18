<?php

class m141218_142301_create_rights_tables extends CDbMigration
{
	public function up()
	{
	    $this->execute("drop table if exists auth_item;");
	    $this->execute("drop table if exists auth_item_child;");
	    $this->execute("drop table if exists auth_assignment;");
	    $this->execute("drop table if exists auth_rights;");
	    
	    $this->execute("CREATE TABLE `auth_item` (
 `name` varchar(64) NOT NULL,
 `type` int(11) NOT NULL,
 `description` text,
 `bizrule` text,
 `data` text,
 PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

	    $this->execute("CREATE TABLE `auth_item_child` (
 `parent` varchar(64) NOT NULL,
 `child` varchar(64) NOT NULL,
 PRIMARY KEY (`parent`,`child`),
 KEY `child` (`child`),
 CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

	    $this->execute("CREATE TABLE `auth_assignment` (
 `itemname` varchar(64) NOT NULL,
 `userid` varchar(64) NOT NULL,
 `bizrule` text,
 `data` text,
 PRIMARY KEY (`itemname`,`userid`),
 CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

	    $this->execute("CREATE TABLE `auth_rights` (
 `itemname` varchar(64) NOT NULL,
 `type` int(11) NOT NULL,
 `weight` int(11) NOT NULL,
 PRIMARY KEY (`itemname`),
 CONSTRAINT `auth_rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

    $this->execute("INSERT INTO  `sadaqat_online`.`auth_item` (`name`, `type`, `description`, `bizrule`, `data`) VALUES ( 'Admin', 2, NULL , NULL , 'N;' );");
    $this->execute("INSERT INTO  `sadaqat_online`.`auth_item` (`name`, `type`, `description`, `bizrule`, `data`) VALUES ( 'Authenticated', 2, NULL , NULL , 'N;' );");
    $this->execute("INSERT INTO  `sadaqat_online`.`auth_item` (`name`, `type`, `description`, `bizrule`, `data`) VALUES ( 'Guest', 2, NULL , NULL , 'N;' );");

    $this->execute("INSERT INTO  `sadaqat_online`.`auth_assignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES ( 'Admin',  '1', NULL , 'N;' );");
    
	}

	public function down()
	{
		echo "m141218_142301_create_rights_tables does not support migration down.\n";
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