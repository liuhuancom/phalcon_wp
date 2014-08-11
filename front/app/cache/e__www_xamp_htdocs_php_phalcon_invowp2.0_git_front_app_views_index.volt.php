<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		 <?php echo $this->tag->getTitle(); ?>
		 <?php echo $this->tag->stylesheetLink('hbjy/css/basic.css'); ?>
		 <?php echo $this->tag->stylesheetLink('hbjy/css/layer.css'); ?>

		 <?php echo $this->tag->javascriptInclude('hbjy/js/jquery-1.8.3.min.js'); ?>
		 <?php echo $this->tag->javascriptInclude('hbjy/js/vr.js'); ?>
		 <?php echo $this->tag->javascriptInclude('hbjy/js/jquery.SuperSlide.js'); ?>

	</head>
	<body>
        <header class="top">
        <?php echo $this->tag->javascriptInclude('hbjy/js/home.js'); ?>
        <?php echo $this->tag->javascriptInclude('hbjy/js/jquery.jslides.js'); ?>

        <?php echo $this->getContent(); ?>

	</body>
</html>