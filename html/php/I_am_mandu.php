<?php

$conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
$sql ="select * from travel";
$result = mysqli_query($conn,$sql);
$temp1=$_POST['temp1'];
$temp2=$_POST['temp2'];
$temp3=$_POST['temp3'];
$from =$_POST['from'];
$to = $_POST['to'];
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

            /* #mapContainer {
            overflow: hidden;
            height: 860px;
            position: relative;
            } */
            
            #container_ {
            overflow: hidden;
            height: 860px;
            position: relative;
            /* overflow: hidden; */
            /* height: 860px; */
            width: 100%;
            /* position: relative; */
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
                /* left: 5px; */
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
    <body>
    <div id="header">
        <div class="wrap">
            <h1 class="logo f1" alt="fourworker">
                <a href="index.php">
                    <img src="./css/icon/logo.png" style="width:100px; height:60.5px; margin-bottom:10px; padding:3px;" />
                </a>
            </h1>
            <ul class="cate_list" >
            <form action="test1.php" method="post">
                        <span><input class ="date" type="date" name="from" min="2020-01-01" max="2021-12-31"></span>
                        <span><input class ="date" type="date" name="to" min="2020-01-01" max="2021-12-31"></span>

                        <span>
                        <select name="temp1">
                        <option value="<?=$temp1?>" selected disabled hidden><?=$temp1?></option>

                        <?php
                        $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
                        $sql ="select * from sigoongu order by binary(temp)";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                            echo"<option value=\"{$row['temp']}\">{$row['temp']}</option>";
                        }
                        ?>
                        </select>
                        </span>

                        <span>
                        <select name="temp2">
                        <option value="<?=$temp2?>" selected disabled hidden><?=$temp2?></option>

                        <?php
                        $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
                        $sql ="select * from sigoongu order by binary(temp)";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                            echo"<option value=\"{$row['temp']}\">{$row['temp']}</option>";
                        }
                        ?>
                        </select>
                        </span>

                        <span>
                        <select name="temp3">
                        <option value="<?=$temp3?>" selected disabled hidden><?=$temp3?></option>

                        <?php
                        $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
                        $sql ="select * from sigoongu order by binary(temp)";
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
							<input style="background: rgba(255,255,255,0);" type="submit" value="플랜 만들기" >
                        </span>
                        
						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;">
							<a href="http://wodud2970.dothome.co.kr/mypage.html" target="_self">마이페이지</a>
						</span>
						
						
						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;
							float:right;">
							<a href="https://www.naver.com/" target="_self" style="text-de;">고객센터</a>
						</span>
					
						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;
							float:right;">
							<a href="file:///C:/Users/asdfg/Desktop/VS%20CODE/%EB%A1%9C%EA%B7%B8%EC%9D%B8/%EB%A1%9C%EA%B7%B8%EC%9D%B8.html" target="_self">로그인</a>
                        </span>
                        </form>
            </ul>
        </div>
    </div>  
    <div id="container_">
        <div id="rvWrapper">
            <div id="roadview" style="width:100%;height:100%"></div>
            <div id="close" title="로드뷰닫기" onclick="closeRoadview()"><span class="img"></span></div>
        </div>
        <div id="mapWrapper">
            <div id="map" style="width:100%;height:100%"></div>
            <div id="roadviewControl" onclick="setRoadviewRoad()"></div>
        </div>
    </div>     
        <ul class="container" style="background-color: rgba( 0, 0, 0, 0.5 );">
            <li><img class ="txt" src="./css/icon/start_x.png"><span class="title_x">: 강원도 원주시</span></li> 
            <li><div id ="explain">※등본상 거주지와 기업주소지를 반영하여 설정한 지역입니다. 변경은 설정에서 가능합니다. 변경은 설정에서 가능합니다.</div></li>
            <li><div class="notdone"><h3 style="width: 169px;
                                height: 37px;
                                font-family: NotoSansKR;
                                font-size: 25px;
                                font-weight: 500;
                                font-stretch: normal;
                                font-style: normal;
                                line-height: 1.48;
                                letter-spacing: 0.45px;
                                text-align: center;
                                color: #f34780;">To Do List</h3></div></li> 
            <form name="form" method="POST" action ="mypage.php">
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
            <input type="button" class="gomypage">
            </form>
            <form name="formSend" action="list.php" method="POST">
                <input type="hidden" name="array" value="" />
                <input type="button" class="gomypage" onclick="send()">
            </form>
        </ul>
        <script src="./js/map.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=1cefd976ef733632b7a0f894d71c953a"></script>
    <script>
    // ===== 지도 중심찍는 부분 =====
        var overlayOn = false;  // 지도위에 로드뷰 오버레이가 추가된 상태 가지고 있을 변수
		var container_ = document.getElementById('container_');
        var mapWrapper = document.getElementById('mapWrapper');
        var mapContainer = document.getElementById('map');
        var rvContainer = document.getElementById('roadview');

        var mapCenter = new kakao.maps.LatLng(36.058284, 128.078422)
		var options = {
			center: mapCenter,
			level: 12
        };

		var map = new kakao.maps.Map(mapContainer, options);
        var rv = new kakao.maps.Roadview(rvContainer);
        var rvClient = new kakao.maps.RoadviewClient();  // 좌표로부터 로드뷰 파노라마 ID를 가져올 로드뷰 클라이언트 객체를 생성합니다 

        kakao.maps.event.addListener(rv, 'position_changed', function() { // 로드뷰에 좌표가 바뀌었을 때 발생하는 이벤트를 등록합니다 
            var rvPosition = rv.getPosition();   // 현재 로드뷰의 위치 좌표를 얻어옵니다  
            map.setCenter(rvPosition);  // 지도의 중심을 현재 로드뷰의 위치로 설정합니다  
            if (overlayOn) {  // 지도 위에 로드뷰 도로 오버레이가 추가된 상태이면
                marker.setPosition(rvPosition);  // 마커의 위치를 현재 로드뷰의 위치로 설정합니다
            }
        });

        var clickedOverlay =null;

    // ===== 여행지 찍는 방법 =====
        var positions = []; // 마커를 표시할 위치와 title 객체 배열입니다
        var applyList = []; // myPage에 보낼 List

        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from travel where addr like '%{$temp1}%' and tagname not like '%음식%' or addr like '%{$temp2}%' or addr like '%{$temp3}%'";
            $result = mysqli_query($conn,$sql); 
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['url'];
        ?>
                positions.push({ 
                    title:'<?=$title?>',
                    addr:'<?=$addr?>',
                    url:'<?=$url?>',
                    latlng:new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>)
                });    
        <?
            $n++;
            }
        ?>

        var imageSrc = "./css/icon/marker.png"; // 마커 이미지의 이미지 주소입니다
        var clickedOverlay = null;

        for (var i = 0; i < positions.length; i ++) {
           var data = positions[i];
           displayMarker(data);
        }
 
        var markImage = new kakao.maps.MarkerImage(  // 마커 이미지를 생성합니다
            'https://t1.daumcdn.net/localimg/localimages/07/2018/pc/roadview_minimap_wk_2018.png',
            new kakao.maps.Size(26, 46), {
                // 스프라이트 이미지를 사용합니다.
                // 스프라이트 이미지 전체의 크기를 지정하고
                spriteSize: new kakao.maps.Size(1666, 168),
                // 사용하고 싶은 영역의 좌상단 좌표를 입력합니다.
                // background-position으로 지정하는 값이며 부호는 반대입니다.
                spriteOrigin: new kakao.maps.Point(705, 114),
                offset: new kakao.maps.Point(13, 46)
            }
        );
    
        var marker = new kakao.maps.Marker({  // 드래그가 가능한 마커를 생성합니다
            image: markImage,
            position: mapCenter,
            draggable: true
        });
     
        kakao.maps.event.addListener(marker, 'dragend', function(mouseEvent) {  // 마커에 dragend 이벤트를 등록합니다
            var position = marker.getPosition();  // 현재 마커가 놓인 자리의 좌표입니다 
            toggleRoadview(position);  // 마커가 놓인 위치를 기준으로 로드뷰를 설정합니다
        });

        
        kakao.maps.event.addListener(map, 'click', function(mouseEvent) {  //지도에 클릭 이벤트를 등록합니다
            if (!overlayOn) {  // 지도 위에 로드뷰 도로 오버레이가 추가된 상태가 아니면 클릭이벤트를 무시합니다
                return;
            }

            var position = mouseEvent.latLng;  // 클릭한 위치의 좌표입니다
            marker.setPosition(position);  // 마커를 클릭한 위치로 옮깁니다
            toggleRoadview(position);  // 클락한 위치를 기준으로 로드뷰를 설정합니다
        });

        function toggleRoadview(position) {  // 전달받은 좌표(position)에 가까운 로드뷰의 파노라마 ID를 추출하여 로드뷰를 설정하는 함수입니다
            rvClient.getNearestPanoId(position, 50, function(panoId) {
                if (panoId == null) {  // 파노라마 ID가 null 이면 로드뷰를 숨깁니다
                    toggleMapWrapper(true, position);
                } else {
                    toggleMapWrapper(false, position);
                    rv.setPanoId(panoId, position);   // panoId로 로드뷰를 설정합니다
                }
            });
        }

        
        function toggleMapWrapper(active, position) {  // 지도를 감싸고 있는 div의 크기를 조정하는 함수입니다
            if (active) {
                container_.className = '';  // 지도를 감싸고 있는 div의 너비가 100%가 되도록 class를 변경합니다
                map.relayout();  // 지도의 크기가 변경되었기 때문에 relayout 함수를 호출합니다
                map.setCenter(position);  // 지도의 너비가 변경될 때 지도중심을 입력받은 위치(position)로 설정합니다
            } else {
                if (container_.className.indexOf('view_roadview') == -1) {  // 지도만 보여지고 있는 상태이면 지도의 너비가 50%가 되도록 class를 변경하여 로드뷰가 함께 표시되게 합니다
                    container_.className = 'view_roadview';
                    map.relayout();  // 지도의 크기가 변경되었기 때문에 relayout 함수를 호출합니다
                    map.setCenter(position);  // 지도의 너비가 변경될 때 지도중심을 입력받은 위치(position)로 설정합니다
                }
            }
        }

        
        function toggleOverlay(active) {  // 지도 위의 로드뷰 도로 오버레이를 추가,제거하는 함수입니다
            if (active) {
                overlayOn = true;
                map.addOverlayMapTypeId(kakao.maps.MapTypeId.ROADVIEW);  // 지도 위에 로드뷰 도로 오버레이를 추가합니다
                marker.setMap(map);  // 지도 위에 마커를 표시합니다
                marker.setPosition(map.getCenter());  // 마커의 위치를 지도 중심으로 설정합니다
                toggleRoadview(map.getCenter());  // 로드뷰의 위치를 지도 중심으로 설정합니다
            } else {
                overlayOn = false;
                map.removeOverlayMapTypeId(kakao.maps.MapTypeId.ROADVIEW);  // 지도 위의 로드뷰 도로 오버레이를 제거합니다
                marker.setMap(null);  // 지도 위의 마커를 제거합니다
            }
        }

        
        function setRoadviewRoad() {  // 지도 위의 로드뷰 버튼을 눌렀을 때 호출되는 함수입니다
            var control = document.getElementById('roadviewControl');
            if (control.className.indexOf('active') == -1) {  // 버튼이 눌린 상태가 아니면
                control.className = 'active';
                toggleOverlay(true); // 로드뷰 도로 오버레이가 보이게 합니다
            } else {
                control.className = '';
                toggleOverlay(false); // 로드뷰 도로 오버레이를 제거합니다
            }
        }

        function closeRoadview() {   // 로드뷰에서 X버튼을 눌렀을 때 로드뷰를 지도 뒤로 숨기는 함수입니다
            var position = marker.getPosition();
            toggleMapWrapper(true, position);
        }

        function displayMarker(data){
            var imageSize = new kakao.maps.Size(25, 20);  // 마커 이미지의 이미지 크기 입니다
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize);  // 마커 이미지를 생성합니다
            var marker = new kakao.maps.Marker({ // 마커를 생성합니다
                map: map,                       // 마커를 표시할 지도
                position: data.latlng, // 마커를 표시할 위치
                image : markerImage, // 마커 이미지 
            });
          
            var overlay = new kakao.maps.CustomOverlay({
                map: map,
                position: marker.getPosition(),
                clickable: true 
            });     
            var wrap = document.createElement('div');
            wrap.className="m_wrap";

            var info = document.createElement('div');
            info.className="m_info";

            wrap.appendChild(info); //wrap > info

            var title = document.createElement('div');
            title.className="m_title";
            title.innerHTML= data.title;
            info.appendChild(title); //info >title

            var close =document.createElement('div');
            close.className="close";  // close.innerHTML="닫기";
            close.onclick = function(){
                overlay.setMap(null);
            }

            title.append(close); //title > close

            var body = document.createElement('div');
            body.className="m_body";
            info.appendChild(body); //info >body

            var ellipsis =document.createElement('div');
            ellipsis.className="m_ellipsis1";
            ellipsis.innerHTML=data.addr
            body.appendChild(ellipsis); // body > ellipsis

            var image =document.createElement('div');
            image.className="m_img";
            body.appendChild(image);

            var button = document.createElement('button');
            button.setAttribute('value', data.title);
            button.className="m_botton"
            button.onclick = function(){
                //Task에 입력 값 넣기
                var task = $("<div class='task'></div>").text($(this).val());
                var task2 = $(this).val();             
                //삭제버튼
                var del = $("<i class='i_delete'></i>").click(function(){
                    var p = $(this).parent();
                    for(var k = 0; k < applyList.length; k++){
                        if (applyList[k] == task2){
                            applyList.splice(k, 1);
                            break;
                        }    
                    }
                    alert(applyList);
                    p.fadeOut(function(){
                        p.remove();
                    })
                });
                //체크 버튼
                var check = $("<i class='i_check'></i>").click(function(){
                    var p = $(this).parent();
                    applyList.push(task2);
                    alert(applyList);
                    p.fadeOut(function(){
                        $(".done").append(p);
                        p.fadeIn();
                    })
                    $(this).remove();
                });
            
                //Task에 삭제 & 체크 버튼 추가하기
                task.append(del,check)
                
                //할일 목록에 추가
                $(".notdone").append(task);
                }
                image.appendChild(button); //image >button


                var desc =document.createElement('div');
                desc.className="m_desc";
                body.appendChild(desc); // body >desc

                var a_desc = document.createElement('div');
                a_desc.className="a_desc"
                desc.appendChild(a_desc);

                var a =document.createElement('a');
                a.className="link"
                a.innerHTML="상세보기"
                a.setAttribute('target','_blank');
                a.setAttribute('href',data.url);
                a_desc.appendChild(a); //a_desc > a

                overlay.setContent(wrap);
                var clickedOverlay = null;
                
                overlay.setMap(null);
                kakao.maps.event.addListener(marker, 'click', displayOverlay(map,overlay));
        }

        function displayOverlay(map,overlay){
            return function(){
                if(clickedOverlay){
                    clickedOverlay.setMap(null);
                }
                overlay.setMap(map);
                clickedOverlay=overlay;
            }
        }

        function makeOverListener(map, marker, infowindow) {
            return function() {
                infowindow.open(map, marker);
                };
        }
    
        function makeOutListener(infowindow) { // 인포윈도우를 닫는 클로저를 만드는 함수입니다 
            return function() {
                infowindow.close();
            };
        }
    
        function closeOverlay() { // 커스텀 오버레이를 닫기 위해 호출되는 함수입니다 
            overlay.setMap(null);       
        }


    // ===== 맛집 찍는 방법 =====
        var positions_r = [];
 
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from food where addr like '%{$temp1}%'";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
        ?>     
                positions_r.push({ 
                    content: 
                    '<div class="m_wrap">' + 
                    '    <div class="m_info">' + 
                    '        <div class="m_title">' + 
                    "           <?=$title?>"  + 
                    '        </div>' + 
                    '        <div class="m_body">' + 
                    '                <div class="m_ellipsis1"><?=$addr?></div>' + 
                    '            <div class="m_img">' +
                    '           </div>' + 
                    '            <div class="m_desc">' + 
                    '            </div>' + 
                    '        </div>' + 
                    '    </div>' +    
                    '</div>',
                    latlng:new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>)
                    });   
        <?
            $n++;
            }
        ?>

        
        var imageSrc = "./css/icon/pizzamarker.png";  // 마커 이미지의 이미지 주소입니다
            
        for (var i = 0; i < positions_r.length; i ++) {
            var imageSize = new kakao.maps.Size(35, 30);  // 마커 이미지의 이미지 크기 입니다
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); // 마커 이미지를 생성합니다
            var marker = new kakao.maps.Marker({ // 마커를 생성합니다
                map: map,                       // 마커를 표시할 지도
                position: positions_r[i].latlng, // 마커를 표시할 위치
                title : positions_r[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
                image : markerImage, // 마커 이미지 
            });

            var overlay = new kakao.maps.CustomOverlay({
                content: positions_r[i].content,
                map: map,
                position: marker.getPosition(),
                zIndex: 99999,
                clickable: true
                
            });     
            var clickedOverlay = null;
            overlay.setMap(null);
            kakao.maps.event.addListener(marker, 'click', displayOverlay(map,overlay));
        }
        
    // ===== 근무지 다각형1 부분 =====
        var polygon = [];
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from areaPolygon where area like '%원주%'";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
        ?>
            polygon.push(new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>));        
        <?php
                $n++;
            }
        ?>

        var polygon= new kakao.maps.Polygon({  // 지도에 표시할 다각형을 생성합니다
            path:polygon, // 그려질 다각형의 좌표 배열입니다
            strokeWeight: 3, // 선의 두께입니다
            strokeColor: '#FF3DE5', // 선의 색깔입니다
            strokeOpacity: 0.8, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
            strokeStyle: 'solid', // 선의 스타일입니다
            fillColor: '#FF8AEF', // 채우기 색깔입니다
            fillOpacity: 0.7 // 채우기 불투명도 입니다
        });
 
        polygon.setMap(map);  // 지도에 다각형을 표시합니다
       
    // ===== 여행지 다각형2 부분 =====
        var areas = [];
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from areaPolygon where area like '%대구%'" ;
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
        ?>
            areas.push(new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>));        
        <?php
                $n++;
            }
        ?>

        for (var i = 0, len = areas.length; i < len; i++) {
            displayArea(areas[i]);
        }

        function displayArea(area) {
            // 다각형을 생성합니다 
            var polygon = new kakao.maps.Polygon({
                map: map, // 다각형을 표시할 지도 객체
                path: area,
                strokeWeight: 2,
                strokeColor: '#004c80',
                strokeOpacity: 0.8,
                fillColor: '#fff',
                fillOpacity: 0.7 
            });
        }
       

    // ===== 다음 페이지 보내는 부분 =====
        function send() {
            form = document.formSend;
            form.array.value = applyList;
            form.submit();
        }
    // ===== 갱신시 보내는 부분 =====

    </script>


    </body>


    <?php

$conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
$sql ="select * from travel";
$result = mysqli_query($conn,$sql);
$temp1=$_POST['temp1'];
$temp2=$_POST['temp2'];
$temp3=$_POST['temp3'];
$from =$_POST['from'];
$to = $_POST['to'];
// $re = $_POST[];
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
    <body>
    <div id="header">
        <div class="wrap">
            <h1 class="logo f1" alt="fourworker">
                <a href="index.php">
                    <img src="./css/icon/logo.png" style="width:100px; height:60.5px; margin-bottom:10px; padding:3px;" />
                </a>
            </h1>
            <ul class="cate_list" >
            <form action="test1.php" method="post">
                        <span><input class ="date" type="date" name="from" min="2020-01-01" max="2021-12-31"></span>
                        <span><input class ="date" type="date" name="to" min="2020-01-01" max="2021-12-31"></span>

                        <span>
                        <select name="temp1">
                        <option value="<?=$temp1?>" selected disabled hidden><?=$temp1?></option>

                        <?php
                        $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
                        $sql ="select * from sigoongu order by binary(temp)";
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
							<input style="background: rgba(255,255,255,0);" type="submit" value="플랜 만들기" >
                        </span>
                        
						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;">
							<a href="http://wodud2970.dothome.co.kr/mypage.html" target="_self">마이페이지</a>
						</span>
						
						
						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;
							float:right;">
							<a href="https://www.naver.com/" target="_self" style="text-de;">고객센터</a>
						</span>
					
						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;
							float:right;">
							<a href="file:///C:/Users/asdfg/Desktop/VS%20CODE/%EB%A1%9C%EA%B7%B8%EC%9D%B8/%EB%A1%9C%EA%B7%B8%EC%9D%B8.html" target="_self">로그인</a>
                        </span>
                        </form>
            </ul>
        </div>
    </div>  
    <div id="container_">
        <div id="rvWrapper">
            <div id="roadview" style="width:100%;height:100%"></div>
            <div id="close" title="로드뷰닫기" onclick="closeRoadview()"><span class="img"></span></div>
        </div>
        <div id="mapWrapper">
            <div id="map" style="width:100%;height:100%"></div>
            <div id="roadviewControl" onclick="setRoadviewRoad()"></div>
        </div>
    </div>     
        <ul class="container" style="background-color: rgba( 0, 0, 0, 0.5 );">
            <li><img class ="txt" src="./css/icon/start_x.png"><span class="title_x">: 강원도 원주시</span></li> 
            <li><div id ="explain">※등본상 거주지와 기업주소지를 반영하여 설정한 지역입니다. 변경은 설정에서 가능합니다. 변경은 설정에서 가능합니다.</div></li>
            <li><div class="notdone"><h3 style="width: 169px;
                                height: 37px;
                                font-family: NotoSansKR;
                                font-size: 25px;
                                font-weight: 500;
                                font-stretch: normal;
                                font-style: normal;
                                line-height: 1.48;
                                letter-spacing: 0.45px;
                                text-align: center;
                                color: #f34780;">To Do List</h3></div></li> 
            <form name="form" method="POST" action ="mypage.php">
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
            <input type="button" class="gomypage">
            </form>
            <form name="formSend" action="list.php" method="POST">
                <input type="hidden" name="array" value="" />
                <input type="button" class="gomypage" onclick="send()">
            </form>
            <!-- <form name="formSendSend" action="test1.php" method="POST">
                <input type="hidden" name="array" value="" />
                <input type="button" class="returnPage" onclick="sendsend()">
            </form> -->
        </ul>
        <script src="./js/map.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=1cefd976ef733632b7a0f894d71c953a"></script>
    <script>
    // ===== 지도 중심찍는 부분 =====
        var overlayOn = false;  // 지도위에 로드뷰 오버레이가 추가된 상태 가지고 있을 변수
		var container_ = document.getElementById('container_');
        var mapWrapper = document.getElementById('mapWrapper');
        var mapContainer = document.getElementById('map');
        var rvContainer = document.getElementById('roadview');

        var mapCenter = new kakao.maps.LatLng(36.058284, 128.078422)
		var options = {
			center: mapCenter,
			level: 12
        };

		var map = new kakao.maps.Map(mapContainer, options);
        var rv = new kakao.maps.Roadview(rvContainer);
        var rvClient = new kakao.maps.RoadviewClient();  // 좌표로부터 로드뷰 파노라마 ID를 가져올 로드뷰 클라이언트 객체를 생성합니다 

        kakao.maps.event.addListener(rv, 'position_changed', function() { // 로드뷰에 좌표가 바뀌었을 때 발생하는 이벤트를 등록합니다 
            var rvPosition = rv.getPosition();   // 현재 로드뷰의 위치 좌표를 얻어옵니다  
            map.setCenter(rvPosition);  // 지도의 중심을 현재 로드뷰의 위치로 설정합니다  
            if (overlayOn) {  // 지도 위에 로드뷰 도로 오버레이가 추가된 상태이면
                marker.setPosition(rvPosition);  // 마커의 위치를 현재 로드뷰의 위치로 설정합니다
            }
        });

        var clickedOverlay =null;

    // ===== 여행지 찍는 방법 =====
        var positions = []; // 마커를 표시할 위치와 title 객체 배열입니다
        var applyList = []; // myPage에 보낼 List

        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from travel where addr like '%{$temp1}%' and tagname not like '%음식%'";
            $result = mysqli_query($conn,$sql); 
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['url'];
        ?>
                positions.push({ 
                    title:'<?=$title?>',
                    addr:'<?=$addr?>',
                    url:'<?=$url?>',
                    latlng:new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>)
                });    
        <?
            $n++;
            }
        ?>

        var imageSrc = "./css/icon/marker.png"; // 마커 이미지의 이미지 주소입니다
        var clickedOverlay = null;

        for (var i = 0; i < positions.length; i ++) {
           var data = positions[i];
           displayMarker(data);
        }
 
        var markImage = new kakao.maps.MarkerImage(  // 마커 이미지를 생성합니다
            'https://t1.daumcdn.net/localimg/localimages/07/2018/pc/roadview_minimap_wk_2018.png',
            new kakao.maps.Size(26, 46), {
                // 스프라이트 이미지를 사용합니다.
                // 스프라이트 이미지 전체의 크기를 지정하고
                spriteSize: new kakao.maps.Size(1666, 168),
                // 사용하고 싶은 영역의 좌상단 좌표를 입력합니다.
                // background-position으로 지정하는 값이며 부호는 반대입니다.
                spriteOrigin: new kakao.maps.Point(705, 114),
                offset: new kakao.maps.Point(13, 46)
            }
        );
    
        var marker = new kakao.maps.Marker({  // 드래그가 가능한 마커를 생성합니다
            image: markImage,
            position: mapCenter,
            draggable: true
        });
     
        kakao.maps.event.addListener(marker, 'dragend', function(mouseEvent) {  // 마커에 dragend 이벤트를 등록합니다
            var position = marker.getPosition();  // 현재 마커가 놓인 자리의 좌표입니다 
            toggleRoadview(position);  // 마커가 놓인 위치를 기준으로 로드뷰를 설정합니다
        });

        
        kakao.maps.event.addListener(map, 'click', function(mouseEvent) {  //지도에 클릭 이벤트를 등록합니다
            if (!overlayOn) {  // 지도 위에 로드뷰 도로 오버레이가 추가된 상태가 아니면 클릭이벤트를 무시합니다
                return;
            }

            var position = mouseEvent.latLng;  // 클릭한 위치의 좌표입니다
            marker.setPosition(position);  // 마커를 클릭한 위치로 옮깁니다
            toggleRoadview(position);  // 클락한 위치를 기준으로 로드뷰를 설정합니다
        });

        function toggleRoadview(position) {  // 전달받은 좌표(position)에 가까운 로드뷰의 파노라마 ID를 추출하여 로드뷰를 설정하는 함수입니다
            rvClient.getNearestPanoId(position, 50, function(panoId) {
                if (panoId == null) {  // 파노라마 ID가 null 이면 로드뷰를 숨깁니다
                    toggleMapWrapper(true, position);
                } else {
                    toggleMapWrapper(false, position);
                    rv.setPanoId(panoId, position);   // panoId로 로드뷰를 설정합니다
                }
            });
        }

        
        function toggleMapWrapper(active, position) {  // 지도를 감싸고 있는 div의 크기를 조정하는 함수입니다
            if (active) {
                container_.className = '';  // 지도를 감싸고 있는 div의 너비가 100%가 되도록 class를 변경합니다
                map.relayout();  // 지도의 크기가 변경되었기 때문에 relayout 함수를 호출합니다
                map.setCenter(position);  // 지도의 너비가 변경될 때 지도중심을 입력받은 위치(position)로 설정합니다
            } else {
                if (container_.className.indexOf('view_roadview') == -1) {  // 지도만 보여지고 있는 상태이면 지도의 너비가 50%가 되도록 class를 변경하여 로드뷰가 함께 표시되게 합니다
                    container_.className = 'view_roadview';
                    map.relayout();  // 지도의 크기가 변경되었기 때문에 relayout 함수를 호출합니다
                    map.setCenter(position);  // 지도의 너비가 변경될 때 지도중심을 입력받은 위치(position)로 설정합니다
                }
            }
        }
  
        function toggleOverlay(active) {  // 지도 위의 로드뷰 도로 오버레이를 추가,제거하는 함수입니다
            if (active) {
                overlayOn = true;
                map.addOverlayMapTypeId(kakao.maps.MapTypeId.ROADVIEW);  // 지도 위에 로드뷰 도로 오버레이를 추가합니다
                marker.setMap(map);  // 지도 위에 마커를 표시합니다
                marker.setPosition(map.getCenter());  // 마커의 위치를 지도 중심으로 설정합니다
                toggleRoadview(map.getCenter());  // 로드뷰의 위치를 지도 중심으로 설정합니다
            } else {
                overlayOn = false;
                map.removeOverlayMapTypeId(kakao.maps.MapTypeId.ROADVIEW);  // 지도 위의 로드뷰 도로 오버레이를 제거합니다
                marker.setMap(null);  // 지도 위의 마커를 제거합니다
            }
        }

        function setRoadviewRoad() {  // 지도 위의 로드뷰 버튼을 눌렀을 때 호출되는 함수입니다
            var control = document.getElementById('roadviewControl');
            if (control.className.indexOf('active') == -1) {  // 버튼이 눌린 상태가 아니면
                control.className = 'active';
                toggleOverlay(true); // 로드뷰 도로 오버레이가 보이게 합니다
            } else {
                control.className = '';
                toggleOverlay(false); // 로드뷰 도로 오버레이를 제거합니다
            }
        }

        function closeRoadview() {   // 로드뷰에서 X버튼을 눌렀을 때 로드뷰를 지도 뒤로 숨기는 함수입니다
            var position = marker.getPosition();
            toggleMapWrapper(true, position);
        }

        function displayMarker(data){
            var imageSize = new kakao.maps.Size(25, 20);  // 마커 이미지의 이미지 크기 입니다
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize);  // 마커 이미지를 생성합니다
            var marker = new kakao.maps.Marker({ // 마커를 생성합니다
                map: map,                       // 마커를 표시할 지도
                position: data.latlng, // 마커를 표시할 위치
                image : markerImage, // 마커 이미지 
            });
          
            var overlay = new kakao.maps.CustomOverlay({
                map: map,
                position: marker.getPosition(),
                clickable: true 
            });     
            var wrap = document.createElement('div');
            wrap.className="m_wrap";

            var info = document.createElement('div');
            info.className="m_info";

            wrap.appendChild(info); //wrap > info

            var title = document.createElement('div');
            title.className="m_title";
            title.innerHTML= data.title;
            info.appendChild(title); //info >title

            var close =document.createElement('div');
            close.className="close";  // close.innerHTML="닫기";
            close.onclick = function(){
                overlay.setMap(null);
            }

            title.append(close); //title > close

            var body = document.createElement('div');
            body.className="m_body";
            info.appendChild(body); //info >body

            var ellipsis =document.createElement('div');
            ellipsis.className="m_ellipsis1";
            ellipsis.innerHTML=data.addr
            body.appendChild(ellipsis); // body > ellipsis

            var image =document.createElement('div');
            image.className="m_img";
            body.appendChild(image);

            var button = document.createElement('button');
            button.setAttribute('value', data.title);
            button.className="m_botton"
            button.onclick = function(){
                //Task에 입력 값 넣기
                var task = $("<div class='task'></div>").text($(this).val());
                var task2 = $(this).val();             
                //삭제버튼
                var del = $("<i class='i_delete'></i>").click(function(){
                    var p = $(this).parent();
                    for(var k = 0; k < applyList.length; k++){
                        if (applyList[k] == task2){
                            applyList.splice(k, 1);
                            break;
                        }    
                    }
                    alert(applyList);
                    p.fadeOut(function(){
                        p.remove();
                    })
                });
                //체크 버튼
                var check = $("<i class='i_check'></i>").click(function(){
                    var p = $(this).parent();
                    applyList.push(task2);
                    alert(applyList);
                    p.fadeOut(function(){
                        $(".done").append(p);
                        p.fadeIn();
                    })
                    $(this).remove();
                });
            
                //Task에 삭제 & 체크 버튼 추가하기
                task.append(del,check)
                
                //할일 목록에 추가
                $(".notdone").append(task);
                }
                image.appendChild(button); //image >button


                var desc =document.createElement('div');
                desc.className="m_desc";
                body.appendChild(desc); // body >desc

                var a_desc = document.createElement('div');
                a_desc.className="a_desc"
                desc.appendChild(a_desc);

                var a =document.createElement('a');
                a.className="link"
                a.innerHTML="상세보기"
                a.setAttribute('target','_blank');
                a.setAttribute('href',data.url);
                a_desc.appendChild(a); //a_desc > a

                overlay.setContent(wrap);
                var clickedOverlay = null;
                
                overlay.setMap(null);
                kakao.maps.event.addListener(marker, 'click', displayOverlay(map,overlay));
        }

        function displayOverlay(map,overlay){
            return function(){
                if(clickedOverlay){
                    clickedOverlay.setMap(null);
                }
                overlay.setMap(map);
                clickedOverlay=overlay;
            }
        }

        function makeOverListener(map, marker, infowindow) {
            return function() {
                infowindow.open(map, marker);
                };
        }
    
        function makeOutListener(infowindow) { // 인포윈도우를 닫는 클로저를 만드는 함수입니다 
            return function() {
                infowindow.close();
            };
        }
    
        function closeOverlay() { // 커스텀 오버레이를 닫기 위해 호출되는 함수입니다 
            overlay.setMap(null);       
        }


    // ===== 맛집 찍는 방법 =====
        var positions_r = [];
 
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from food where addr like '%{$temp1}%'";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
        ?>     
                positions_r.push({ 
                    content: 
                    '<div class="m_wrap">' + 
                    '    <div class="m_info">' + 
                    '        <div class="m_title">' + 
                    "           <?=$title?>"  + 
                    '        </div>' + 
                    '        <div class="m_body">' + 
                    '                <div class="m_ellipsis1"><?=$addr?></div>' + 
                    '            <div class="m_img">' +
                    '           </div>' + 
                    '            <div class="m_desc">' + 
                    '            </div>' + 
                    '        </div>' + 
                    '    </div>' +    
                    '</div>',
                    latlng:new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>)
                    });   
        <?
            $n++;
            }
        ?>

        
        var imageSrc = "./css/icon/pizzamarker.png";  // 마커 이미지의 이미지 주소입니다
            
        for (var i = 0; i < positions_r.length; i ++) {
            var imageSize = new kakao.maps.Size(35, 30);  // 마커 이미지의 이미지 크기 입니다
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); // 마커 이미지를 생성합니다
            var marker = new kakao.maps.Marker({ // 마커를 생성합니다
                map: map,                       // 마커를 표시할 지도
                position: positions_r[i].latlng, // 마커를 표시할 위치
                title : positions_r[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
                image : markerImage, // 마커 이미지 
            });

            var overlay = new kakao.maps.CustomOverlay({
                content: positions_r[i].content,
                map: map,
                position: marker.getPosition(),
                zIndex: 99999,
                clickable: true
                
            });     
            var clickedOverlay = null;
            overlay.setMap(null);
            kakao.maps.event.addListener(marker, 'click', displayOverlay(map,overlay));
        }
        
    // ===== 근무지 다각형1 부분 =====
        var polygon = [];
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from areaPolygon where area like '%원주%'";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
        ?>
            polygon.push(new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>));        
        <?php
                $n++;
            }
        ?>

        var polygon= new kakao.maps.Polygon({  // 지도에 표시할 다각형을 생성합니다
            path:polygon, // 그려질 다각형의 좌표 배열입니다
            strokeWeight: 3, // 선의 두께입니다
            strokeColor: '#f70f0f', // 선의 색깔입니다
            strokeOpacity: 0.8, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
            strokeStyle: 'solid', // 선의 스타일입니다
            fillColor: '#f70f0f', // 채우기 색깔입니다
            fillOpacity: 0.7 // 채우기 불투명도 입니다
        });
 
        polygon.setMap(map);  // 지도에 다각형을 표시합니다
       
    // ===== 여행지 다각형2 부분 =====
        var areas = [];
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from areaPolygon where area like '%{$temp1}%'";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
        ?>
            areas.push(new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>));        
        <?php
                $n++;
            }
        ?>

        for (var i = 0, len = areas.length; i < len; i++) {
            displayArea(areas[i]);
        }

        function displayArea(area) {
            // 다각형을 생성합니다 
            var polygon = new kakao.maps.Polygon({
                map: map, // 다각형을 표시할 지도 객체
                path: area,
                strokeWeight: 2,
                strokeColor: '#004c80',
                strokeOpacity: 0.8,
                fillColor: '#fff',
                fillOpacity: 0.7 
            });
        }
       

    // ===== 다음 페이지 보내는 부분 =====
        function send() {
            form = document.formSend;
            form.array.value = applyList;
            form.submit();
        }
    // ===== 갱신시 보내는 부분 =====
        function sendsend() {
            form = document.formSend;
            form.array.value = applyList;
            form.submit();
        }
    </script>
    </body>