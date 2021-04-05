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
$lat = (int)$escaped['lat'];
$longt = (int)$escaped['logt'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="./css/index.css" rel='stylesheet' type="text/css">

    </head>
    <body>
        <div id="header">
            <div class="wrap">
                <h1 class="logo f1" alt="fourworker">
                    <a href="index.html">
                        <img src="./css/icon/forworker.png"style="width:auto; height:50.5px; margin-bottom:10px; padding:3px;" />
                    </a>
                </h1>
                <ul class="cate_list f1">
                    <a href="for_map.html" class=f1>
                        <li>목록</li>
                    </a>
                    <a href="" class=f1>
                        <li>목록</li>
                    </a>
                    <a href="" class=f1>
                        <li>목록</li>
                    </a>
                    <a href="" class=f1>
                        <li>목록</li>
                    </a>
                </ul>
            </div>
            <div class="wrap">
            <div class="head_right">
                <div class="team_name">팀장 천용재</div>
                <div class="team_name">조성후</div>
                <div class="team_name">강찬</div>
                <div class="team_name">임수민</div>
                <div class="team_name">박재영</div>
            </div>
            </div>
        </div>
        <div id="map" style="width:1000px;height:800px;"></div>
        <script src="./js/map.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=85e77b172a01a088909ebc1dae9608db"></script>
    <script>

		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(37.569918, 126.989755),
			level: 5
        };
        
		var map = new kakao.maps.Map(container, options);
        // 마커를 표시할 위치와 title 객체 배열입니다 
        var positions = [];
        
 
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from travel where addr like '서울%' and tagname not like '%음식%'";
            $result = mysqli_query($conn,$sql);
            
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];?>
                
                positions.push({ 
                    content: "<div><?=$title?></div>",
                    latlng:new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>)
                    });
                
                <?
            $n++;
            }
        ?>

        // 마커 이미지의 이미지 주소입니다
        var imageSrc = "marker.png"; 
            
        for (var i = 0; i < positions.length; i ++) {
            // 마커 이미지의 이미지 크기 입니다
            var imageSize = new kakao.maps.Size(25, 20); 
            
            // 마커 이미지를 생성합니다    
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
            
            // 마커를 생성합니다
            var marker = new kakao.maps.Marker({
                map: map, // 마커를 표시할 지도
                position: positions[i].latlng, // 마커를 표시할 위치
                title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
                image : markerImage // 마커 이미지 
            });
            // 마커에 표시할 인포윈도우를 생성합니다 
            var infowindow = new kakao.maps.InfoWindow({
                content: positions[i].content // 인포윈도우에 표시할 내용
            });

            // 마커에 mouseover 이벤트와 mouseout 이벤트를 등록합니다
            // 이벤트 리스너로는 클로저를 만들어 등록합니다 
            // for문에서 클로저를 만들어 주지 않으면 마지막 마커에만 이벤트가 등록됩니다
            kakao.maps.event.addListener(marker, 'mouseover', makeOverListener(map, marker, infowindow));
            kakao.maps.event.addListener(marker, 'mouseout', makeOutListener(infowindow));
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
        
       
	</script>


    </body>