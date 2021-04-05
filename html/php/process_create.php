<?php
$conn = mysqli_connect("localhost","wodud2970","jy79508244!","wodud2970");
print_r($_POST);
$filtered = array(
    // title =>($_POST['title']); 원래는 이것도 가능하지만 보안을 위해 밑에 것을 사용해준다 
    'title' =>mysqli_real_escape_string($conn,$_POST['title']),
    'description'=>mysqli_real_escape_string($conn,$_POST['description']),
    'author_id' =>mysqli_real_escape_string($conn,$_POST['author_id'])
);
//출력해주는 var_dump
    var_dump($_POST);
    //{$filtered['title']}
$sql = "insert into topic
(title, description, author_id)
values('{$filtered['title']}','{$filtered['description']}',{$_POST['author_id']})";
  
$result = mysqli_query($conn,$sql);
    if($result===false){
        echo 'false';
        print(mysqli_error($conn));
        error_log(mysqli_error($conn));
    } else {
        echo 'sucsse <a href="create.php">return</a>';
    }
    echo $sql;


?>