<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   Healththeater
 */

/**
 * AuthManager rewrites CDbAuthManager.
 *
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 *
 * @package Healththeater\protected\components\WebUser
 * @author  Dmitriy Arbuzov <Dmitriy.Arbuzov@sigmaukraine.com>
 */
class AuthManager extends CDbAuthManager
{
	/**
	 * Item Table.
	 *
	 * @var string the name of the table storing authorization items. Defaults to 'AuthItem'.
	 */
	public $itemTable = 'tbl_auth_item';

	/**
	 * Item Child Table.
	 *
	 * @var string the name of the table storing authorization item hierarchy. Defaults to 'AuthItemChild'.
	 */
	public $itemChildTable = 'tbl_auth_item_child';

	/**
	 * Assignment Table.
	 *
	 * @var string the name of the table storing authorization item assignments. Defaults to 'AuthAssignment'.
	 */
	public $assignmentTable = 'tbl_auth_assignment';
}