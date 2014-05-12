<?php

class m140512_094509_create_role_opee_auth_item_table extends CDbMigration
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
			create table `tbl_auth_item`
			(
			   `name`                 varchar(64) not null,
			   `type`                 integer not null,
			   `description`          text,
			   `bizrule`              text,
			   `data`                 text,
			   primary key (`name`)
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
		$db->createCommand('DROP TABLE IF EXISTS `tbl_auth_item`')->execute();
	}
}