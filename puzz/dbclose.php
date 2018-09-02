<?php  
		$conn->close();
		if (!empty($_SESSION['usertype'])) {
			echo "<script language=Javascript> location.href=\"index.php\"; </script>"; 
			die(); 
		}
?>