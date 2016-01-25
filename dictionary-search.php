<!DOCTYPE html>
<html>
<body>
<?php

$str = file_get_contents('dictionary.json');
$json = json_decode($str, true); // decode the JSON into an associative array
//print_r($json);
$keys = array_keys($json);

?>

<form method="post" action="">
<input id ="n1" type="text" name="n1" >

</br>

<input  type="submit" name="submit" value="Submit"> 
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	 if(isset($_POST["n1"]) && $_POST["n1"] != "")
	 {
		$name1 = $_POST["n1"];
		$name1 = strtoupper($name1);
		foreach($keys as $key){
	    if(strpos($key, $name1)){
	        echo $key.  ' : ' .$json[$key] . '</br>';
    		}
	}
}
}
?>

</body>
</html>
