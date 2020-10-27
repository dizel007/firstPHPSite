<?php

  $sql = "SELECT * FROM beton";
  $items = $mysqli->query($sql);
  
  
 




  if ($items -> num_rows > 0) {
        while ($row = $items -> fetch_assoc()) {
        //echo "ID: {$row["id"]}; Название: {$row["m_cat_name"]};<hr>";// вывод категорий
         // $arr_article[] = $row["article"];
          $item[] = array($row["article"], $row["name"], $row["dn"], $row["dlina"], $row["pic_link"]);
          //   
          
         }
  }

/*echo "<br/>";
print_r ($item);
echo "<br/>";*/


echo '<div class="wrapper-item">';

for ($i=0; $i<count($item); $i++){
  if ($item[$i][2]==400) {
  echo '
  <div class="product-item"><img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg">
    <div class="product-list">
      <h3>'.$item[$i][1].'</h3>
        <span class="price">dn'.$item[$i][2].'</span>
        <a href="" class="button">В корзину</a>
    </div>
  </div>';
    }else {
      echo "Ghjgecr";
    }
  
  } 

echo '</div>';
unset($item);   





?>