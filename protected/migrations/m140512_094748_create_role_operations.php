<?php

class m140512_094748_create_role_operations extends CDbMigration
{
	/**
	 * Up.
	 *
	 * @return void
	 */
	public function up()
	{
		$auth = Yii::app()->authManager;

		$auth->createOperation('create', 'create record');
		$auth->createOperation('read', 'read record');
		$auth->createOperation('update', 'update record');
		$auth->createOperation('delete', 'delete record');
	}

	/**
	 * Down.
	 *
	 * @return void
	 */
	public function down()
	{

	}
}