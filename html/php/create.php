<?php
$conn = mysqli_connect("localhost","wodud2970","jy79508244!","wodud2970");

$sql = "select * from topic";
$result = mysqli_query($conn, $sql);
$list='';
while($row = mysqli_fetch_array($result)){
// <li><a href=\"index.php? title=mysql\">MYSQL</a></li>
    // .은 결합연산자 
    $escaped_title = htmlspecialchars($row['title']);
    $list=$list."<li><a
    href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
// echo "<li>{$row['title']}</li>";
}
$sql = "select * from author";
$result = mysqli_query($conn, $sql);
$select_form = '<select>';
while($row = mysqli_fetch_array($result)){
    $select_form .='<option>'.$row['name'].'</option>';
}
//$select_form = select_form.'</select>'
$select_form .='</seelct>';

// id 값이 없을떄 출력
$article = array(
    'title' => 'Welcome',
'description'=>'hello, web');





?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>web</title>
    </head>
    <body>
        <h1><a href="index.php">web</a></h1>
        <ol>
            <?=$list?>
            <!--echo $list; -->
        </ol>
            <li>HTML</li>
        </ol>
        <form action="process_create.php" method="POST">
            <p><input type="text" name="title" placeholder="title"></p>
            <p><textarea name="description" placeholder="description"></textarea></p>
            <?=$select_form?>
            <p><input type="submit"></p>
        </form> 
    </body>
</html>