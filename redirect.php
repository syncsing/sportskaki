
 <?php
			
			$conn = mysqli_connect('127.11.40.130', 'adminbhiX174', 'zjzfwiZiP6Np', 'sportskaki', 3306 );
			
			
			
			if(!$conn)
			{ 	echo "Failed to connect to MySQL: ";
				die();
			}
			$query = "select * from personal_profile where device_id = ".$_GET["id"]."";
			$result = mysqli_query($conn, $query);
			while( $row = mysqli_fetch_array($result) ) 
			{ 
				echo $row[1]." ".$row[2];
			}
			mysqli_close($conn);
			
			
			//header( 'Location: http://iits.smu.edu.sg/cyber-security/phished' ) ;
			
			//http://myapp-inhouseleague.rhcloud.com/phishing/redirect.php?name=1123
 ?>
 