<!DOCTYPE html>
<html lang="pl">
    <meta charset="UTF-8">
    <title>BUD-GED</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js'></script>
    <link rel="stylesheet" href="../source/style/queryLoader.css" type="text/css" />
    <script type='text/javascript' src='../source/js/queryLoader.js'></script>
    <link rel="stylesheet" href="/source/style/style.css">
    <link rel="stylesheet" href="/source/style/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Play|Rajdhani" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules\lightbox2\dist\css\lightbox.min.css">
    <body>
<?php
    include_once ('classes/Initiate.php');
    include_once ('topMenu.php');
    $portfolio = new Portfolio();
    $projects = $portfolio->getPortfolio();