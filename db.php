<?php

$host = "ec2-44-196-174-238.compute-1.amazonaws.com";
$user = "keejhhvspitvnn";
$password = "d32d62fbfb7a44d46ec4ef81edec9852436449f004e8de3b086688d6202735c8";
$dbname = "d9c6btka0noaof";
$port = "5432";

try {
   //Set DSN data source name
   $dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


   //create a pdo instance
   $pdo = new PDO($dsn, $user, $password);
   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   echo 'Connection failed: ' . $e->getMessage();
}
