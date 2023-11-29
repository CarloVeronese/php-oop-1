<?php

require_once __DIR__ . '/Production.php';

class Series extends Production 
{
    protected $seasons;
    
    function __construct(string $_title, string $_language, $_rating, $_seasons) {
        parent::__construct($_title, $_language, $_rating);
        $this->setSeasons($_seasons);
    }

    public function setSeasons($_seasons) {
        if(is_numeric($_seasons) && $_seasons >= 0) {
            $this->seasons = intval($_seasons);
        } else {
            $this->seasons = null;
            var_dump('$seasons has non acceptable value');
        }
    }

    public function getSeasons() {
        return $this->$seasons;
    }
}