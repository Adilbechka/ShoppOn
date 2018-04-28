<?php
	//establishing connection to our PostgreSQL DB. 
	$conn = pg_connect("host=adil.c8unzifuhh8y.us-east-1.rds.amazonaws.com port=5432 dbname=ShoppOn user=Adil password=4710app1");
  if(!$conn) {
  	echo "DB connection failed <br/>";
  }
  $_SESSION["connection"] = $conn;
  $_GET["con"] = $conn;
      
?>
