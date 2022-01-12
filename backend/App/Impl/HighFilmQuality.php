<?php

namespace App\Impl;

use App\Impl\Interfaces\MovieInterface;

class HighFilmQuality implements MovieInterface {

  private $movie;

  public function __construct($movie) {
    $this->movie = $movie;
  }

  public function display() {
    echo 'display　'.$this->movie.' 720p';
  }
}