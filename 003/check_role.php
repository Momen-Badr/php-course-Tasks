<?php

function checkRole($role)
{
    switch ($role) {
        case "admin":
            echo "Full Access";
            break;

        case "editor":
            echo "Can Edit Content";
            break;

        case "author":
            echo "Can Create Content";
            break;

        case "user":
            echo "Basic User Access";
            break;

        case "guest":
            echo "Guest Access";
            break;

        default:
            echo "Unknown Role";
    }
}

checkRole("admin");

echo " ";

checkRole("editor");

echo " ";

checkRole("guest");

echo " ";

checkRole("manager");