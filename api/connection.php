<?php
    $serverName = "havasdbdllo.cloudapp.net, 51022";
    $database = "MMdM";
    $uid = 'Carina.Gonzalez';
    $pwd = 'Pass12345';
    try {
        $conn = new PDO(
            "sqlsrv:Server=$serverName;Database=$database",
            $uid,
            $pwd,
            array(
                //PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            )
        );
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
