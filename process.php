<h1>$_SERVER['REQUEST_METHOD']</h1>
<?php
print_r($_SERVER['REQUEST_METHOD']);
?>

<h1>file_get_contents('php://input')</h1>
<?php
print_r(file_get_contents('php://input'));
?>

<h1>$_REQUEST</h1>
<?php
print_r($_REQUEST);
?>

<h1>$_GET</h1>
<?php
print_r($_GET);
?>

<h1>$_POST</h1>
<?php
print_r($_POST);
?>

<h1>$_FILES</h1>
<?php
print_r($_FILES);
?>


