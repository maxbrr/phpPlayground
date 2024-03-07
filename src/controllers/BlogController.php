<?php

namespace App\Controllers;
use App\Http\Request;

class BlogController extends BaseController {
  
  public function __construct(Request $request) {
    $this->viewName = 'Blog';

    $this->data = [
      'pageTitle' => 'Blog',
      'userName' => 'Prismo',
      'fname' => 'Kanegou',
      'lname' => 'Bolletramous',
      'occupation' => 'CakeBakeSpecialist'
    ];
  }

}