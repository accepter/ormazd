<?php
$dsn = "mysql:host=10.194.111.8;dbname=db_f30db62b";
$db = new PDO($dsn, 'user_f30db62b', 'JBlIGgE@^1f1LN');
$count = $db->exec("INSERT INTO foo SET name = 'heiyeluren',gender='男',time=NOW()");
echo $count;

?> 