<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Dogs Palace</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/ostin/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
    <div id="logo"> <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" alt="" border="0" /></a> </div>
    <div id="header">
        <ul>
            <li><a href="<?php echo $this->createUrl('site/index')?>">home</a></li>
            <li><a href="<?php echo $this->createUrl('site/contact')?>">about us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">News &amp; Updates</a></li>
            <li><a href="#">Place and order</a></li>
            <li><a href="#" class="lastchild">Contact</a></li>
        </ul>
    </div>
    <div id="content">

        <?php echo $content; ?>


        <div class="clear"></div>
    </div>
    <div id="footer">© Dogs palace copyright all rights reserve.</div>
</div>
</body>
</html>
