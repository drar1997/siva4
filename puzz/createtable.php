<?php		
		require_once('dbconnect.php');

		$sql = "CREATE TABLE IF NOT EXISTS oficinistas (
				id INT(3) AUTO_INCREMENT PRIMARY KEY,
				ltrab VARCHAR(20) NOT NULL,
				name VARCHAR(20) NOT NULL,
				lname VARCHAR(20) NOT NULL,
				tdoc VARCHAR(20) NOT NULL,
				numdoc BIGINT(20) UNSIGNED NOT NULL,
				numcel INT(20) UNSIGNED NOT NULL,
				email VARCHAR(50) NOT NULL,
				password VARCHAR(255) NOT NULL,
				gender VARCHAR(10) NOT NULL
				);";
		$sql .= "CREATE TABLE IF NOT EXISTS conductores (
				id INT(3) AUTO_INCREMENT PRIMARY KEY,
				cityres VARCHAR(20) NOT NULL,
				name VARCHAR(20) NOT NULL,
				lname VARCHAR(20) NOT NULL,
				tdoc VARCHAR(20) NOT NULL,
				numdoc BIGINT(20) UNSIGNED NOT NULL,
				numcel INT(20) UNSIGNED NOT NULL,
				email VARCHAR(50) NOT NULL,
				password VARCHAR(255) NOT NULL,
				gender VARCHAR(10) NOT NULL
				);";
		$sql .= "CREATE TABLE IF NOT EXISTS clientes (
				id INT(3) AUTO_INCREMENT PRIMARY KEY,
				email VARCHAR(50) NOT NULL,
				password VARCHAR(255) NOT NULL,
				name VARCHAR(20) NOT NULL,
				lname VARCHAR(20) NOT NULL,
				tdoc VARCHAR(20) NOT NULL,
				numdoc BIGINT(20) UNSIGNED NOT NULL,
				numcel INT(20) UNSIGNED NOT NULL,
				gender VARCHAR(10) NOT NULL
				);";
		$sql .= "CREATE TABLE IF NOT EXISTS rutas (
				id BIGINT(255) AUTO_INCREMENT PRIMARY KEY,
				lsalida VARCHAR(20) NOT NULL,
				lllegada VARCHAR(20) NOT NULL,
				fhsalida DATETIME NOT NULL,
				fhllegada DATETIME NOT NULL,
				numunidad INT(5) UNSIGNED NOT NULL,
				idconductor INT(3) UNSIGNED NOT NULL,
				costotckt INT(7) UNSIGNED NOT NULL
				);";
		$sql .= "CREATE TABLE IF NOT EXISTS cars (
				numunidad INT(5) UNSIGNED NOT NULL PRIMARY KEY,
				placa VARCHAR(10) NOT NULL,
				marca VARCHAR(20) NOT NULL,
				linea VARCHAR(20) NOT NULL,
				propietario VARCHAR(30) NOT NULL,
				tdocpropietario VARCHAR(10) NOT NULL,
				numdocpropietario BIGINT(17) NOT NULL,
				cantasientos INT(2) NOT NULL,
				servwifi INT(1) NOT NULL,
				servtv INT(1) NOT NULL,
				servbath INT(1) NOT NULL,
				otrosserv VARCHAR(100)
				);";
		$sql .= "CREATE TABLE IF NOT EXISTS rviajes (
				id BIGINT(255) PRIMARY KEY NOT NULL,
				p1 BIGINT(20) UNSIGNED,
				p2 BIGINT(20) UNSIGNED,
				p3 BIGINT(20) UNSIGNED,
				p4 BIGINT(20) UNSIGNED,
				p5 BIGINT(20) UNSIGNED,
				p6 BIGINT(20) UNSIGNED,
				p7 BIGINT(20) UNSIGNED,
				p8 BIGINT(20) UNSIGNED,
				p9 BIGINT(20) UNSIGNED,
				p10 BIGINT(20) UNSIGNED,
				p11 BIGINT(20) UNSIGNED,
				p12 BIGINT(20) UNSIGNED,
				p13 BIGINT(20) UNSIGNED,
				p14 BIGINT(20) UNSIGNED,
				p15 BIGINT(20) UNSIGNED,
				p16 BIGINT(20) UNSIGNED,
				p17 BIGINT(20) UNSIGNED,
				p18 BIGINT(20) UNSIGNED,
				p19 BIGINT(20) UNSIGNED,
				p20 BIGINT(20) UNSIGNED,
				p21 BIGINT(20) UNSIGNED,
				p22 BIGINT(20) UNSIGNED,
				p23 BIGINT(20) UNSIGNED,
				p24 BIGINT(20) UNSIGNED,
				p25 BIGINT(20) UNSIGNED,
				p26 BIGINT(20) UNSIGNED,
				p27 BIGINT(20) UNSIGNED,
				p28 BIGINT(20) UNSIGNED,
				p29 BIGINT(20) UNSIGNED,
				p30 BIGINT(20) UNSIGNED,
				p31 BIGINT(20) UNSIGNED,
				p32 BIGINT(20) UNSIGNED,
				p33 BIGINT(20) UNSIGNED,
				p34 BIGINT(20) UNSIGNED,
				p35 BIGINT(20) UNSIGNED,
				p36 BIGINT(20) UNSIGNED,
				p37 BIGINT(20) UNSIGNED,
				p38 BIGINT(20) UNSIGNED,
				p39 BIGINT(20) UNSIGNED,
				p40 BIGINT(20) UNSIGNED
				)";

		if ($conn->multi_query($sql) === TRUE) {
		    echo "New tables created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
?>