<?php
session_start();
if ($_SESSION["exampleVar"]) {
  echo "<p>General Kenobi, you are a bold one.</p>";
  $_SESSION["exampleVar"] = false;
} else {
  echo "<p>Hello there!</p>";
  $_SESSION["exampleVar"] = true;
}
?>