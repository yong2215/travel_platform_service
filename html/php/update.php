<?php
$conn = mysqli_connect("localhost","wodud2970","jy79508244!","wodud2970");

$sql = "select * from topic";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                // <li><a href=\"index.php? title=mysql\">MYSQL</a></li>
                // .은 결합연산자 
                $list=$list."<li><a
                href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
            // echo "<li>{$row['title']}</li>";
            }

// id 값이 없을떄 출력
$article = array(
    'title' => 'Welcome',
'description'=>'hello, web');
if(isset($_GET['id'])){
    $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * from topic where id={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
// id값이 있을 떄 출력
    $article['title']= $row['title'];
    $article['description']= $row['description'];
    $update = '<a href = "update.php?id='.$_GET['id'].'">update</a>';


}


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
            <p><input type="text" name="title" placeholder="title" value="<?=$article['title']?>"></p>
            <p><textarea name="description" placeholder="description"><?=$article['description']?></textarea></p>
            <p><input type="submit"></p>
        </form> 
    </body>
</html>