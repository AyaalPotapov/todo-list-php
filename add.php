<?php
$task = $_POST['task'];

if($task === '')
{
   echo 'Введите само задание';
   exit;
}

$connect = mysqli_connect('Localhost', 'root', '', 'todo');

if($connect === false)
{
   print_r("Ошибка: Невозможно подключиться к MySQL.".mysqli_connect_error());
}

else{
   $sql = "INSERT INTO `todo-list` (`id`, `task`) VALUES (NULL, '$task')";
   mysqli_query($connect, $sql);
}

?>