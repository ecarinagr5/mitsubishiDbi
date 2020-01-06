<?php
    echo "\n";
    $serverName = "havasdbdllo.cloudapp.net,1433";
	$database = "MMdM";
	$uid = "Carina.Gonzalez";
	$pwd = "Pass12345";

	 //Establishes the connection

   try {
	 $conn = new PDO( "sqlsrv:server=$serverName ; Database = $database", $uid, $pwd);
   }
   catch(PDOException $e) {
       die("Error connecting to SQL Server: " . $e->getMessage());
   }
   echo "<p>Connected to SQL Server</p>\n";
   echo "<p>PDO::ATTR_PERSISTENT value:</p>\n";
   echo "<pre>";
   echo var_export($conn->getAttribute(PDO::ATTR_PERSISTENT), true);
   echo "</pre>";
   echo "<p>PDO::ATTR_DRIVER_NAME value:</p>\n";
   echo "<pre>";
   echo var_export($conn->getAttribute(PDO::ATTR_DRIVER_NAME), true);
   echo "</pre>";
   echo "<p>PDO::ATTR_CLIENT_VERSION value:</p>\n";
   echo "<pre>";
   echo var_export($conn->getAttribute(PDO::ATTR_CLIENT_VERSION), true);
   echo "</pre>";
   echo "</pre>";
	 ?>
