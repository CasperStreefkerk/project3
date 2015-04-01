<?php
$host = DB_HOST;
$gebruiker_mysql = DB_USERNAME;
$wachtwoord2 = DB_PASSWORD;
$DBNaam = DB_DATABASE;

$Verbinding = mysql_connect("$host", "$gebruiker_mysql", "$wachtwoord2") or die("<p>De verbinding met de database kan niet worden gemaakt</p>" . mysql_error());
mysql_select_db($DBNaam) or die("<p>De database kan niet geselecteerd worden</p>");