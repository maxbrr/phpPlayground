<?php

namespace App\Http;

class Request {
  private string $requestMethod;
  private string $requestUri;
  private array $headers;
  private array $queryParams;

  public function __construct() {
    $this->requestMethod = $_SERVER['REQUEST_METHOD'];
    $this->requestUri = $_SERVER['REQUEST_URI'];
    $this->headers = getallheaders();
    $this->queryParams = $_GET;
  }

  public function getRequestMethod(): string {
    return $this->requestMethod;
  }

  public function getRequestUri(): string {
    return $this->requestUri;
  }

  public function getHeaders(): array {
    return $this->headers;
  }

  public function getHeader($name): string {
    return $this->headers[$name];
  }

  public function getQueryParams() {
    return $this->queryParams();
  }
}