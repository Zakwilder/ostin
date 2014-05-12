<?php

class m140512_094619_create_role_opee_auth_item_child_table extends CDbMigration
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
			create table `tbl_auth_item_child`
			(
			   `parent`               varchar(64) not null,
			   `child`                varchar(64) not null,
			   primary key (`parent`,`child`),
			   foreign key (`parent`) references `tbl_auth_item` (`name`) on delete cascade on update cascade,
			   foreign key (`child`) references `tbl_auth_item` (`name`) on delete cascade on update cascade
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
		$db->createCommand('DROP TABLE IF EXISTS `tbl_auth_item_child`')->execute();
	}
}