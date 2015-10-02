<?php
$link = mysql_connect("mysql.hostinger.es","u526113874_rb15","") or die(mysql_error());
mysql_select_db("u526113874_quiz") or die(mysql_error());
$sql = "INSERT INTO erabiltzaile (izena, abizena, pasahitza, email, telefonoa, espezialitatea, interesa) VALUES ('$_POST[izena]','$_POST[abizena]','$_POST[pasahitza]','$_POST[emaila]','$_POST[telefonoa]','$_POST[espezialitatea]','$_POST[interesa]')";
if (!mysql_query($sql))
{
die('Errore bat gertatu da: ' .mysql_error());
}
echo "1 record added";
mysql_close();
echo '<p><a href = "IkusiErabiltzaileak.php">Erabiltzaileak ikusi</p>';
?>