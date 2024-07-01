<?php
require_once __DIR__ .'/vendor/autoload.php';

use App\Morse;

$morse = new Morse;
echo $morse->convertToLetters('-.-.--   ..---');