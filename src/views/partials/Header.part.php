<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? $pageTitle : 'Untitled';  ?></title>
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/navBar.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
<div id="nav">
  <div id="logo">
    <img src="assets/logo.png" width="80">
  </div>
  <ul id="nav-links">
    <li>
      <a href="/">Home</a>
    </li>
    <li>
      <a href="/blog">Blog</a>
    </li>
    <li>
      <a href="/settings">Settings</a>
    </li>
    <li>
      <a href="/about">About</a>
    </li>
  </ul>
  <div id="login-btn"></div>
</div>
<div id="container">
  <form action="POST" id="login-form">
    <input type="text" placeholder="E-Mail...">
    <input type="password" placeholder="Password...">
    <button type="submit">Login</button>
  </form>