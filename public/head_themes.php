<?php
function head(string $pageTitle)
{
  echo '
  <!DOCTYPE html>
  <html lang="nl">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <!-- Own CSS -->
      <link rel="stylesheet" type="text/css" href="../css/style.css">';
    echo '<title>B207.nl - Thema&apos;s - '.$pageTitle.'</title>
      <!-- Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="../icon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../icon/favicon-16x16.png">
      <link rel="manifest" href="../icon/site.webmanifest">
      <link rel="mask-icon" href="../icon/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
    </head>';
}