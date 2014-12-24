<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Zaid Rahman Husni.<br/>
		All Rights Reserved.<br/>
		
	</div><!-- footer -->

</div><!-- page -->
<style>
    .content-atas{
        width: 890px;
        border-top: 1px solid #c9e0ed;
        border-bottom: 1px solid #c9e0ed;
        padding: 10px;
        display: inline-block
    }
    .content-tengah{padding: 10px;}
    .left-content{float: left}
    .right-content{float: right}
    input[type=button],input[type=submit]{cursor: pointer}
</style>
<?
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery-1.11.2.min.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/fancybox/jquery.fancybox.js?v=2.1.5');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.validate.min.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/additional-methods.js');
?>
<script>
    $(function(){
		$('.fancybox').fancybox();
        
        
		$('#form-add').validate({
			rules:{
				nama    : {required: true,maxlength: 100,},
				kelas   : {required: true,maxlength: 100},
				nim     : {required: true,maxlength: 100},
				jur     : {required: true,maxlength: 100},
			}
		});
		
		$('#form-login').validate({
			rules:{
				'LoginForm[username]': {required: true,maxlength: 100,},
				'LoginForm[password]': {required: true,maxlength: 100},
			}
		});
    })
</script>
</body>
</html>
