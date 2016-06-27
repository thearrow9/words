<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Игра на листчета</title>
</head>

<body>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<?php

$action = isset($_GET['action']) ?
    $_GET['action'] : 'add';

$partial = 'partials/' . $action . '.html';

if (file_exists($partial)) {
  echo file_get_contents($partial);
}
?>
</body>
</html>

