﻿<?php

// MySQL server configuration
define("MYSQL_HOSTNAME", gethostbyname(gethostname()) );
define("MYSQL_DBNAME", "MeOSMain");
define("MYSQL_USERNAME", "meos");
define("MYSQL_PASSWORD", "");

//MeOS password use in MeOS automation
define("MEOS_PASSWORD", "meos");

//Localization. NOTE: UTF-8 encoding required for non-latin characters
$lang = array();
$lang['selectcmp'] = "Vælg konkurrence";
$lang['place'] = "Pl.";
$lang['team'] = "Klub";
$lang['name'] = "Navn";
$lang['after'] = " ";
$lang['time'] = "Tid";
$lang['finish'] = "Mål";
$lang['tottime'] = "Samlet";
$lang['totafter'] = " ";
$lang['leg'] = "Tur";
$lang['since'] = "Siden";
$lang['class'] = "Klasse";
$lang['starttime'] = "Start tid";
$lang['startnumber'] = "#";
$lang['totstat'] = "Samlet pl";
$lang['tstat'] = "Samlet pl";
$lang['id'] = "id";
?>