<?php

namespace App\Impl;

use App\Impl\Interfaces\MovieInterface;

class RowFilmQuality implements MovieInterface {

  public function display() {
    echo 'display movie 240p';
  }
}