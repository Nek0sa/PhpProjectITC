<?php
function connectToDatabase ():mysqli {
$servername = "localhost";
$username = "root";
$password = "Roottest";
$dbname = "webshop";
// Create connection
return new mysqli($servername, $username, $password,$dbname);
}
?>