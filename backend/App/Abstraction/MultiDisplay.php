<?php

namespace App\Abstraction;

use App\Abstraction\Display;
use App\Impl\Interfaces\MovieInterface;

class MultiDisplay extends Display {
  private $movieManeger;

  public function __construct(MovieInterface $movieManeger) {
    $this->movieManeger = $movieManeger;
  }

  public function multiDisplay($number) {
    for($i=0;$i<$number;$i++) {
      $this->movieManeger->display();
      echo "</br>";
    }
  }
}