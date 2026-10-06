<?php

function getStatusMessage($status)
{
    return match ($status) {
        200 => "success",
        201 => "Created",
        400 => "Bad Request",
        401 => "Unauthorized",
        403 => "Forbidden",
        404 => "Not Found",
        500 => "Internal Server Error",
        default => "Unknown Status Code"
    };
}

echo getStatusMessage(200);

echo " ";

echo getStatusMessage(404);

echo " ";

echo getStatusMessage(500);

echo " ";

echo getStatusMessage(300);