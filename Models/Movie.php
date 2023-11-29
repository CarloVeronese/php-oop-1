<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production 
{
    protected $profit;

    protected $duration;
    
    function __construct(string $_title, string $_language, $_rating, $_profit, $_duration) {
        parent::__construct($_title, $_language, $_rating);
        $this->setProfit($_profit);
        $this->setDuration($_duration);
    }

    public function setProfit($_profit) {
        if(is_numeric($_profit) && $_profit >= 0) {
            $this->profit = floatval($_profit);
        } else {
            $this->profit = null;
            var_dump('$profit has non acceptable value');
        }
    }
    
        public function setDuration($_duration) {
        if(is_numeric($_duration) && $_duration >= 0) {
            $this->duration = intval($_duration);
        } else {
            $this->duration = null;
            var_dump('$duration has non acceptable value');
        }
    }

    public function getProfit() {
        return $this->profit;
    }

    public function getDuration() {
        return $this->duration;
    }
}