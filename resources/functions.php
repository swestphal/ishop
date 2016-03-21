<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 21.03.16
 * Time: 13:30
 */


function redirect_to($location)
{
    header("Location" . $location);
}


function query($query)
{
    global $connection;
    return mysqli_query($connection, $query);
}


function confirm($result)
{
    global $connection;
    if (!$result) {
        die("Query failed " . mysqli_error($connection));
    }
}

function escape_string($string)
{
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)
{
    return mysqli_fetch_array($result);
}