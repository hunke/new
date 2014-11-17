<?php
$cs = Yii::app()->clientScript;
$themePath = Yii::app()->theme->baseUrl;

/**
 * StyleSHeets
 */
$cs->registerCssFile($themePath . '/assets/css/bootstrap.css');
$cs->registerCssFile($themePath . '/assets/css/bootstrap-theme.css');

/**
 * JavaScripts
 */
$cs->registerCoreScript('jquery-2.1.1.min.js', CClientScript::POS_END);
$cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
$cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
?>

<?php
$this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_HOME),
    'brandUrl' => '/',
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'activateParents' => true,
            'items' => array(
                array(
                    'label' => 'Home',
                    'url' => array(
                        'site/index'
                    ),
                ),
            )
        ),
        array(
            'class' => 'bootstrap.widgets.BsActiveForm',
            'layout' => BsHtml::FORM_LAYOUT_INLINE,
            'id'=>'shit',
            'htmlOptions'=>array(
                'class'=>'navbar-form navbar-left'
            ),
//           'inputContainer' => 'div.form-group', // Bootstrap requires this, (from BsActiveForm.php)
        ),
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'activateParents' => true,
            'items' => array(
                array(
                    'label' => 'About',
                    'url' => array(
                        '/site/page',
                        'view' => 'about'
                    )
                ),
                array(
                    'label' => 'Contact',
                    'url' => array(
                        '/site/contact'
                    )
                ),
                array(
                    'label' => 'Login',
                    'url' => array(
                        '/site/login'
                    ),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
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
<?php
echo $content;
?>
</div>

