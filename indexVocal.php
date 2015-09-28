
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script language="JavaScript">

setInterval("updateMyContent();",1000);
$(function(){
	updateMyContent=function(){
		var milliseconds = new Date().getTime();
		$('#refreshData').load("./module/load.php/?uid="+milliseconds).fadeIn("slow");
	}
});

</script>

<script language="JavaScript">

$(document).ready(function(){
	$('#submitForm').on('submit',function(e){
		$.ajax({
			url:'./module/submit.php',
			data:$('#submitForm').serialize(),
			type:'POST',
			success:function(data){
				console.log(data);
				$("#success").show().fadeOut(5000);
				$('#textID').val('');
			},
			error:function(data){
				$("#error").show().fadeOut(5000);
			}
		});
		
		e.preventDefault();
	});
});

</script>



<div style="float: center;
		text-align: center;
		top: 0;
		" id="submitDiv">
	<form id="submitForm" action="" method="post">
		<textarea id="textID" type="text" name="content" rows=5></textarea>
		<input type="submit" value="send" name="submit"/>
	</form>
	<br>
	<span id="error" style="display: none; color:#F00">error</span>
	<span id="success" style="display:none; color:#0C0">success</span>
</div>
<div style="float: center;
		text-align:center;
		" id="refreshData"></div>