<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form name="form" action="form.php" method="post">
        <b>Adı:</b> <br>
        <input type="text" name="isim" size="24"> <br><br>
        <b>Soyadı:</b> <br>
        <input type="text" name="soyisim" size="24"> <br><br>
        <input type="sumbit" name="gönder" value="Gönder"> <br>
</form>
<br><br>
    
</body>
</html>

<?php
if(isset($_POST["gonder"]))
{
    $kadi=$_POST["adi"];
    $ksoyadi=$_POST["soyadi"];
    echo "Merhaba".$kadi." ".$ksoyadi;
}
?>