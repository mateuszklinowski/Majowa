<?php
require_once 'classes/DateConvert.php';
require_once 'classes/conn.php';
require_once 'classes/DB.php';
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="http://majowa.eu/" />
    <link href="https://fonts.googleapis.com/css?family=Domine|Montserrat|Old+Standard+TT" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.0/sweetalert2.min.css">
    <?php wp_head();?>
</head>
<body  <?php body_class(); ?>>

<?php require (TEMPLATEPATH . '/template_elements/main_menu.php');?>



