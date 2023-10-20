<?php
session_start();
echo "<p>Hello there!</p>";
$_SESSION["exampleVar"] = "General Kenobi, you are a bold one.";
echo "<p>".var_dump($_SESSION)."</p>";
?>