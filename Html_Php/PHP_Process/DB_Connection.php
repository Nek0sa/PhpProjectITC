<?php
function connectToDatabase ():mysqli {
$servername = "localhost";
$username = "root";
$password = "Roottest";
$dbname = "xampp";
// Create connection
return new mysqli($servername, $username, $password,$dbname);
}
?>