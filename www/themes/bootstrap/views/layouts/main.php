<?php
$cs = Yii::app()->clientScript;
$themePath = Yii::app()->theme->baseUrl;

/**
 * StyleSHeets
 */
$cs->registerCssFile($themePath . '/assets/css/bootstrap.css');
$cs->registerCssFile($themePath . '/assets/css/bootstrap-theme.css');
$cs->registerCssFile( '/css/main.css' );

/**
 * JavaScripts
 */
$cs->registerCoreScript('jquery', CClientScript::POS_END);
$cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
$cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
?>

<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<?php
$this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_HOME),
    'brandUrl' => Yii::app()->homeUrl,
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'htmlOptions'=>array(
                'style'=>'overflow-x:hidden'
            ),
            'activateParents' => true,
        ),
        BsHtml::beginForm( '/site/search', 'post', array(
            'class' => 'navbar-form navbar-left',
        )),
        BsHtml::searchQueryControlGroup('search', '', array(
            'prepend' => BsHtml::icon(BsHtml::GLYPHICON_SEARCH),
            'placeholder' => 'Search'
        )),
        BsHtml::button('Search',array('class'=>'btn','type'=>'submit')),
        BsHtml::endForm(),
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'activateParents' => true,
            'items' => array(
                array(
                    'label' => 'Login',
                    'url' => array(
                        '/site/login'
                    ),
                    'visible' => Yii::app()->user->isGuest
                ),
                array(
                    'label' => 'Logout (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array(
                        '/site/logout'
                    ),
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
            )
        )

    )
));
?>
<div class="container">

<? echo $content; ?>

</div>

<footer class="footer">
<?php

$this->beginWidget('bootstrap.widgets.BsPanel', array( 'contentCssClass'=>'panel-body centered-pills' ));

echo BsHtml::pills(array(
    array(
        'label' => 'About',
        'url' => array(
            '/site/page',
            'view' => 'about'
        )
    ),
    array(
        'label' => 'Contact',
        'url' => '/site/contact'
    ),
));

$this->endWidget();
?>
</footer>