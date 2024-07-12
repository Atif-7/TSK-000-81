<?php

$msgId = $_GET['email'];

require_once 'config.php';

$query = "DELETE FROM `tbl_contact` WHERE email = '$msgId'";
$result = mysqli_query($conn, $query);

header('Location:message.php');
?>
