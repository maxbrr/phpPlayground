<?php

namespace App\Controllers;
use App\Http\Request;

class BlogController extends BaseController {
  
  public function __construct(Request $request) {
    parent::__construct($request);

    $this->viewName = 'Blog';

    $this->data = [
      'pageTitle' => 'Blog',
      'userName' => 'Prismo',
      'fname' => 'Kanegou',
      'lname' => 'Fallabolengo',
      'occupation' => 'CakeBakeSpecialist'
    ];
  }

}