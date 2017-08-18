<?php
$host = "localhost";
$user = "root";
$password = "";
$conn =  mysql_connect($host,$user,$password);
if(!$conn){
	die("Could not connect to database".mysql_error());
}
echo " <font color = pink> Connection successful </font><br/>";
mysql_select_db('SHARE');
$sql = "SELECT Title,Testifier,Country,Testimony,submission_date FROM beautytb ";
$result = mysql_query($sql,$conn);
if(!$result){
die("couldn't connect to database :" . mysql_error());
	}	
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
      echo " <font color = red> Testifier :{$row['Title']} " . "{$row['Testifier']} </font></br>".
		 " <font color = red>Country :{$row['Country']} </font></br>".
	     " <font color = black><center>Testimony :</center>{$row['Testimony']} </font></br>".
		  " <font color = red>Date posted:{$row['submission_date']} </font></br>";
		  echo "<hr>";
}
	
echo " <font color = pink>process completed </font>";
mysql_close($conn);
?>