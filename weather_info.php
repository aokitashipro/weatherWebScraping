<?php
  require_once("./phpQuery-onefile.php");
  $html = file_get_contents("https://www.jma.go.jp/jp/yoho/334.html");

  if(!isset($html)){

  }else{

  echo '<table class="weather_info">';

  echo '<tbody>';
  echo '<tr>';
  echo '<td></td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("th.weather:eq(0)")->text();
  echo '<br>';
  echo phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("th.weather:eq(0)")->find("img");

  echo '</td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("th.weather:eq(1)")->text();
  echo '<br>';
  echo phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("th.weather:eq(0)")->find("img");
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td></td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("td.info:eq(0)")->text();
  echo '</td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("td.info:eq(1)")->text();
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>降水確率</td>';
  echo '<td>';
  $rain_0day = phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("td.rain:eq(0)")->text();
  $rain_array_0day = explode("%", $rain_0day);
  echo $rain_array_0day[0] . "%" . "<br>";
  echo $rain_array_0day[1] . "%" ."<br>";
  echo $rain_array_0day[2] . "%" ."<br>";
  echo $rain_array_0day[3] . "%" ."<br>";

  echo '</td>';
  echo '<td>';  
  $rain_1day = phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("td.rain:eq(1)")->text();
  $rain_array_1day = explode("%", $rain_1day);
  echo $rain_array_1day[0] . "%" . "<br>";
  echo $rain_array_1day[1] . "%" ."<br>";
  echo $rain_array_1day[2] . "%" ."<br>";
  echo $rain_array_1day[3] . "%" ."<br>";

  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>気温予報</td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("td.temp:eq(0)")->text();
  echo '</td>';
  echo '<td>';  
  echo phpQuery::newDocument($html)->find("#base")->find("#main")->find("div")->find("#forecasttablefont")->find("td.temp:eq(1)")->text();
  echo '</td>';
  echo '</tr>';


  echo '</table>';

  }
?>
