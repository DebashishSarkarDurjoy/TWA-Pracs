<!-- Student Name: Debashish Sarkar Durjoy -->
<!-- Student ID: 19902470 -->
<!-- Class Time: Thursday 9:00 AM -->

<?php

$dbConn = new mysqli("localhost", "TWA_student", "TWA_2022_Autumn", "electrical");
if ($dbConn->connect_error) {
	die("Failed to connect to database " . $dbConn->connect_error);
}


?>
