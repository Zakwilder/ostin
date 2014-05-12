<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));

		$this->_initBootstrap();
		$this->_initJsCss();
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}

	/**
	 * Css and js initialization.
	 *
	 * @return void
	 */
	private function _initJsCss(){
		$cs = Yii::app()->clientScript;
		$cs->registerCssFile(Yii::app()->baseUrl . '/css/admin/admin.css');

	}

	/**
	 * Yiibooster initialization.
	 *
	 * @return void
	 */
	private function _initBootstrap(){
		Yii::app()->bootstrap->register();
	}
}
