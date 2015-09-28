<?php
	if(isset($_POST['content']))
	{
		$content=$_POST['content'];
		if(strlen(trim($content))>0)
		{
		$dsn="mysql:host=hostURL;dbname=dbname;charset=utf8";
		$db=new PDO($dsn,'dbName','password');
		$insertSQL="insert into tablename (content) values (?)";
		$stmt=$db->prepare($insertSQL);
		$stmt->execute(array($content));
		}
	}
	else
	{
		echo "FAIL!";
	}
?>
