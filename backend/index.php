<?php

require_once 'vendor/autoload.php';

use App\Abstraction\Display;
use App\Abstraction\MultiDisplay;
use App\Impl\HighFilmQuality;
use App\Impl\LowFilmQuality;

$display = new Display(new HighFilmQuality('High Quality'));
$multiDisplay = new MultiDisplay(new HighFilmQuality('High Quality'));

$display->display();
echo "</br>";
echo "</br>";
$multiDisplay->multiDisplay(3);
echo "</br>";

$display = new Display(new LowFilmQuality('Row Quality'));
$multiDisplay = new MultiDisplay(new LowFilmQuality('Row Quality'));

$display->display();
echo "</br>";
echo "</br>";
$multiDisplay->multiDisplay(3);
echo "</br>";


