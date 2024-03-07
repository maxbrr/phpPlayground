<?php

namespace App\Controllers;
use App\Core\Debug;


abstract class BaseController {
  protected array $data;
  protected string $viewName;

  public function renderView(): string {
    ob_start();
    extract($this->data);
    require __DIR__ . "\\..\\views\\$this->viewName.view.php";
    return ob_get_clean();
  }
}