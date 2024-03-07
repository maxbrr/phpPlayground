<?php

namespace App\Core;

class Debug {
  public static function dumpAndDie($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';

    die();
  }
}