<?php

namespace App\Impl;

use App\Impl\Interfaces\MovieInterface;

class LowFilmQuality implements MovieInterface {

  private $movie;

  public function __construct($movie) {
    $this->movie = $movie;
  }

  public function display() {
    echo 'display　'.$this->movie.' 240p';
  }
}