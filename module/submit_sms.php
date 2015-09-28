<?php
	//if(isset($_POST['Body']))
	//{
		$content=$_POST['Body'];
		//$receivedSID=$_POST['AccountSid'];
		//$AcctSID="xxx";
		//if ($receivedSID==$AcctSID)
		//{ 
		if(strlen(trim($content))>0)
		{
			$dsn="mysql:host=hostURL;dbname=dbname;charset=utf8";
			$db=new PDO($dsn,'dbname','password');
			$insertSQL="insert into tablename (content) values (?)";
			$stmt=$db->prepare($insertSQL);
			$stmt->execute(array($content));
		}
		//}
	//}
	//else
	//{
	//	echo "FAIL!";
	//}
?>
