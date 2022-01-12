<?php
function connectToDatabase ():mysqli {
$servername = "localhost";
$username = "root";
$password = "dispo";
$dbname = "webshop";
// Create connection
return new mysqli($servername, $username, $password,$dbname);
}
?>