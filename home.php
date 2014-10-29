<?php
include "uihelper/PageHead.php";
include "uihelper/ToolBar.php";
$h= new PageHead();
$h->generateHead("Ololo","","description","Keywords");
$t= new ToolBar();
$t->openBody();
$t->setRelativePath("");
$t->setSearchBtnText("Поиск");
$t->setSearchPlaceHolder("Електрик Дарница...");
$t->openToolBar();
$t->addHomeToNavBar("LookWTF");
$t->addSearchToNavBar();
$t->closeToolBar();