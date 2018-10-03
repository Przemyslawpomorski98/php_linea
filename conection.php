<?php  
// <!-- ----------------------------------- -->
// <!-- KONFIGURACJA POŁĄCZENIA Z SERWEREM -->
// <!-- ----------------------------------- -->

	// NAZWA SERWERA
	$mysql_server = "localhost";

	// NAZWA BAZY DANYCH
	$mysql_database = "projekt_php";

	// NICK UZYTKOWNIKA DLA POWYZSZEJ BAZY DANYCH
	$mysql_admin = "przemek";

	// HASLO UZYTKOWNIKA
	$mysql_password = "hvGW6zJDtJw13DVP";

	$link = mysqli_connect($mysql_server, $mysql_admin, $mysql_password, $mysql_database);

	if ($link ===false) {
		die("Błąd bazy danych" . mysqli_connect_error());
	}

	// echo "Udało się nawiązać połączenie z bazą danych." . 
		// mysqli_get_host_info($link);

?>