<?php


	
	try
	{
		$dsn="mysql:host=hostURL;dbname=critique;charset=utf8";
		$db=new PDO($dsn,'dbname','password');
		$PDOsql="select * from tablename where id>1060 order by id desc";
		$stmt=$db->query($PDOsql);
		printf("alteration!<br>");
		foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $resultRow)
		{
			printf("something<br>");
			printf("%s<br>",print_r($resultRow));
			//printf("%s<br>",htmlspecialchars($resultRow["content"]));
		$stmt->closeCursor();
		}
	}
	catch(PDOException $ex)
	{
		echo "an error occurred!  ".$ex->getMessage();
	}
?>
