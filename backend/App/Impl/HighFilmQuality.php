<?php

namespace App\Impl;

use App\Impl\Interfaces\MovieInterface;

class HighFilmQuality implements MovieInterface {

  public function display() {
    echo 'display movie 720p';
  }
}