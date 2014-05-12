<?php

class m140512_094709_create_role_opee_auth_assignment_table extends CDbMigration
{
	/**
	 * Up.
	 *
	 * @return void
	 */
	public function up()
	{
		$db = $this->getDbConnection();
		$db->createCommand('
			create table `tbl_auth_assignment`
			(
			   `itemname`             varchar(64) not null,
			   `userid`               varchar(64) not null,
			   `bizrule`              text,
			   `data`                 text,
			   primary key (`itemname`,`userid`),
			   foreign key (`itemname`) references `tbl_auth_item` (`name`) on delete cascade on update cascade
			) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci;
		')->execute();
	}

	/**
	 * Down.
	 *
	 * @return void
	 */
	public function down()
	{
		$db = $this->getDbConnection();
		$db->createCommand('DROP TABLE IF EXISTS `tbl_auth_assignment`')->execute();
	}
}