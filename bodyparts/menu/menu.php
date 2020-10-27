<?php
//require_once "bodyparts/connect_DB.php";
//Получаем массив нашего меню из БД в виде массива
function getCat($mysqli){
	$sql = 'SELECT * FROM `categories` ORDER BY `sort`';
	$res = $mysqli->query($sql);

	//Создаем масив где ключ массива является ID меню
	$cat = array();
	while($row = $res->fetch_assoc()){
		$cat[$row['id']] = $row;
	}
	return $cat;
}

//Функция построения дерева из массива от Tommy Lacroix
function getTree($dataset) {
	$tree = array();
		foreach ($dataset as $id => &$node) {    
				
			//Если нет вложений
				if (!$node['parent']){
					$tree[$id] = &$node;
						}else{ 
					//Если есть потомки то перебераем массив
								$dataset[$node['parent']]['childs'][$id] = &$node;
				}
		}
	return $tree;
}

//Получаем подготовленный массив с данными
$cat  = getCat($mysqli); 


//Создаем древовидное меню
$tree = getTree($cat);

//Шаблон для вывода меню в виде дерева
function tplMenu($category){

	 // если категория нулеовго уровня
	if (!$category['parent']) {
		$menu = '<li class="majorcat benu-item"> 
										<a href="#" title="'. $category['title'] .'">'.$category['title'].'</a>';
										
										if(isset($category['childs'])){
											$menu .= '<ul class ="sub-benu">'. showCat($category['childs']) .'</ul>';
										}
									$menu .= '</li>';
	 } 
	 else {


									$menu = '<li class ="benu-item">
										<a href="#" title="'. $category['title'] .'">'. 
										$category['title'].'</a>';
										
										if(isset($category['childs'])){
											$menu .= '<ul>'. showCat($category['childs']) .'</ul>';
										}
									$menu .= '</li>';
				}
	return $menu;
}
/**
* Рекурсивно считываем наш шаблон
**/
function showCat($data){
	$string = '';
	foreach($data as $item){
		$string .= tplMenu($item);
	}
	return $string;
}

//Получаем HTML разметку
$cat_menu = showCat($tree);

//Выводим на экран
echo '<section class="main-menu"><ul class ="mcd-menu">'. $cat_menu.'';

echo '<li class="float">
<a class="search">
	<input type="text" value="поиск ...">
	<button>Найти</button>
</a>
<a href="" class="search-mobile">ПОИОРИ</a>
</li></ul></section>';

?>