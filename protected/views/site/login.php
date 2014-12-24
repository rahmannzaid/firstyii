<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class='row'>
                <label for='username'>Username</label>
                <?php echo $form->textField($model,'username'); ?>
            </div>
            <div class='row'>
                <label for='password'>Password</label>
                <?php echo $form->passwordField($model,'password'); ?>
            </div>
            <div class='row'>
                <input type='submit' value='Simpan'/>
            </div>


<?php $this->endWidget(); ?>
</div><!-- form -->
