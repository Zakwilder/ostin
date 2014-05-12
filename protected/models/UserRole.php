<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   Healththeater
 */

/**
 * This is the model class for user roles management.
 *
 * @package Healththeater\protected\models
 * @author  Eugene Zakursky <Eugene.Zakursky@sigmaukraine.com>
 */
class UserRole extends AuthItem
{
	const AUTH_ITEM_TYPE_ROLE = 2;

	/**
	 * Role task.
	 *
	 * @var string
	 */
	public $role_task;

	/**
	 * Returns the static model of the specified AR class.
	 *
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 *
	 * @param string $className Active record class name.
	 *
	 * @return UserRole the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * Get roles.
	 *
	 * @return array
	 */
	public function getRoles()
	{

		$rolesList = array();
		$roles = $this->findAllByAttributes(array('type' => self::AUTH_ITEM_TYPE_ROLE));
		foreach ($roles as $role) {
			$rolesList[] = $role->name;
		}
		return $rolesList;
	}

	/**
	 * Returns the static model of the specified AR class.
	 *
	 * @return Array of UserRole objects
	 */
	public static function getRoleTasks()
	{
		$tasks = $roles = Yii::app()->authManager->getTasks();
		$list = CHtml::listData($tasks, 'name', 'name');
		return $list;
	}

}
