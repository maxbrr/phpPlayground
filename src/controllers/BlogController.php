<?php

namespace App\Controllers;
use App\Http\Request;

class BlogController extends BaseController {
  private array $data;

  public function __construct(Request $request) {
    $this->data = [
      'pageTitle' => 'Blog',
      'userName' => 'Prismo',
      'fname' => 'Kanegou',
      'lname' => 'Bolletramous',
      'occupation' => 'CakeBakeSpecialist'
    ];
  }

  public function serveBlog() {
    $content = $this->renderView('Blog', $this->data);
    return $content;
  }
}