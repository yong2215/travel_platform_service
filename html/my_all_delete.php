<?php
$id = $_POST['id'];
$id=(int)$id;
$conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
$sql ="delete from myPage";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="./css/index.css" rel='stylesheet' type="text/css">
        <link href="./css/for_map.css" rel='stylesheet' type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
        <style>
            .title_x{
                font-family: "NotoSansKR";
            }
            .gomypage{
                background: url(./css/icon/makemyplan.png) no-repeat;
    height: 60px;
    background-size: cover;
    border-style: none;
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
            #mapwrap {
            position: relative;
            overflow: hidden;
        }
        
        .category,
        .category * {
            margin: 0;
            padding: 0;
            color: #000;
        }
        
        .category {
            position: absolute;
            overflow: hidden;
            top: 200px;
            right: 10px;
            width: 110px;
            height: 50px;
            z-index: 10;
            border: 1px solid black;
            font-family: 'Malgun Gothic', '맑은 고딕', sans-serif;
            font-size: 12px;
            text-align: center;
            background-color: #fff;
        }
        
        .category .menu_selected {
            background: #FF5F4A;
            color: #fff;
            border-left: 1px solid #915B2F;
            border-right: 1px solid #915B2F;
            margin: 0 -1px;
        }
        
        .category li {
            list-style: none;
            float: left;
            width: 50px;
            height: 45px;
            padding-top: 5px;
            cursor: pointer;
        }
        
        .category .ico_comm {
            display: block;
            margin: 0 auto 2px;
            width: 22px;
            height: 26px;
            background: url('https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/category.png') no-repeat;
        }
        
        .category .ico_destination {
            background-position: -10px 0;
        }
        
        .category .ico_gas_station {
            background-position: -10px -36px;
        }
        
        .category .ico_restaurant {
            background-position: -10px -72px;
        }
        .make_plan{
            width: 655px;
  height: 65px;
  opacity: 0.7;
  border-radius: 21px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
  background-color: #ffffff;
  position: absolute;
  left: 920px;

    top: 80px;
    padding: 5px;
        }
        </style>

    </head>
    <body>
    <div id="header">
        <div class="wrap">
            <h1 class="logo f1" alt="fourworker">
                <a href="main.php">
                        <img src="./css/icon/logo.png" style="width:200px; margin-top: -30px;" />
                </a>
            </h1>


            

            <ul class="cate_list" >
                <a href="main.php" class='f1'>
                    <li>여행지</li>
                </a>
                <a href="test2.php" class='f1'>
                    <li>플랜짜기</li>
                </a>
                <a href="mypage.php" class='f1'>
                    <li>마이페이지</li>
                </a> 
            </ul>
            <!--설정 리스트-->
            <div class=make_plan>
                <form name="formSend" action="test1.php" method="post"style="text-align:center;">
                    <span><input class ="date" type="date" name="from" min="2020-01-01" max="2021-12-31"></span>
                    <span><input class ="date" type="date" name="to" min="2020-01-01" max="2021-12-31"></span>
                    <span>
                        <select name="temp1">
                            <option value="<?=$temp1?>" selected disabled hidden><?=$temp1?></option>
                            <?php
                            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
                            $sql ="select * from sigoongu where temp not like '%원주%' order by binary(temp)";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result)){
                                echo"<option value=\"{$row['temp']}\">{$row['temp']}</option>";
                            }
                            ?>
                        </select>
                    </span>           
                
                <span style="height: 62px;
                    line-height: 62px;
                    font-family: 'NanumSquare', sans-serif;
                    font-size: 15px;
                    font-weight: bold;
                    margin-right: 15px;">
                    <input style="background: rgba(255,255,255,0);" type="submit" value="플랜 만들기">
                </span>      
                </form>
                </div>
        </div>
    </div> 
    <div id="container_">
        <div id="rvWrapper">
            <div id="roadview" style="width:100%;height:100%"></div>
        </div>
        <div id="mapWrapper">
            <div id="map" style="width:100%;height:100%"></div>
            
        </div>
    </div>
    </div>
        <ul class="container" style="background-color: rgba( 0, 0, 0, 0.5 );">
            <li><img class ="txt" src="./css/icon/start_x.png"><span class="title_x">: 강원도 원주시</span></li> 
            <li><div id ="explain">※등본상 거주지와 기업주소지를 반영하여 설정한 지역입니다. 변경은 설정에서 가능합니다. 변경은 설정에서 가능합니다.</div></li>
            <li><div class="done"><h3 style="width: 169px;
                                height: 37px;
                                font-family: NotoSansKR;
                                font-size: 25px;
                                font-weight: 500;
                                font-stretch: normal;
                                font-style: normal;
                                line-height: 1.48;
                                letter-spacing: 0.45px;
                                text-align: center;
                                color: #f34780;">Done</h3></div></li>
                <input type="button" class="gomypage" onclick="goForm()">
        <ul>
    </div>
    <script src="./js/map.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=1cefd976ef733632b7a0f894d71c953a"></script>
    <script>
        // ===== myPage/test1 보내는 부분 =====
        function goForm(){
            alert('추가된 항목이 없습니다.');
        }

        // ===== 지도의 중심을 잡는 부분 =====
        var mapContainer = document.getElementById('map');
        var mapCenter = new kakao.maps.LatLng(36.478824, 126.775998);   
		var options = {
			center: mapCenter,
			level: 12
        };
		var map = new kakao.maps.Map(mapContainer, options);
    </script>
    </body>