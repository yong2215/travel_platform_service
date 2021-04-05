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
                    <a href="for_map.php" class='f1'>
                        <li>여행지</li>
                    </a>
                    <a href="test_map.php" class='f1'>
                        <li'>플랜짜기</li>
                    </a>
                    <a href="" class='f1'>
                        <li>마이페이지</li>
                    </a>
                    
                </ul>
            </div>
        </div>
        <div id='wrapper'>
            <div id="map" 
            style="width:100%;
                height: 1000px;"></div>
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
            <ul>
                
  
            
        </div>
        
    
        <script src="./js/map.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=1cefd976ef733632b7a0f894d71c953a"></script>
    <script>
    // ===== 지도 중심찍는 부분 =====
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(36.058284, 128.078422),
			level: 12
        };
		var map = new kakao.maps.Map(container, options);
        var clickedOverlay =null;
        
    // ===== 여행지 찍는 방법 =====
        var positions = []; // 마커를 표시할 위치와 title 객체 배열입니다 
        var applyList = [];
 
        <?php
            $temp1=$_POST['temp1'];
            $temp2=$_POST['temp2'];
            $temp3=$_POST['temp3'];
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from travel where addr like '%{$temp1}%' and tagname not like '%음식%' or addr like '%{$temp2}%' or addr like '%{$temp3}%' ";
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

        var imageSrc = "./css/icon/marker.png";  // 마커 이미지의 이미지 주소입니다
        var clickedOverlay = null;
        for (var i = 0; i < positions.length; i ++) {
           var data = positions[i];
           displayMarker(data);
        }

        function displayMarker(data){
             // 마커 이미지의 이미지 크기 입니다
             var imageSize = new kakao.maps.Size(25, 20); 
            
            // 마커 이미지를 생성합니다    
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
            
            // 마커를 생성합니다
            var marker = new kakao.maps.Marker({
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
            close.className="close";
            // close.innerHTML="닫기";
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
                
                //삭제버튼
                var del = $("<i class='i_delete'></i>").click(function(){
                var p = $(this).parent();
                p.fadeOut(function(){
                    p.remove();
                })
                });
                
                //체크 버튼
                var check = $("<i class='i_check'></i>").click(function(){
                var p = $(this).parent();
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

        
        function makeOutListener(infowindow) {  // 인포윈도우를 닫는 클로저를 만드는 함수입니다 
            return function() {
                infowindow.close();
            };
        }
        
        function closeOverlay() {// 커스텀 오버레이를 닫기 위해 호출되는 함수입니다 
            overlay.setMap(null);       
        }

    // ===== 맛집 찍는 방법 =====
        var positions_r = [];
 
        <?php
            $temp1=$_POST['temp1'];
            $temp2=$_POST['temp2'];
            $temp3=$_POST['temp3'];
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from food where addr like '%{$temp1}%' or addr like '%{$temp2}%' or addr like '%{$temp3}%' ";
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

        var imageSrc = "./css/icon/pizzamarker.png"; // 마커 이미지의 이미지 주소입니다
            
        for (var i = 0; i < positions_r.length; i ++) {
            // 마커 이미지의 이미지 크기 입니다
            var imageSize = new kakao.maps.Size(35, 30); 
            
            // 마커 이미지를 생성합니다    
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
            
            // 마커를 생성합니다
            var marker = new kakao.maps.Marker({
                map: map,                       // 마커를 표시할 지도
                position: positions_r[i].latlng, // 마커를 표시할 위치
                title : positions_r[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
                image : markerImage, // 마커 이미지 
            });
            // content.appendChild(closeBtn);
            // 마커에 표시할 인포윈도우를 생성합니다 
            // var infowindow = new kakao.maps.InfoWindow({
            //     content: positions_r[i].content // 인포윈도우에 표시할 내용
            // });
            var overlay = new kakao.maps.CustomOverlay({
                content: positions_r[i].content,
                map: map,
                position: marker.getPosition(),
                zIndex: 99999,
                clickable: true
                
            });     
            var clickedOverlay = null;
            // 마커에 mouseover 이벤트와 mouseout 이벤트를 등록합니다
            // 이벤트 리스너로는 클로저를 만들어 등록합니다 
            // for문에서 클로저를 만들어 주지 않으면 마지막 마커에만 이벤트가 등록됩니다
            // kakao.maps.event.addListener(marker, 'mouseover', makeOverListener(map, marker, infowindow));
            // kakao.maps.event.addListener(marker, 'mouseout', makeOutListener(infowindow));
            overlay.setMap(null);
            kakao.maps.event.addListener(marker, 'click', displayOverlay(map,overlay));
        }
  
        $(".m_botton").click(function(){   // Planner 
            alert($(this).val());
            //Task에 입력 값 넣기
            var task = $("<div class='task'></div>").text($(this).val());
            
            //삭제버튼
            var del = $("<i class='i_check'></i>").click(function(){
            var p = $(this).parent();
            applyList.remove(p.title);
            p.fadeOut(function(){
                p.remove();
            })
            });
            
            //체크 버튼
            var check = $("<i class='i_delete'></i>").click(function(){
            var p = $(this).parent();
            applyList.add(p.title);
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
            
        })

    // ===== 근무지 다각형1 부분 =====
        var polygon1 = [];
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from areaPolygon ";
            $result = mysqli_query($conn,$sql);
            
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
        ?>
            polygon1.push(new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>));        
        <?php
                $n++;
            }
        ?>
        
        var polygon1= new kakao.maps.Polygon({  // 지도에 표시할 다각형을 생성합니다
            path:polygon1, // 그려질 다각형의 좌표 배열입니다
            strokeWeight: 3, // 선의 두께입니다
            strokeColor: '#FF3DE5', // 선의 색깔입니다
            strokeOpacity: 0.8, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
            strokeStyle: 'solid', // 선의 스타일입니다
            fillColor: '#FF8AEF', // 채우기 색깔입니다
            fillOpacity: 0.7 // 채우기 불투명도 입니다
        });
        
        polygon1.setMap(map);  // 지도에 다각형을 표시합니다
       
    // ===== 여행지 다각형2 부분 =====
        var areas = [];
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from areaPolygon ";
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
        
        customOverlay1 = new kakao.maps.CustomOverlay({});

        for (var i = 0, len = areas.length; i < len; i++) {
            displayArea(areas[i]);
        }

        function displayArea(area) {
            // 다각형을 생성합니다 
            var polygon = new kakao.maps.Polygon({
                map: map, // 다각형을 표시할 지도 객체
                path: area.path,
                strokeWeight: 2,
                strokeColor: '#004c80',
                strokeOpacity: 0.8,
                fillColor: '#fff',
                fillOpacity: 0.7 
            });
        }
        
       
    
    </script>


    </body>