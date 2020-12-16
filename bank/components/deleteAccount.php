<?php
require_once __DIR__ . '\sql.php';

$b_number = $_POST['b_number'];
$conn->query("DELETE FROM accounts WHERE b_number='$b_number'");