 
 <?php

 	$ftp_server = "ftp.mediscor.co.za";
 	$ftp_user = "affin84";
 	$ftp_pass = "afs1st84";

 	$conn_id = ftp_connect($ftp_server,90) or die("Couldn't connect to $ftp_server");

 	$login_result = ftp_login($conn_id, $ftp_user, $ftp_pass);

 	if((!$conn_id) || (!$login_result)) {
 		die("FTP connection has failed !");
 	}

 	echo "Current Directory: " . ftp_pwd($conn_id) . "\n";

 	if(ftp_chdir($conn_id, "inbox")) {
 		echo "Current directory is now: " . ftp_pwd($conn_id) . "\n";
 	} else {
 		echo "Couldn't change directory\n";
 	}

 	$contents = ftp_nlist($conn_id, "inbox");
 	ftp_close($conn_id);
 	var_dump($contents);

 	