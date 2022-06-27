<?php

class Movie{
    public $title;
    public $movieDirector;
    public $year;
    public $duration;
    public $price;

    public $discount = 0;

    public function __construct($_title, $_movieDirector, $_year, $_duration, $_price){

        $this->title = $_title;
        $this->movieDirector = $_movieDirector;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->price = $_price;

        if($this->year < 2020) {
            $this->discount = $this->price * 0.8;
    }


}