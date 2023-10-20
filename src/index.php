<?php
echo "<p>Hello there!</p>";
?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Add an appropriate title in this tag -->
  <title>Legendary Task List</title>
  <!-- Links to stylesheets -->
</head>

<body>
  <!-- Your visible elements -->
  <nav>
      <a href="index.html">Home</a>
  </nav>
  <h1>My Tasks</h1>
  <ul>
      <li>
        <input type="checkbox">
        <span>Do the dishes</span>
        <span>02-30-2023</span>
        <button>DELETE</button>
      </li>
      <li>
        <input type="checkbox">
        <span>Slay the jabberwocky</span>
        <span>13-32-1888</span>
        <button>DELETE</button>
      </li>
  </ul>
  <form>
      <input type="text">
      <br>
      <input type="date">
      <br>
      <button>Create Task</button>
  </form>
  <!-- Links to scripts -->
</body>