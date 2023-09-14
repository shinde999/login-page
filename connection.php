<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";
$dbport = "3307";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$dbport))
{

	die("failed to connect!");
}
