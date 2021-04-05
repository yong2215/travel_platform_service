<?php

$conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
$sql ="select * from travel";
$result = mysqli_query($conn,$sql);
// while($row = mysqli_fetch_array($result)){
//     $escaped = array(
//         'lat' =>htmlspecialchars($conn,$row['lat']),
//         'longt'=>htmlspecialchars($conn,$row['longt'])
//     );
// }
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

		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(36.058284, 128.078422),
			level: 12
        };
        
        
		var map = new kakao.maps.Map(container, options);
        var clickedOverlay =null;
        // 마커를 표시할 위치와 title 객체 배열입니다 
        var positions = [];
        var applyList = []
 
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

        // 마커 이미지의 이미지 주소입니다
        var imageSrc = "./css/icon/marker.png"; 
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

        // 인포윈도우를 닫는 클로저를 만드는 함수입니다 
        function makeOutListener(infowindow) {
            return function() {
                infowindow.close();
            };
        }
        // 커스텀 오버레이를 닫기 위해 호출되는 함수입니다 
        function closeOverlay() {   
            overlay.setMap(null);       
        }

        var positions_r = [];
 
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from food where addr like '%진주%' or addr like '%통영%' or addr like '%창원%' ";
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

        // 마커 이미지의 이미지 주소입니다
        var imageSrc = "./css/icon/pizzamarker.png"; 
            
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

        // Planner 
        
        $(".m_botton").click(function(){
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

    var polygon_test = [];
 
 <?php
     $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
     $sql ="select * from areaPolygon ";
     $result = mysqli_query($conn,$sql);
     
     $n=1;
     while($row=mysqli_fetch_array($result)){
         $a=round((double)$row['lat'],6);
         $b=round((double)$row['longt'],6);
 ?>
         
         polygon_test.push(new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>));

         
 <?php
     $n++;
     }
 ?>
        

            var polygon_t = new kakao.maps.Polygon({  // 지도에 표시할 다각형을 생성합니다
            path:polygon_test, // 그려질 다각형의 좌표 배열입니다
            strokeWeight: 3, // 선의 두께입니다
            strokeColor: '#FF3DE5', // 선의 색깔입니다
            strokeOpacity: 0.8, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
            strokeStyle: 'solid', // 선의 스타일입니다
            fillColor: '#FF8AEF', // 채우기 색깔입니다
            fillOpacity: 0.7 // 채우기 불투명도 입니다
        });
        
 
        polygon_t.setMap(map);  // 지도에 다각형을 표시합니다

        
    // ============================= 근무지 다각형1 부분 (폴리곤 : 원주) ==========================================
    var polygonPath =[
            new kakao.maps.LatLng(37.29880426255525, 128.10856018737485),
            new kakao.maps.LatLng(37.29782403111697, 128.10878511992163),
            new kakao.maps.LatLng(37.29723531705914, 128.10875253235884),
            new kakao.maps.LatLng(37.29670022218355, 128.1089476881761),
            new kakao.maps.LatLng(37.29656425755971, 128.10891397144547),
            new kakao.maps.LatLng(37.29596115593188, 128.1087634558821),
            new kakao.maps.LatLng(37.29564206077995, 128.10868406781043),
            new kakao.maps.LatLng(37.28117126101853, 128.1098388508222),
            new kakao.maps.LatLng(37.28065811301964, 128.10988558183277),
            new kakao.maps.LatLng(37.28044208503452, 128.1100127810806),
            new kakao.maps.LatLng(37.27930828700356, 128.11039995186096),
            new kakao.maps.LatLng(37.27433647389337, 128.11499464745074),
            new kakao.maps.LatLng(37.27348627857043, 128.11459281119144),
            new kakao.maps.LatLng(37.272258484339396, 128.1166185236849),
            new kakao.maps.LatLng(37.27263854752035, 128.11739922943445),
            new kakao.maps.LatLng(37.27263348039387, 128.1180565775141),
            new kakao.maps.LatLng(37.27222171846795, 128.12140843121588),
            new kakao.maps.LatLng(37.27314401203433, 128.12234024194385),
            new kakao.maps.LatLng(37.274165308976, 128.12337183470888),
            new kakao.maps.LatLng(37.27506596081336, 128.12453592430862),
            new kakao.maps.LatLng(37.27515499171538, 128.1246778215039),
            new kakao.maps.LatLng(37.27391672295258, 128.16341471120046),
            new kakao.maps.LatLng(37.27446930842442, 128.1639136418826),
            new kakao.maps.LatLng(37.27621189661394, 128.1679746599289),
            new kakao.maps.LatLng(37.276788586372994, 128.16871218669556),
            new kakao.maps.LatLng(37.277382948857856, 128.16979671381404),
            new kakao.maps.LatLng(37.27791963596127, 128.17016403810524),
            new kakao.maps.LatLng(37.277714150184934, 128.17078520899818),
            new kakao.maps.LatLng(37.277788700195316, 128.17104850401935),
            new kakao.maps.LatLng(37.27795465468585, 128.1716349090845),
            new kakao.maps.LatLng(37.278448159342716, 128.17206817099898),
            new kakao.maps.LatLng(37.27850790729365, 128.17212054154038),
            new kakao.maps.LatLng(37.27852586659923, 128.17215429454797),
            new kakao.maps.LatLng(37.281732805224095, 128.1776923176258),
            new kakao.maps.LatLng(37.282447130296816, 128.17769075160652),
            new kakao.maps.LatLng(37.292822570889264, 128.1829689144539),
            new kakao.maps.LatLng(37.292901565346355, 128.18314988426172),
            new kakao.maps.LatLng(37.292764089495144, 128.18332640125846),
            new kakao.maps.LatLng(37.292359111750656, 128.18550570453982),
            new kakao.maps.LatLng(37.29283383785769, 128.18620704060214),
            new kakao.maps.LatLng(37.292843700379834, 128.1880883618023),
            new kakao.maps.LatLng(37.29314889217893, 128.1892131230116),
            new kakao.maps.LatLng(37.29612881763914, 128.19199375388186),
            new kakao.maps.LatLng(37.296675240722095, 128.19289647408755),
            new kakao.maps.LatLng(37.29727866361105, 128.1944570390065),
            new kakao.maps.LatLng(37.2973086382505, 128.19469575603503),
            new kakao.maps.LatLng(37.294781575205846, 128.1993599327097),
            new kakao.maps.LatLng(37.29428106522343, 128.19951798963652),
            new kakao.maps.LatLng(37.29340554770403, 128.20000629065873),
            new kakao.maps.LatLng(37.29335579710048, 128.20008127321722),
            new kakao.maps.LatLng(37.29332197755761, 128.2001120985461),
            new kakao.maps.LatLng(37.2929951494366, 128.20041245141275),
            new kakao.maps.LatLng(37.28988186390757, 128.2034507447285),
            new kakao.maps.LatLng(37.29001315015571, 128.20413577861532),
            new kakao.maps.LatLng(37.29013146837656, 128.20446187038007),
            new kakao.maps.LatLng(37.28993385497805, 128.20467932174958),
            new kakao.maps.LatLng(37.28030210494177, 128.21691642422664),
            new kakao.maps.LatLng(37.27952740057915, 128.21788982944696),
            new kakao.maps.LatLng(37.27855866808762, 128.21845526174107),
            new kakao.maps.LatLng(37.27848844164897, 128.21841184993673),
            new kakao.maps.LatLng(37.27827049937365, 128.21827732637283),
            new kakao.maps.LatLng(37.277574953484375, 128.217848194046),
            new kakao.maps.LatLng(37.277748067931974, 128.21716709215306),
            new kakao.maps.LatLng(37.277797458408045, 128.21688248330955),
            new kakao.maps.LatLng(37.277246224864285, 128.21654736409323),
            new kakao.maps.LatLng(37.27724744138956, 128.2165385667661),
            new kakao.maps.LatLng(37.277375121024, 128.21567527854074),
            new kakao.maps.LatLng(37.277242593754245, 128.215501924678),
            new kakao.maps.LatLng(37.27721830503315, 128.2153722296386),
            new kakao.maps.LatLng(37.275639151056616, 128.21275194383327),
            new kakao.maps.LatLng(37.275511219266924, 128.21168799098496),
            new kakao.maps.LatLng(37.24882300952156, 128.2077991896154),
            new kakao.maps.LatLng(37.21330869864068, 128.16404061938013),
            new kakao.maps.LatLng(37.23453731883652, 128.1253222362259),
            new kakao.maps.LatLng(37.20767154710672, 128.11150412572263),
            new kakao.maps.LatLng(37.18928064453194, 128.0372030644741),
            new kakao.maps.LatLng(37.244377768719026, 128.01921550149873),
            new kakao.maps.LatLng(37.25833428222974, 127.97989775097629),
            new kakao.maps.LatLng(37.225045283989196, 127.92158334234006),
            new kakao.maps.LatLng(37.188766865606546, 127.93625929439231),
            new kakao.maps.LatLng(37.165527345499584, 127.92632698583145),
            new kakao.maps.LatLng(37.151802295316635, 127.90163979865974),
            new kakao.maps.LatLng(37.16434397018086, 127.87205003660239),
            new kakao.maps.LatLng(37.14340827631528, 127.78952364442031),
            new kakao.maps.LatLng(37.171440833446205, 127.75552751965634),
            new kakao.maps.LatLng(37.211897403301336, 127.74452466055601),
            new kakao.maps.LatLng(37.2147885951135, 127.74657989932719),
            new kakao.maps.LatLng(37.26429197693787, 127.75944041376133),
            new kakao.maps.LatLng(37.29796777258437, 127.75069455729248),
            new kakao.maps.LatLng(37.29770528939074, 127.75177150902012),
            new kakao.maps.LatLng(37.30952714758468, 127.76814769673854),
            new kakao.maps.LatLng(37.36698133132699, 127.75966006234151),
            new kakao.maps.LatLng(37.367131888106734, 127.75954226312749),
            new kakao.maps.LatLng(37.424345517065944, 127.7945716230109),
            new kakao.maps.LatLng(37.424401637910066, 127.79455844362523),
            new kakao.maps.LatLng(37.43864051804396, 127.80046640153832),
            new kakao.maps.LatLng(37.439002558381155, 127.80134737750683),
            new kakao.maps.LatLng(37.446575494178916, 127.81983336721284),
            new kakao.maps.LatLng(37.425326124551404, 127.86394398233536),
            new kakao.maps.LatLng(37.46692082467384, 127.87698724126902),
            new kakao.maps.LatLng(37.478956102803686, 127.90750932583948),
            new kakao.maps.LatLng(37.479050621552254, 127.90744617348413),
            new kakao.maps.LatLng(37.45444193880544, 127.94930219450167),
            new kakao.maps.LatLng(37.45684202855888, 128.00262326453898),
            new kakao.maps.LatLng(37.42672734467313, 128.08423594773004),
            new kakao.maps.LatLng(37.40668743200872, 128.0972955818718),
            new kakao.maps.LatLng(37.37374102521341, 128.07678598497216),
            new kakao.maps.LatLng(37.35596406929321, 128.03918951249963),
            new kakao.maps.LatLng(37.308456049818815, 128.05197734315522),
            new kakao.maps.LatLng(37.29880426255525, 128.10856018737485)
        ];

        var polygon = new kakao.maps.Polygon({  // 지도에 표시할 다각형을 생성합니다
            path:polygonPath, // 그려질 다각형의 좌표 배열입니다
            strokeWeight: 3, // 선의 두께입니다
            strokeColor: '#FF3DE5', // 선의 색깔입니다
            strokeOpacity: 0.8, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
            strokeStyle: 'solid', // 선의 스타일입니다
            fillColor: '#FF8AEF', // 채우기 색깔입니다
            fillOpacity: 0.7 // 채우기 불투명도 입니다
        });
 
        polygon.setMap(map);  // 지도에 다각형을 표시합니다
       
       // ============================== 여행지 다각형2 부분 (폴리곤 : 경상남도 ) ====================================
        var polygon_test = [];
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from areaPolygon ";
            $result = mysqli_query($conn,$sql);
            
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
        ?>
                polygon_test.push(new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>));
        <?php
            $n++;
            }
        ?>

        var polygon_t = new kakao.maps.Polygon({  // 지도에 표시할 다각형을 생성합니다
            path:polygon_test, // 그려질 다각형의 좌표 배열입니다
            strokeWeight: 3, // 선의 두께입니다
            strokeColor: '#FF3DE5', // 선의 색깔입니다
            strokeOpacity: 0.8, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
            strokeStyle: 'solid', // 선의 스타일입니다
            fillColor: '#FF8AEF', // 채우기 색깔입니다
            fillOpacity: 0.7 // 채우기 불투명도 입니다
        });
        
        polygon_t.setMap(map);  // 지도에 다각형을 표시합니다\
    </script>


    </body>