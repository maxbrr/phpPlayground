<?php

namespace App\Controllers;
use App\Core\Debug;
use App\Http\Request;


abstract class BaseController {
  protected array $data;
  protected string $viewName;
  protected Request $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function renderView(): string {
    ob_start();
    extract($this->data);
    require __DIR__ . "\\..\\views\\$this->viewName.view.php";
    return ob_get_clean();
  }
}