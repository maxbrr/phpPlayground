<?php

namespace App\Controllers;
use App\Core\Debug;


abstract class BaseController {
  protected function renderView(string $viewName, array $data): string {
    ob_start();
    extract($data);
    require __DIR__ . "\\..\\views\\$viewName.view.php";
    return ob_get_clean();
  }
}