<?php

namespace App\Controllers;
use App\Http\Request;

class AboutController extends BaseController {

  public function __construct(Request $request) {
    parent::__construct($request);

    $this->viewName = 'About';

    $this->data = [
      'pageTitle' => 'Blog',
      'userName' => 'Prismo',
      'fname' => 'Kanegou',
      'lname' => 'Bolletramous',
      'occupation' => 'CakeBakeSpecialist'
    ];
  }

}