<?php
$conn = mysqli_connect("localhost","wodud2970","jy79508244!","wodud2970");
print_r($_POST);
$filtered = array(
    // title =>($_POST['title']); 원래는 이것도 가능하지만 보안을 위해 밑에 것을 사용해준다 
    'id' =>mysqli_real_escape_string($conn,$_POST['id']),
    'name'=>mysqli_real_escape_string($conn,$_POST['name']),
    'profile' =>mysqli_real_escape_string($conn,$_POST['profile'])
);
//출력해주는 var_dump
    var_dump($_POST);
    //{$filtered['title']}
$sql = "UPDATE author set name='{$filtered['name']}', profile = '{$filtered['profile']}'
where id ={$filtered['id']}";
die($sql);
  
$result = mysqli_query($conn,$sql);
    if($result===false){
        echo 'false';
        print(mysqli_error($conn));
        error_log(mysqli_error($conn));
    } else {
        echo 'sucsse <a href="create.php">return</a>';
        header('Location: author.php?id='.$filtered['id']);
    }
    echo $sql;


?>