<?php
if(isset($_POST['aanwezig'])){
	
	$aanwezig = "INSERT INTO vrijmibo (naam, email, status) VALUES ('$name', '$mail', 'aanwezig')";
    if(mysqli_num_rows($exists) == 0) {
	    
    	if ($conn->query($aanwezig) === TRUE) {
	    	echo "<script>window.location = ''</script>";
		} 
		
	}

}

elseif(isset($_POST['afwezig'])){
    
    
    $update = "INSERT INTO vrijmibo (naam, email, status) VALUES ('$name', '$mail', 'afwezig')";
    if ($conn->query($update) === TRUE) {
		echo "<script>window.location = ''</script>";
	} 
    
    
}    
?>