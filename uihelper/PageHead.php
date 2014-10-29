<?php
/**
 * Created by PhpStorm.
 * User: sergii.shkap
 * Date: 10/24/2014
 * Time: 12:43 PM
 */

class PageHead {
    public $relativePath;
    public $JS_FILE_PATH="js/uikit.min.js";
    public $JS_JQUERY_FILE_PATH="js/jquery-2.1.1.min.js";
    public $CSS_FILE_PATH="css/uikit.docs.min.css";
    public $CUSTOM_CSS_FILE_PATH="css/uikit-custom.css";
    public  $closeTagSuffix="/>";
    public function getRelativePath()
    {
        return $this->relativePath;
    }
    public function setRelativePath($relativePath)
    {
        $this->relativePath = $relativePath;
    }

    public $pageTitle;
     public function getPageTitle()
    {
        return $this->pageTitle;
    }
  public function setPageTitle($title)
    {
        $this->pageTitle = $title;
    }

    public function openHead(){
        echo "<head>";
    }

    public function closeHead(){
        echo "</head>";
    }

    //required for mobile devices
    public function addViewPortMeta(){
        echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
    }

    public function addKeywords($keyWords){
        echo "<meta name='keywords' content='";
        echo $keyWords;
        echo "'/>";
    }

    public function addDescription($description){
        echo "<meta name='description' content='";
        echo $description;
        echo "'/>";
    }

    public function addXUACompatibility(){
        echo "<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>";
    }
    public function addPageTitle(){
        echo "<title>$this->pageTitle</title>";
    }

    //TODO add Favicon
    public function addFavicon(){
        echo "<link rel='shortcut icon' href='";
        echo $this->getRelativePath();
        echo "images/favicon.ico' type='image/x-icon'/>";
    }

    public function applyCss(){
        echo "<link rel='stylesheet' href='";
        echo $this->getRelativePath();
        echo $this->CSS_FILE_PATH;
        echo "'";
        echo $this->closeTagSuffix;
        echo "<link rel='stylesheet' href='";
        echo $this->getRelativePath();
        echo $this->CUSTOM_CSS_FILE_PATH;
        echo "'";
        echo $this->closeTagSuffix;
    }

    public function applyJs(){
        echo "<script src='";
        echo $this->getRelativePath();
        echo $this->JS_JQUERY_FILE_PATH;
        echo "'></script>";
        echo "<script src='";
        echo $this->getRelativePath();
        echo $this->JS_FILE_PATH;
        echo "'></script>";
    }
    public function generateHead($pageTitle,$relativePath, $desc, $keywords){
        $this->setPageTitle($pageTitle);
        $this->setRelativePath($relativePath);
        $this->openHead();
        $this->addDescription($desc);
        $this->addKeywords($keywords);
        $this->addViewPortMeta();
        $this->addFavicon();
        $this->addXUACompatibility();
        $this->addPageTitle();
        $this->applyCss();
        $this->applyJs();
        $this->closeHead();
    }

}