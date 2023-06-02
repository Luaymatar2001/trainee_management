<?php

/**
 * Created by PhpStorm.
 * User: sandunprageeth
 * Date: 12/4/2017
 * Time: 3:14 PM
 */
$servername = "trianeemanagement-do-user-11633208-0.b.db.ondigitalocean.com";
$username = "doadmin";
$password = "AVNS_bPke5ZJJJxgaYIeQ3RR";
$dbname = "traineemanagement";

//create connection
//$con = mysqli_connect("localhost", "root", "", "ims_inoc");

$con = new mysqli($servername, $username, $password, $dbname, 25060);
