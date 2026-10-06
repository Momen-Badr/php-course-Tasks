<?php

function checkLogin($username, $password)
{
    if ($username == "admin" && $password == "12345") {
        echo "Login Successful";
    } else {
        echo "Invalid Username or Password";
    }
}

checkLogin("admin", "12345");

echo "<br>";

checkLogin("admin", "11111");

echo "<br>";

checkLogin("user", "12345");