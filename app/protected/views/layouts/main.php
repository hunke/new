<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $baseUrl = Yii::app()->baseUrl;
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile($baseUrl.'/js/jquery-2.1.1.min.js');
    $cs->registerScriptFile($baseUrl.'/js/bootstrap.min.js');
    $cs->registerCssFile($baseUrl.'/css/bootstrap.min.css');
    $cs->registerCssFile($baseUrl.'/css/bootstrap-theme.min.css');
    ?>
	<!-- blueprint CSS framework -->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <?php echo CHtml::link(Yii::app()->name,array('site/index'),array('class'=>'navbar-brand')) ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">

                    <?php $this->widget('zii.widgets.CMenu',array(
                        'htmlOptions'=>array(
                            'class'=>'nav navbar-nav'
                        ),
                        'items'=>array(
                            array('label'=>'Home', 'url'=>array('/site/index')),
                            array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                            array('label'=>'Contact', 'url'=>array('/site/contact')),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        ),
                    )); ?>

                </ul>


            </div>
            </div><!--container-->

        </nav>

        <div class="container">
        <!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
</div><!--container-->
</div><!-- page -->

</body>
</html>
