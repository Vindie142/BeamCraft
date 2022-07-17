<?php
$id = $_GET['id'];
$tip = $_GET['tip'];

require "in.php";

$mysql->query("UPDATE `zakaz` SET $tip = 1 WHERE ID = $id ");

$mysql->close();
header("Location: ../index.php");
 ?>
