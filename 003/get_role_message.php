<?php

function getRoleMessage($role)
{
    return match ($role) {
        "admin" => "Full Access",
        "editor" => "Can Edit Content",
        "author" => "Can Create Content",
        "user" => "Basic Access",
        "guest" => "Guest Access",
        default => "Unknown Role"
    };
}

echo getRoleMessage("admin");

echo "<br>";

echo getRoleMessage("editor");

echo "<br>";

echo getRoleMessage("guest");

echo "<br>";

echo getRoleMessage("manager");