<?php

$conn =new mysqli('localhost','root','', 'hnd');

if (!$conn) {
	die(mysqli_error($conn));
}