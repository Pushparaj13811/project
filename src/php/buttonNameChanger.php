<?php
$current_page = basename($_SERVER['PHP_SELF']);
$get_start_text = "";
$get_start_link = "";

if ($current_page === "login.php") {
    $get_start_text = "Signup";
    $get_start_link = "signup.php";
} else {
    $get_start_text = "Login";
    $get_start_link = "login.php";
}
