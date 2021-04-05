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
$select_form = '<select name="author_id">';
while($row = mysqli_fetch_array($result)){
    // 무엇을 넣을껀지 value
    $select_form .='<option value="'.$row['id'].'">'.$row['name'].'</option>';
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
        <p><a href="index.php">topic</a></p>
        <table border="1">
        <tr>
            <td>id</td><td>name</td><td>profile</td>
            <?php
            $sql = "select * from author";
            $result=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
                $filtered=array(
                    'id'=>htmlspecialchars($row['id']),
                    'name'=>htmlspecialchars($row['name']),
                    'profile'=>htmlspecialchars($row['profile']),

                );
                ?>
            <tr>
                <td><?=$filtered['id']?></td>
                <td><?=$filtered['name']?></td>
                <td><?=$filtered['profile']?></td>
                <td><a href ="author.php?id=<?=$filtered['id']?>">update</a></td>
                <td>
                    <form action="process_delete_author.php" method="post" onsubmit="confirm('sure?');">
                        <input type="hidden" name="id" value="<?=$filtered['id']?>">
                        <input type="submit" value="delete">
                     </form>
                </td>
            </tr>
            <?php 
            }
            ?>
        </tr>
    </table>
    <?php
    $escaped =array(
        'name'=>'',
        'profile'=>''

    );
    $label_submit = "Create author";
    $form_action = 'process_create_author.php';
    $form_id = "";

    if(isset($_GET['id'])){
        $filtered_id=mysqli_real_escape_string($conn,$_GET['id']);
        settype($filtered_id,'integer');
        $sql ="select * from author where id = {$filtered_id}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $escaped['name']=hrmlspecialchars($row['name']);
        $escaped['name']=hrmlspecialchars($row['name']);
        $label_submit = "Update author";
        $form_action = 'process_update_author.php';
    }
    ?>
    <form action = "process_create_author.php" method="post">
            <p><input type = "text" name="name" placeholder="name" value="<?=$escaped['name']?>"></p>
            <p><textarea name="profile" placeholder="profile"><?=$escaped['profile']?></textarea></p>
            <p><input type="submit" value="<?=$label_submit?>"></p>
        </form>
    </body>
</html>