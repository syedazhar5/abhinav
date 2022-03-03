<?php


function getConnection()
{
  /* for local web server 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "abhinavskin"; */

// for web server
  $servername = "https://abhinavskincare.in";
  $username = "u819345900.abhinavskincare.in";
  $password = "A$bhI9@900";
  $dbname = "abhinavskin";


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}
