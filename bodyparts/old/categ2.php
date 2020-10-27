<?php

function PrintResult($res) {
  // Условие делаем для проверки, есть ли вообще что то в этой таблице;
  if ($res -> num_rows > 0) {
      // Цикл будет работать пока не пройдёт все строки;
      // При каждой новой итерации цикла,
      // Он переходит на новое значение;
      while ($row = $res -> fetch_assoc()) {
        // Вывод на экран;
        echo "Имя: {$row["name"]}; <br>Фамилия: {$row["surname"]};
              <hr>";
      }
    // Если таблица пустая, будет выведено "Данных нет";
    } else {
      echo "Данных нет";
    }
}
require_once "connect_DB.php";

$res = $mysqli->query("SELECT * FROM 'main_cat'");
  

PrintResult($res);


?>