<?php
$conn = mysqli_connect("localhost","wodud2970","jy79508244!","wodud2970");

settype($_POST['id'],'integer');
$filtered = array(
    'id' =>mysqli_real_escape_string($conn,$_POST['id']),
    // title =>($_POST['title']); 원래는 이것도 가능하지만 보안을 위해 밑에 것을 사용해준다 
    'title' =>mysqli_real_escape_string($conn,$_POST['title']),
    'decription'=>mysqli_real_escape_string($conn,$_POST['decription'])
);
//출력해주는 var_dump
    var_dump($_POST);
$sql = "UPDATE topic set title = '{$filtered['title']}',
                         description = '{$filtered['description']},
                         where id = {$filtered['id']}";
die($sql);    
$result = mysqli_query($conn,$sql);
    if($result===false){
        echo 'false';
        error_log(mysqli_error($conn));
    } else {
        echo 'sucsse <a href="create.php">return</a>';
    }
    echo $sql;


?>