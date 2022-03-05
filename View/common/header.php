<?php
if (is_null($data) or !isset($data) or !is_array($data) or count($data) == 0) {
    throw new Exception('$data is not set or is null or is not array');
}
?>
<!doctype html>
<html lang="fa">
<head>
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
    <meta http-equiv="Expires" content="Thu, 01 Jan 1970 00:00:00 GMT" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=Config::getADDRESS()?>public/bootstrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="<?=Config::getADDRESS()?>public/css/styles.css">
    <link rel="stylesheet" href="<?=Config::getADDRESS()?>public/css/animation.css">
    <title><?=$data['title']?> | <?=Config::getPROJECTNAME()?></title>
</head>
<body>
