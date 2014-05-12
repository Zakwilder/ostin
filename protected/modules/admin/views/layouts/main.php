<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" ng-app="htp">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>

<div class="container-fluid">

	<div class="row-fluid" id="admin-header">
		<div class="admin-container">
			<a href="/admin" id="admin-logo" title="HealthTheater"></a>
			<div class="title">
				<?php echo CHtml::encode(Yii::app()->name);?>
			</div>
		</div>
	</div><!-- header -->
    <div class="row-fluid">
        <div class="span12">
            <?php
                if( isset($this->breadcrumbs) ) {
                    $this->widget(
                        'bootstrap.widgets.TbBreadcrumbs',
                            array(
                                'links' => $this->breadcrumbs,
                                'homeLink' => false,
                            )
                    );
                }
            ?><!-- breadcrumbs -->
        </div>
    </div>
    <div class="row-fluid">
	    <?php echo $content; ?>
    </div>

    <div class="row-fluid">
        <div class="span12 well well-small" id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by Sigmaukraine.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
        </div>
    </div>
</div>



</body>
</html>
