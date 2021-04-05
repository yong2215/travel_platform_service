<?php
$from = $_POST['from'];
$to = $_POST['to'];
$array =$_POST['array'];
$change = explode(',', $array);
$conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
// foreach ($change as $value){
//     $sql ="insert into myPage(id,des,sDate,eDate, user_id)values(1,'{$value}','{$from}','{$to}', 1)";
//     $result = mysqli_query($conn,$sql);
// }

foreach ($change as $value){
    print($value);
    $sql ="insert into myPage(id,des,sDate,eDate, user_id) values(,'{$value}','2020-08-30','2020-08-31', 1)";
    $result = mysqli_query($conn,$sql);
}

// print($change[0]);
// print($array);
// print($to);
// print($from);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="./css/index.css" rel='stylesheet' type="text/css">
        <link href="./css/for_roadview.css" rel='stylesheet' type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
        <style>
            .title_x{
                font-family: "NotoSansKR";
            }

            #container_ {
            overflow: hidden;
            height: 860px;
            position: relative;
            width: 100%;
            }
            
            #mapWrapper {
                width: 100%;
                height: 100%;
                z-index: 1;
            }
            
            #rvWrapper {
                width: 50%;
                height: 100%;
                top: 0;
                right: 0;
                position: absolute;
                z-index: 0;
            }
            
            #container_.view_roadview #mapWrapper {
                width: 50%;
            }
            
            #roadviewControl {
                position: absolute;
                right:0;
                top: 5px;
                width: 42px;
                height: 42px;
                z-index: 1;
                cursor: pointer;
                background: url(https://t1.daumcdn.net/localimg/localimages/07/2018/pc/common/img_search.png) 0 -450px no-repeat;
            }
            
            #roadviewControl.active {
                background-position: 0 -350px;
            }
            
            #close {
                position: absolute;
                padding: 4px;
                top: 5px;
                left: 5px;
                cursor: pointer;
                background: #fff;
                border-radius: 4px;
                border: 1px solid #c8c8c8;
                box-shadow: 0px 1px #888;
            }
            
            #close .img {
                display: block;
                background: url(https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/rv_close.png) no-repeat;
                width: 14px;
                height: 14px;
            }
        </style>
    </head>

<script>
alert('<?=$array;?>');
</script>