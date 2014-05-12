<?php

class m140512_095341_create_admin_user extends CDbMigration
{
	/**
	 * Up.
	 *
	 * @return void
	 */
	public function up()
	{
		$userRole      = 'admin';
		$userName      = 'admin';

		$user = User::model()->findByAttributes(array('username' => $userName));

		if (!$user) {
			$user = new User;
		}

		$user->email    = 'gzak88@gmail.com';
		$user->username = $userName;
		$user->password = crypt('admin');

		$user->save();

		$auth = Yii::app()->authManager;

		$task = $auth->createTask('admin_management', 'Admin management');
		$task->addChild('create');
		$task->addChild('read');
		$task->addChild('update');
		$task->addChild('delete');

		$role = $auth->createRole($userRole);
		$role->addChild('admin_management');

		$auth->assign($userRole, $user->id);
	}

	/**
	 * Down.
	 *
	 * @return void
	 */
	public function down()
	{
		$userName = 'admin';

		$admin = User::model()->findByAttributes(array('username' => $userName));

		if ($admin) {
			$admin->delete();
		}
	}
}