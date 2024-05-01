<?php 

//host 
$host = "localhost";


//dbname
$dbname = "auth-syst";

//user
$user = "root";

//pass
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;", $user,  $pass); 

// if($conn == true) {
//     echo "its working fine";
// } else {
//     echo "connection is wrong: err ";
// }

?>