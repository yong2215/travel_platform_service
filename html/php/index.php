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
$update='';
$delete='';
$author='';

if(isset($_GET['id'])){
    $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * from topic left join author on topic.author_id = author.id where topic.id={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
// id값이 있을 떄 출력 htmlspecialchars($row['title'])
    $article['title']= $row['title'];
    $article['description']= $row['description'];
    $article['name']= $row['name'];

    $update = '<a href = "update.php?id='.$_GET['id'].'">update</a>';
    //delete 는 링크로 해놓으면 모두 삭제가 될 수 있으므로 form 으로 처리하는것이 좋다 
    $delete = '
    <form action="process_delte.php" method="post">
    <input type="hidden" name="id" value = "'.$_GET['id'].'">
    <input type="submit" value="delete">
    </form>
    ';
    $author = "<p>by {$article['name']}</p>";

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
        <a href="author.php">author</a>
        <ol>
            <?=$list?>
            <!--echo $list; -->
        </ol>
        <p><a href = "create.php">create</a></p>
        <?=$update?>
        <?=$delete?>
        <h2><?=$article['title']?></h2>
        <?=$article['description']?>
        <?=$author?>
</br>
        Ljadgiaj jdfajosdrmror djfaofd
    </body>
</html>