<?php

require_once 'connection.php';

$sql = "SELECT * FROM reservation";
$result = $connect->query($sql);