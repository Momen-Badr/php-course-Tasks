<?php

function checkAccess($username, $role, $isActive)
{
    if ($isActive == false) {
        echo "Account is not active";
        return;
    }

    $permission = match ($role) {
        "admin" => "Full Permissions",
        "editor" => "Edit Permissions",
        "author" => "Create Permissions",
        "user" => "Basic Permissions",
        "guest" => "Limited Permissions",
        default => "No Permissions"
    };

    switch ($role) {
        case "admin":
            echo "Admin Access";
            break;

        case "editor":
            echo "Editor Access";
            break;

        case "author":
            echo "Author Access";
            break;

        case "user":
            echo "User Access";
            break;

        case "guest":
            echo "Guest Access";
            break;

        default:
            echo "Unknown Role";
    }

    echo " ";
    echo "Username: " . $username;
    echo " ";
    echo "Permissions: " . $permission;
}

checkAccess("Ahmed", "admin", true);

echo " ";

checkAccess("Mohamed", "user", true);

echo " ";

checkAccess("Ali", "admin", false);
