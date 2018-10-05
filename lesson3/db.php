<?php
echo "<pre>";

$mysqli = new mysqli("localhost", "root", "root", "dbtest");

//$res = $mysqli->query("SELECT * FROM books WHERE id = 1");
//$row = $res->fetch_assoc();
//print_r($row);

//$res = $mysqli->query("SELECT * FROM books");
//while($row = $res->fetch_assoc())
//{
//    print_r($row);
//}

//$res = $mysqli->query("INSERT INTO books (title, author, ISBN, publisher) values ('Harry Potter & the Half Blood Prince', 'JK Rowling', 'HP1234588', 'Penguin')");
//var_dump($res);

$mysqli->close();

?>