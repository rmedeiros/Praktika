<?php
$link = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("quiz") or die(mysql_error());

$esp = $_POST['espezialitatea'];
if ($esp == 'other'){
	$esp = $_POST['besteaTextua'];
	if ($esp == ''){
		$esp = "N/A";
	}
}

$sql = "INSERT INTO erabiltzaile (izena, abizena, pasahitza, email, telefonoa, espezialitatea, interesa) VALUES ('$_POST[izena]','$_POST[abizena]','$_POST[pasahitza]','$_POST[emaila]','$_POST[telefonoa]','$esp','$_POST[interesa]')";
echo " <html>
	<head>
		<meta name='tipo_contenido' content='text/html;' http-equiv='content-type' charset='utf-8'>
		<title>Sign Up</title>
		<link rel='stylesheet' type='text/css' href='stylesPWS/estiloa.css'/>
		<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='stylesPWS/smartphone.css' />
	</head>
	<body>
		<div class ='nav' id='nav'>
			<ul>
				<li class ='ezkerra'><a href ='layout.html'>Home</a></li>
				<li class ='ezkerra'><a href ='credits.html'>Credits</a></li>
			</ul>
			<ul>
				<li class ='eskuina'><a href ='logIn.html'>Log In</a></li>
			</ul>
		</div>
		<hr>
		<div class ='aim' id ='head'>";
if (!mysql_query($sql))
{
	die("<p>An error happened: ".mysql_error()."</p>");
}
//html estiloa jarri:

	echo "
			<p>You have been successfully registered. </p>
			<p><a href = 'IkusiErabiltzaileak.php'>Erabiltzaileak ikusi</p>
		</div>
		</body></html>";
mysql_close();
?>