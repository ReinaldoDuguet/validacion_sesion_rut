<?php session_start();?>
<html> 
<head> 
  <title>Ingrese su Rut</title> 
</head> 
<body> 
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
<label for="">RUT:</label>
<input type="text" name="rut" placeholder=" 12345678-9"> 
<input type="submit" value="Aceptar" name="submit"> 
<?php include("revisar_rut.php"); ?>
</form> 

</body> 
</html>