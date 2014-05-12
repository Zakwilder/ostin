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
class UserOperation extends AuthItem
{
	const AUTH_ITEM_TYPE_OPERATION = 0;

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
	 * Get operations.
	 *
	 * @return array
	 */
	public function getOperations()
	{

		$operationList = array();
		$operations = $this->findAllByAttributes(array('type' => self::AUTH_ITEM_TYPE_OPERATION));
		foreach ($operations as $operation) {
			$operationList[] = $operation->name;
		}
		return $operationList;
	}

}
