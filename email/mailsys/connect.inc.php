<?php 
  #用PDO的方法操作数据库，该页是链接；
  #connect with PDO;
  define("DSN", "mysql:host=localhost;dbname=testmail");
  define("DBUSER", "root");
  define("DBPASS", "root");
  try{

  	$pdo =new PDO(DSN,DBUSER,DBPASS);

  }catch(PDOException $e)
  {
  	die("failed:".$e->getMessage());
  }

 ?>