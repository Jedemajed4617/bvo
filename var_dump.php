<?php
$servername = "server335.web-hosting.com";
$username = "tygotder_jedemajed";
$password = "Fcmedemblik2006!";
$dbname = "tygotder_bvo";
 
// Create connection in mysqli
 
$mysqli = new mysqli($servername, $username, $password, $dbname);
 
//Check connection in mysqli
if(!$mysqli){
    die("Error on the connection");
};
?>