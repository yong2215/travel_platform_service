<?php
$word = $_POST['titleValue2'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mypage</title>
    <link rel='stylesheet' href="css/myplan.css">
    <link rel='stylesheet' href="css/mypage.css">
    <style>
    .plan_title{
    width:1000px;
}
.plan_image{
    width: 60%;
    background-size: cover;
    padding-right: 50px;
    padding-top: 55px;
    height: auto;
    background-size: cover;
    margin-left: 400px;
    margin-top: 55px;
    background-image:url("./css/image/myreview.png");
}
.review_check{
    margin-top: 190px;
    margin-left: 90px;
}
}
.letter{
    width: 377.7px;
  height: 47.2px;
  -webkit-text-stroke: 1px rgba(196, 194, 194, 0.15);
  font-family: LGSmartUI;
  font-size: 22px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.18;
  letter-spacing: 0.08px;
  text-align: center;
  color: #000000;
}
.head_string{
        font-size:25px;
    }
    </style>
</head>

<body class=mypage_background style="height: 800px;">
<div id="header">
        <div class="wrap">
            <h1 class="logo f1" alt="fourworker">
                <a href="main.php">
                    <img src="./css/icon/logo.png" style="width:200px;  margin-bottom:10px; padding:3px;" />
                </a>
            </h1>
            <ul class="cate_list" style="padding-top:30px" >
                <a href="main.php"style="color:white;"  class='head_string'>
                    <li style="margin-left:0px;">여행지</li>
                </a>
                <a href="test2.php" style="color:white;" class='head_string'>
                    <li style="margin-left:0px;">플랜짜기</li>
                </a>
                <a href="mypage.php" style="color:white;"  class='head_string'>
                    <li style="margin-left:0px;">마이페이지</li>
                </a>
                
                
                
            </ul>
        </div>
    </div>


    <div class="mypage_top">
        <div class="wrap">
            <div class="main_top_title">
            </div>
            <div class="mypage_top_desc">
                마이페이지
            </div>
        </div>


        <div class="mypage_area"style="height: 700px;">
            <img src='css/icon/bgb_60.png' alt="">

            <div class="wrap">
                <ul class="cate_list f3" style="margin-top:1;">
                    <a href="mypage.php" class=f3>
                        <li>저장</li>
                    </a>
                    <a href="myplan.php" class=f3>
                        <li>여행일정</li>
                    </a>
                    <a href="myreview.php" class=f3-save>
                        <li>리뷰</li>
                    </a>
                    <a href="mywallet.php" class=f3>
                        <li>내지갑</li>
                    </a>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="plan_image" style="padding-top: 50px; height:300px; background-size:contain;">
            <div class=review_check>
            <span class="letter"style=" width: 377.7px;
  height: 47.2px;
  -webkit-text-stroke: 1px rgba(196, 194, 194, 0.15);
  font-family: LGSmartUI;
  font-size: 22px;
  
  font-stretch: normal;
  font-style: normal;
  line-height: 1.18;
  letter-spacing: 0.08px;
  text-align: center;
  margin-right:15px;
  color: #000000;"><?=$sdate?> -<?=$edate?></span><span class="letter"style=" width: 377.7px;
  height: 47.2px;
  -webkit-text-stroke: 1px rgba(196, 194, 194, 0.15);
  font-family: LGSmartUI;
  font-size: 22px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.18;
  letter-spacing: 0.08px;
  text-align: center;
  color: #000000;"><?=$word?></span>
            </div>
            </div>

            


            </div>
        </div>


    </div>


</body>

</html>