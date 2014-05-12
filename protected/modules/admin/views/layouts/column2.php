<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>

<div class="span2 well well-small">
	<a href="<?php echo Yii::app()->getBaseUrl(true); ?>">OnStage</a>
	<?php
		$this->widget(
			'bootstrap.widgets.TbMenu',
			array(
				'type' => 'list',
				'items' => array(

				)
			)
		);
	?><!-- sidebar -->
</div>

<div class="span10 well well-small">
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>