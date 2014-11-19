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
    //TODO replace URL with '/' before deploy to prod
    'brandUrl' => '/new/www/site/index',
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'htmlOptions'=>array(
                'style'=>'overflow-x:hidden'
            ),
            'activateParents' => true,
        ),
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'items' => array(
                // way 1
                BsHtml::beginForm( '/site/search', 'post', array(
                    'class' => 'navbar-form navbar-left',
                )),
                BsHtml::searchQueryControlGroup('search', '', array(
                    'prepend' => BsHtml::icon(BsHtml::GLYPHICON_SEARCH),
                    'placeholder' => 'Search'
                )),
                CHtml::htmlButton('Search',array('class'=>'btn btn-primary','type'=>'submit',)),
                BsHtml::endForm(),
                // way 2
/*    '<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>'*/
            ),
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

