<?php

namespace App\Abstraction;

use App\Impl\Interfaces\MovieInterface;

class Display {
  private $movieManeger;

  public function __construct(MovieInterface $movieManeger) {
    $this->movieManeger = $movieManeger;
  }

  public function display() {
    $this->movieManeger->display();
  }
}