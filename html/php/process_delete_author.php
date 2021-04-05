<?php
$conn = mysqli_connect("localhost","wodud2970","jy79508244!","wodud2970");

settype($_POST['id'],'integer');
$filtered = array(
    'id' =>mysqli_real_escape_string($conn,$_POST['id'])
);
//출력해주는 var_dump
    var_dump($_POST);
$sql = "DELETE FROM author where id={$filtered['id']}";

die($sql);    
$result = mysqli_query($conn,$sql);
    if($result===false){
        echo 'false';
        //error 보는법
        print(mysqli_error($conn));
        error_log(mysqli_error($conn));
    } else {
        echo 'sucsse <a href="create.php">return</a>';
        header('Location: author.php');
    }
    echo $sql;


?>