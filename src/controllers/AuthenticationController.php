<?php

namespace App\Controllers;

use App\Http\Request;
use App\Core\Debug;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthenticationController extends BaseController {
  
  public function __construct(Request $request) {
    parent::__construct($request);
    
    $this->viewName = 'SignUp';
  }

  public function login() {
    $postData = $this->request->getPostBody();
    $email = $postData['email'];
    $password = $postData['password'];

    $payload = [
      'username' => 'hajoSchlonz',
      'locale' => 'aserBAIDschan'
    ];

    $jwt = JWT::encode($payload, getenv('JWT_SECRET'), 'HS256');

    echo "Look at this beautiful JWT => $jwt";
  }
}