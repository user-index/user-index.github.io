<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="../img/favicon.png">
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<title>Guest Book</title>
<body>
<!--guestbook code v2!-->

<div class="card">
	<h1>Guestbook</h1>

		<div style="font-family:Courier">
		<?php
		if(isset($_POST['name'])){
		$date = date("m-d-Y H:i");
		$myfile = fopen("guestbook.html", "a") or die("error");
		$writeInFile = "<a target=blank href=".$_POST['website']."/><b>" .$_POST['name']."</b></a> - ".$date."<br/>";
		$writeInFile2 = "<b>Email:</b>".$_POST['email']."<br/>";
		$writeInFile3 = "<b>Comment:</b>".$_POST['comment']."<br/><hr>";
		fwrite($myfile, $writeInFile);
		fwrite($myfile, $writeInFile2);
		fwrite($myfile, $writeInFile3);
		fclose($myfile);	
		}
		include("guestbook.html");
		?>
		</div>

		<form action="#" method="post">
                Name:<br>
                <input type="text" name="name" placeholder="name" required/><br/>
                Website:<br>
				<input type="text" name="website" placeholder="website"/><br/>
				Email:<br>
                <input type="text" name="email" placeholder="email (optional)"/><br/>
                Comment:<br>
                <input type="text" name="comment" placeholder="comment" required/><br/>
                <input type="submit" value="Submit"/>
                </form>
</div>
</body>
</html>
