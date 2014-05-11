<?php

class m140508_144122_create_user_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_user', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT',
            'username' => 'VARCHAR(128) NOT NULL',
            'password' => 'VARCHAR(128) NOT NULL',
            'email' => 'VARCHAR(128) NOT NULL',
        ));
	}

	public function down()
	{
		$this->dropTable('tbl_user');
	}

}