<?php
/**
 * @copyright Copyright (c) Sigma Ukraine
 * @package   Yiitrn
 */

/**
 * Default Admin controller.
 *
 * @package Yiitrn\modules\admin\controllers
 * @author  Eugene Zakursky <Eugene.Zakursky@sigmaukraine.com>
 */

class DefaultController extends Controller
{
	/**
	 * Layout for AdminController.
	 *
	 * @var string
	 */
	public $layout = '/layouts/column2';

	/**
	 * Controller filters.
	 *
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	/**
	 * Specifies the access control rules.
	 *
	 * This method is used by the 'accessControl' filter.
	 *
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			// Allow all users to perform 'index' and 'view' actions.
			array('allow',
				'roles' => UserRole::model()->getRoles(),

			),
			// Deny all users.
			array('deny',
				'users'          => array('?'),
				'deniedCallback' => array($this, 'adminDeniedCallback'),
			),
		);
	}

	/**
	 * Function for deniedCallback parameter.
	 *
	 * @return void
	 */
	public function adminDeniedCallback()
	{
		$this->redirect(Yii::app()->baseUrl . '/site/login');
	}

	/**
	 * Displays Admin main page.
	 *
	 * @return void
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

}