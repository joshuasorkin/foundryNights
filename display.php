<body
style="background-color:#000;
	color:white;
	font-family:cursive;
	overflow:hidden;">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script language="JavaScript">

setInterval("updateMyContent();",1000);
$(function(){
	updateMyContent=function(){
		$('#refreshData').load("./module/load.php").fadeIn("slow");
	}
});

</script>

<div style="float: center;text-align: center;
		font-size:400%;" id="refreshData"></div>
		
</body>