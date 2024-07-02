<?php


    class Movie {
        public $title;
        public $director;
        public $year;
        public $genre;  
        public static $currentyear = 2024;
        public $age;


    public function __construct($title, $director, $year, $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
        $this->age = $this->howoldIsthisMovie($year);  
    }

    public function howoldIsthisMovie($year) {
         $this->year = $year;
         return self::$currentyear - $year;
    }

}
?>