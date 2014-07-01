<?php
// Соединяемся, выбираем базу данных
$mysql_host = '127.0.0.1:7188';
$mysql_user = 'root';
$mysql_password = '';
$my_database = 'user_info';
$link = mysql_connect($mysql_host, $mysql_user, $mysql_password)
    or die('Не удалось соединиться: ' . mysql_error());
echo 'Соединение успешно установлено';
mysql_select_db($my_database) or die('Не удалось выбрать базу данных');

// Выполняем SQL-запрос
//$query = 'CREATE DATABASE user_info';
//$result = mysql_query($query) or die('Запрос на создание базы не удался: ' . mysql_error());

//$query = 'use user_info';
//$result = mysql_query($query) or die('Не удалось выбрать таблицу: ' . mysql_error());

// Выполняем SQL-запрос
/*$query = 'CREATE TABLE user_info
 (user_id INT(11) UNSIGNED auto_increment, first_name VARCHAR(50),
 second_name VARCHAR(50), email VARCHAR(255), password VARCHAR(50), 
 sex VARCHAR(6), birthday DATE, PRIMARY KEY(user_id))';
$result = mysql_query($query) or die('Запрос на создание таблицы не удался: ' . mysql_error());

$query = 'INSERT INTO user_info 
(first_name,
 second_name, 
 email,
 password, 
 sex, 
 birthday)
 VALUES
 ("Alexander",
  "Zhelonkin",
  "box-man@mail.ru",
  "123",
  "male",
  "24:04:1989")';
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());*/

$query = 'select * from user_info';
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

// Выводим результаты в html
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Освобождаем память от результата
mysql_free_result($result);

// Закрываем соединение
mysql_close($link);
?>