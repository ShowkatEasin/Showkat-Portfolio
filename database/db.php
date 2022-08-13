<?php 


$server = "sql112.epizy.com	
";
$username= "epiz_32347286";
$password= "jzmIhMT53I";
$dbname="epiz_32347286_showkat";


$conn = mysqli_Connect ($server, $username, $password, $dbname);

if (!$conn){
    die ("Connection Failed: .mysqli_connect_error"());
}


?>