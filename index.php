<!DOCTYPE html>

<head>
<style>
#pos1{
  position: absolute;
  left: 400;
  top: 300;
}
</style>
</head>


<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Lab 10</title>

        <script> </script>
        </head>
		
		<style></style>
    <body>
		<h1>Dictionary</h1><hr><br>
		
		
		<b>Enter any Name in the given file file.json in capital letters<b>
		
		
		
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		
<input type="text" name="any_name">
<input type="submit" name="submit">
</form>	
		
		
		
		
		
	<?php
if(isset($_POST['submit'])) 
{
$var = $_POST['any_name'];   
$var= strtoupper($var);

$str = file_get_contents('file.json');
$json = json_decode($str, true); 

$iterator = new RecursiveArrayIterator($json);



while ($iterator->valid()) {

    
        
        foreach ($iterator as $key => $value) {
          if(0===strpos($key,$var))
		  
		  { 
		   echo $key . ' : ' . $value . "<br/>";
			}
        }
    

    $iterator->next();
}
}
?>
        </form>
    </body>
</html>