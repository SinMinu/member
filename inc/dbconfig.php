<?php

$servername = 'localhost'; //웹서버와 db서버가 한 컴퓨터에 있음을 의미
$dbuser = 'root';
$dbpassword = '';
$dbname = 'memsite';


try{

$db = new PDO("mysql:host={$servername};dbname={$dbname}", $dbuser, $dbpassword);

// Prepared Statement 를 지원하지 않는 경우 데이터베이스의 기능을 사용하도록 해줌
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true); // 쿼리 버퍼링을 활성화
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // pdo 객체가 에러를 처리하는 방식을 정함
echo "DB 연결 성공";
} catch(PDOException $e) {
echo $e->getMessage();
}
?>