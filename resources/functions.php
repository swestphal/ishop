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


function is_db_error($result)
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

function get_products()
{
    $query = query("SELECT * FROM products");
    if (!is_db_error($query)) {
        while ($row = fetch_array($query)) {
            $products[] = $row;
        }
    }
    return $products;
}

function get_categories()
{
    $query = query("SELECT * FROM categories");
    if (!is_db_error($query)) {
        while ($row = fetch_array($query)) {
            $categories[] = $row;
        }
    }
    return $categories;
}


function get_item()
{
    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['id']) . " LIMIT 1");
    if (!is_db_error($query)) {

        return (mysqli_fetch_assoc($query));
    }
}