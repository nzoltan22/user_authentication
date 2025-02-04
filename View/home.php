<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tesztfeladat</title>
</head>
        
<body>

<h1 align="center">Felhasználói autentikáció</h1>

<?if($error!=""):?><p style="text-align: center; color: red;"><?=$error?></p><?endif?>    

<?if($username==""):?>
<br><br>
<form method="POST">    
<table align="center">
    <tr>
        <td>Felhasználói név:</td>
        <td><input type="text" name="username">
    </tr>
    <tr>
        <td>Jelszó:</td>
        <td><input type="password" name="password">
    </tr>
    <tr>
        <td colspan="2"><input type="submit"  name="submit" value="Login"></td>
    </tr>
    <tr>
        <td colspan="2"><br>Teszt felhasználók:<br>zoli zoli12<br>annamari annamari12<br>olivia olivia12</td>
    </tr>
</table>   
</form>
<?else:?>
<form method="POST">    
    <input type="submit" name="submit" value="Logout">
</form>
<table align="center">
    <tr align="center" valign="top"><td><p>
    <?=$usercontent?>
    </p></td></tr>
</table>
<?endif?>
    
</body>

</html>
