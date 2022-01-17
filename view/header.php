<?php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/default/default.css" type="text/css" media="screen" />

    <!-- Lien vers le CDN (Content Delivery Network) pour le jQuery -->
    <!-- D'abord la librairie jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Ensuite le plugin utilisant jQuery : ici, c'est le slider -->
    <script src="assets/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>

    <!-- Commentaire conditionnel pour les navigateurs Internet Explorer avant la version 9 (par exemple: IE8, IE7,...) c'est-à-dire avant 2011 -->
    <!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

    <title>NewsWeb - Accueil</title>

    <!-- Librairie d'icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="<?= isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ? HTML_ID[$_GET["p"]] : ""; ?>">

    <div id="wrapper">
        <!--__--__--__--__--__--  L O G O   --__--___--__--__--__-->
        <div id="logo">
            <h1>News <span id="iisrt"><span id="ii">II</span> <span id="srt">WEB</span></span></h1>
            <div id="tagline">
                <h2>On a faim d'infos !</h2>
            </div>
        </div>

        <!--__--__--__--__--__--  N A V    B A R --__--___--__--__--__-->
        <nav class="topnav" id="topnav">
            <ul>
                <li id="menu">
                    <a href="javascript:void(0);" class="icon" onclick="hamburger()">MENU <i class="fa fa-bars"></i></a>
                </li>
                <li><a href="?p=homepage" id="homenav">Accueil</a></li>
                <li><a href="?p=section" id="blognav">Les articles</a></li>
                <li><a href="?p=contact" id="contactnav">Contact</a></li>
                <li><a href="?p=login" id="adminnav">Admin</a></li>
            </ul>
        </nav>