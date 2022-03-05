<?php
class Movie
{
    public $title;
    public $plot;
    public $duration;
    public $category;

    public function __construct($title, $plot, $duration, $category)
    {
        $this->title = $title;
        $this->plot = $plot;
        $this->duration =$duration;
        $this->category = $category;
    }

    public function getExtract()
    {
        return substr($this->plot, 0, 150) . '...';
    }
}