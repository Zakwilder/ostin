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
class UserTask extends AuthItem
{
	const AUTH_ITEM_TYPE_TASK = 1;

	/**
	 * Operations.
	 *
	 * @var array
	 */
	public $operations = array();

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
	 * Get tasks.
	 *
	 * @return array
	 */
	public function getTasks()
	{

		$tasksList = array();
		$tasks = $this->findAllByAttributes(array('type' => self::AUTH_ITEM_TYPE_TASK));
		foreach ($tasks as $task) {
			$tasksList[] = $task->name;
		}
		return $tasksList;
	}

}
