<?php

class Production 
{
    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating) {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
    }
    public function setRating($rating) {
        if(is_numeric($rating) && $rating >= 0 && $rating <= 5) {
            $this->rating = floatval($rating);
        }
        else {
            $this->rating = null;
            var_dump('$rating parameter is not correct');
        }
    }

    public function getTitle(){
        return $this->title;
    }

    public function getLanguage(){
        return $this->language;
    }

    public function getRating(){
        return $this->rating;
    }
}