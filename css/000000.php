<!DOCTYPE html>
<html>
<head>
<style>
div {background-color: Gainsboro;}
div a {
  text-decoration: none;
  color: black;
  font-size: 24px;
  padding: 12px;
  display:inline-block;
}
ul {
  display: inline;
  margin: 0;
  padding: 0;
}
ul li {display: inline-block;}
ul li:hover {background: Grey;}
ul li:hover ul {display: block;}
ul li ul {
  position: absolute;
  width: 200px;
  display: none;
}
ul li ul li { 
  background: Grey; 
  display: block; 
}
ul li ul li a {display:block;} 
ul li ul li:hover {background: LightGrey;}
</style>
</head>



<body>
<div>
  <a href="1">Link without hover effect</a>
  <ul>
    <li>
      
    <a href="1">Link with hover effect(drop-down)</a>
      <ul>
        <li><a href="1">Bundle 1</a></li>
        <li><a href="1">Bundle 2</a></li>
        <li><a href="1">Bundle 3</a></li>
      </ul>
    </li>
  
  
  
  </ul>
</div>
</body>
</html>