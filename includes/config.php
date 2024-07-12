<?php 

// Tittle 
$title = "Internee.pk | Pakistan's Virtual Internship Program";


$conn = new mysqli("localhost", "root", "", "internee.pk");

if($conn->connect_error)
{
    echo "<h1>Server Error</h1>";
}
?>