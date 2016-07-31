<!DOCTYPE html>
<!--
    Dejan Jevtic
    Work for Kudos d.o.o
    November 2015
-->
<html>
    <head>
        <meta charset="UTF-8">
        
       
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <title>Web Parser</title>
    </head>
    <body>
        <?php
        
        $url = isset($_GET['url'])?$_GET['url']:null;
        $prs = isset($_POST['address'])?$_POST['address']:null;
        $itm = isset($_POST['item'])?$_POST['item']:null;
        require 'libs/autoload.php';
        require 'libs/view.php';
        require 'controllers/controller.php';
        $autoload=new Autoload($url,$prs,$itm);
        
       
    