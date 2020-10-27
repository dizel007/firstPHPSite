<?php
require_once "connect_DB.php";
  $sql = "SELECT * FROM main_cat";
  $fQuery = $mysqli->query($sql);
  $mysqli->close();
 
  if ($fQuery -> num_rows > 0) {
        while ($row = $fQuery -> fetch_assoc()) {
        //echo "ID: {$row["id"]}; Название: {$row["m_cat_name"]};<hr>";// вывод категорий
          $arr_name[] = $row["m_cat_name"];
          $arr_link[] = $row["m_cat_pic_link"];
          $arr_idlink[] = $row["id_link"];
          
//        echo "2222 - ".$arr[$i]."<br/>";
         }
  }

//echo "<br/>";
//print_r ($arr_name);
//echo "<br/>";
//print_r ($arr_idlink);
//echo "<br/>";

echo 
'<section id="catalog" class="advantages">
<div class="container_fluid">
    <h2 class="title">КАТАЛОГ ПРОДУКЦИИ</h2>
    <div class="advantages__wrapper">';

    for ($i=0; $i<count($arr_name); $i++){
    
echo '<div id ="'.$arr_idlink[$i].'" class="advantages__item"><a href="#"><img src="images/cat/'.$arr_link[$i].'"
          alt="'.$arr_name[$i].'" class="advantages__icon"> </a><a href="#"
       class="advantages__subtitle">'.$arr_name[$i].'</a></div>';
    }
echo  '
    </div>
</section>';
    
?>