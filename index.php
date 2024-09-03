<?php
$servername = "localhost";
$usernmae = "username";
$password = "password";

//Create connection
$conn = new mysqli($servername, $username, $password);

//Check connection
if ($conn->connect_error) {
	die()
}
