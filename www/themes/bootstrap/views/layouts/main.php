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
$cs->registerCoreScript('jquery', CClientScript::POS_END);
$cs->registerCoreScript('jquery.ui', CClientScript::POS_END);
$cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
$cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php
echo Yii::app()->theme->baseUrl . '/assets/js/html5shiv.js';
?>"></script>
    <script src="<?php
echo Yii::app()->theme->baseUrl . '/assets/js/respond.min.js';
?>"></script>
    <![endif]-->

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
                    'items' => array(
                        BsHtml::menuHeader(BsHtml::icon(BsHtml::GLYPHICON_BOOKMARK), array(
                            'class' => 'text-center',
                            'style' => 'color:#99cc32;font-size:32px;'
                        )),
                        array(
                            'label' => 'Home',
                            'url' => array(
                                '/site/index'
                            )
                        ),
                        array(
                            'label' => 'About',
                            'url' => array(
                                'site/page',
                                'view' => 'about'
                            )
                        ),
                        array(
                            'label' => 'Contact',
                            'url' => array(
                                '/site/contact'
                            )
                        ),
                        BsHtml::menuDivider(),
                        array(
                            'label' => 'Login',
                            'url' => array(
                                '/site/login'
                            ),
                            'visible' => Yii::app()->user->isGuest,
                            'icon' => BsHtml::GLYPHICON_LOG_IN
                        ),
                        array(
                            'label' => 'Logout (' . Yii::app()->user->name . ')',
                            'url' => array(
                                '/site/logout'
                            ),
                            'visible' => !Yii::app()->user->isGuest
                        ),
                        array(
                            'label' => 'Home',
                            'url' => array(
                                '/site/index'
                            ),
                            'icon' => BsHtml::GLYPHICON_HOME
                        ),
                        array(
                            'label' => 'About',
                            'url' => array(
                                '/site/page',
                                'view' => 'about'
                            ),
                            'icon' => BsHtml::GLYPHICON_PAPERCLIP
                        ),
                        array(
                            'label' => 'Contact',
                            'url' => array(
                                '/site/contact'
                            ),
                            'icon' => BsHtml::GLYPHICON_FLOPPY_OPEN
                        )
                    )
                )
            )
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

<?php
echo $content;
?>

