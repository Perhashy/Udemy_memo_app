<?php
try{
  $db = new PDO('mysql:dbname=medb;host=localhost;charset=utf8', 'root', 'root');
} catch(PDOException $e) {
  echo 'DB接続エラー：' . $e->getMessage();
}
?>