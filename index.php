

 <?php
// 　$MyName=$_GET[MyName];
// 　echo $MyName;
	echo $_GET[MyName];
 	
 	$db_server = "localhost";
 	$db_name = "save";
 	$db_user = "root";
 	$db_passwd = "";

 	$db = mysqli_connect($db_server, $db_user,$db_passwd,$db_name);
 	if (mysqli_connect_errno($db)) 
 		echo"無法連線資料庫".mysql_connect_error();
 	mysqli_set_charset($db,'utf8');
 	if (!@mysqli_select_db($db,'test'))
 		die("無法連線");
 		// code...
 	
?>


    

