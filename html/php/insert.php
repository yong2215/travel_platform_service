<?php
    $conn = mysqli_connect("localhost","wodud2970","jy79508244!","wodud2970");
    $sql = "INSERT INTO topic (title, description) VALUES ('oracle','oracle is....')";
    
    echo $sql;
    $result = mysqli_query($conn,$sql);



    //에러를 알 수 있다. (result가 에러일 때 )
    if($result === false){
        echo mysqli_error($conn);
    }



    //연결에 대한 에러 
    if (mysqli_connect_errno($conn)) {

        echo "fail". mysqli_connect_error();
        
        } else {
        
        echo "succes";
        
        }
    
    ?>
