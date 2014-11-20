<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form BsActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

$this->breadcrumbs=array(
	'Login',
);
?>
<div class="page-header">

    <h1>Login <small>or <?php echo BsHtml::link('Register','/site/register') ?></small></h1>
</div>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>


		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>


			<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php
        echo BsHtml::error($model,'password');?>
        <div class="clearfix"></div>
		<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>



		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>

		<?php
        echo $form->error($model,'rememberMe',array()); ?>
    <div class="clearfix"></div>

		<?php echo BsHtml::submitButton('Login',array('class'=>'btn btn-success')); ?>


<?php $this->endWidget(); ?>
</div><!-- form -->
