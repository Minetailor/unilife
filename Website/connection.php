<?php
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header('Location: homepage.html');
}
#$dbhost = "localhost";
#$dbusername = "root";
#$dbpassword = "876973145";
#$dbname = "unilife";

$dbhost = "dbhost.cs.man.ac.uk";
$dbusername = "v80015aa";
$dbpassword = "12345678";
#$dbname = "v80015aa";
$dbname = "2021_comp10120_y12";

$con = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_errno()) {
    die("can't connect to database");
}

#if(!$con = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname)){
    #die("can't connect to database");
#}

?> 


