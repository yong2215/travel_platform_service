<?php
$conn = mysqli_connect("localhost","wodud2970","jy79508244!","wodud2970");

// 1 row
echo "<h1> single row</h1>";
$sql = "select * from topic where title='mysql'";
$result = mysqli_query($conn, $sql);

var_dump($result -> num_rows);
//var_dump는 정보량이 많다 
//print_r 첫번째 행만을 보여준다 
$row = mysqli_fetch_array($result);
print_r($row);  //배열 자릿수(인덱스)를 이용해서 가져오기 
echo $row['title']; //연간배열 컬럼에 이름이로 가져오기
echo '<h2>'.$row['title'].'</h2>'; 
echo $row['description'];

// all row
$sql = "select * from topic";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>'; 
echo $row['description'];

$row = mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>'; 
echo $row['description'];

$row = mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>'; 
echo $row['description'];


?>