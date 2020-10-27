<?php
     Function printResult ($result_set) {
      while (($row = $result_set->fetch_assoc())!=false) {
        print_r($row);
      }
    }
 
 $host="localhost";//имя  сервера
  $user="root";//имя пользователя
  $password="";//пароль
  $db="site_content";//имя  базы данных
  // подключаемся к БД
  $mysqli = new mysqli ($host, $user, $password) or die("Нет подключения"); //подключение к серверу
  $mysqli->query("SET NAMES 'utf8'");

    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
 
$result_set = $mysqli->query("SELECT * FROM 'main_cat'");

  
    $mysqli->close();


printRes($result_set);


?>