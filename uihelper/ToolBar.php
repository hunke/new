<?php

class ToolBar {
    public function openBody(){
        echo "<body>";
    }
    public function closeBody(){
        echo "</body>";
    }
    public $relativePath;

    public function getRelativePath()
    {
        return $this->relativePath;
    }
    public function setRelativePath($relativePath)
    {
        $this->relativePath = $relativePath;
    }
    public $searchPlaceHolder;

    public function getSearchPlaceHolder()
    {
        return $this->searchPlaceHolder;
    }
    public function setSearchPlaceHolder($searchPlaceHolder)
    {
        $this->searchPlaceHolder = $searchPlaceHolder;
    }
    public $searchBtnText;

    public function getSearchBtnText()
    {
        return $this->searchBtnText;
    }
    public function setSearchBtnText($searchBtnText)
    {
        $this->searchBtnText = $searchBtnText;
    }
    public function openToolBar(){
        echo "<nav class='uk-navbar uk-navbar-attached'>";
        //center topbar
        echo "<div class='uk-container uk-container-center'>";
    }
    //TODO make icon
    public function addHomeToNavBar($brandName){
       echo "
       <div class='uk-container uk-container-center'>
                <a class='uk-navbar-brand uk-hidden-small' href='";
        echo $this->relativePath;
        //TODO insert link to homePage
        echo "'>
        <img class='uk-margin uk-margin-remove' src='";
        //TODO insert logoPath
        echo"'/>";
        echo "";
        echo $brandName;
        echo "</a>";

    }
    public function closeToolBar(){
        echo "</div></div>";
        echo "</nav>";
    }
    public function addSearchToNavBar(){
        echo "<form class='uk-form'>
                <fieldset data-uk-margin>
                <input type='text' placeholder='";
                    echo $this->getSearchPlaceHolder();
                echo"'><button class='uk-button-primary uk-button'>";
                    echo $this->getSearchBtnText();
                echo "</button>
    </fieldset>

</form>";
    }

} 