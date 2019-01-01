<?php
require "server/db_connection.php";
//include "db_connection.php";
function getcats()
{
    global $con;
    $getCatQuery = "select * from categories";
    $getCatRes = mysqli_query($con,$getCatQuery);
    //$row = mysqli_fetch_assoc($getCatRes);
    //print_r($row);
    while ($row = mysqli_fetch_assoc($getCatRes))
    {
        $id = $row['cat_id'];
        $title = $row['cat_title'];
        echo "<option>$title</option>";
    }
}
function getbrands()
{
    global $con;
    $getBrandQuery = "select * from brands";
    $getBrandRes = mysqli_query($con,$getBrandQuery);
    //$row = mysqli_fetch_assoc($getCatRes);
    //print_r($row);
    while ($row = mysqli_fetch_assoc($getBrandRes))
    {
        $id = $row['brand_id'];
        $name = $row['brand_name'];
        echo "<option>$name</option>";
    }
}