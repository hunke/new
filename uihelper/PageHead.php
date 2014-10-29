<?php
/**
 * Created by PhpStorm.
 * User: sergii.shkap
 * Date: 10/24/2014
 * Time: 12:43 PM
 */

class PageHead {
    public $relativePath;
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
        echo "css/uikit.css'/>";
    }

    public function applyJs(){
        echo "<script src='";
        echo $this->getRelativePath();
        echo "js/uikit.min.js'/>";
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
        $this->closeHead();
    }
}