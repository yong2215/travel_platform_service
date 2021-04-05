<?php
$re = $_POST['array2'];
$re_2 = $_POST['num2'];
$re_3 = $_POST["from"];
$re_4 = $_POST['to'];
$temp1 = $_POST['temp1']; 
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
            background: url('./css/icon/group.png') no-repeat;
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
                <form name="formSend" action="test1.php" method="post">
                    <span><input class ="date" type="date" name="from" min="2020-01-01" max="2021-12-31"></span>
                    <span><input class ="date" type="date" name="to" min="2020-01-01" max="2021-12-31"></span>
                    <input type="hidden" name="array2" value="">
                    <input type="hidden" name="num2" value="1">
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
                </form>
                        <span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;">
							<input style="background: rgba(255,255,255,0);" type="submit" value="플랜 만들기" onclick="goForm2()">
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
    <div id="container_">
            <!-- <div id='map' style="width:100%;
            height: 1000px;"></div>    -->
        <div id="rvWrapper">
            <div id="roadview" style="width:100%;height:100%"></div>
            <!-- 로드뷰를 표시할 div 입니다  -->
            <div id="close" title="로드뷰닫기" onclick="closeRoadview()"><span class="img"></span></div>
        </div>
        <div id="mapWrapper">
            <div id="map" style="width:100%;height:100%"></div>
            <!-- 지도를 표시할 div 입니다 -->
            <div id="roadviewControl" onclick="setRoadviewRoad()"></div>
            <div class="category">
            <ul>
                <li id="restaurantMenu" onclick="changeMarker('restaurant')">
                    <span class="ico_comm ico_restaurant"style="background: url('./css/icon/pizza.png') no-repeat;background-size: cover;
    width: 50px;
    height: 100%;"></span> 맛집
                </li>
                <li id="gas_stationMenu" onclick="changeMarker('gas_station')">
                    <span class="ico_comm ico_gas_station" style="background: url('./css/icon/gas.png') no-repeat;background-size: contain;
    width: 40px;
    height: 100%;
    margin-left: 15px;
}"></span> 주유소
                </li>
                <li id="destinationMenu" onclick="changeMarker('destination')" type = "hidden">
                    <span class="ico_comm ico_destination"></span> 여행지
                </li>
            </ul>
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
                <form action="mypage.php" method="post" name="formSend2" >
                <input type="hidden" name="from2" value = "">
                <input type="hidden" name="to2" value = "">
                <input type="hidden" name="array" value="">
                <input type="button" class="gomypage" onclick="goForm()">
            </form>
            <ul>
        </div>
        <script src="./js/map.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=1cefd976ef733632b7a0f894d71c953a"></script>
    <script>
    // ===== myPage/test1 보내는 부분 =====
        function goForm(){
            form = document.formSend;
            form2 = document.formSend2;
            form2.array.value = applyList;
            form2.from2.value = form.from.value;
            form2.to2.value = form.to.value;
            form2.submit();
        }
       
        function goForm2(){
            form = document.formSend;
            form.array2.value = applyList;
            form.submit();
        }
    // ===== 지도의 중심을 잡는 부분 ===== 
        var overlayOn = false;  // 지도위에 로드뷰 오버레이가 추가된 상태 가지고 있을 변수
		var container_ = document.getElementById('container_');
        var mapWrapper = document.getElementById('mapWrapper');
        var mapContainer = document.getElementById('map');
        var rvContainer = document.getElementById('roadview');
        <?php
            $conn1 = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql1 ="select * from startMap where area like '%{$temp1}%'";
            $result1 = mysqli_query($conn1,$sql1); 
            while($row1=mysqli_fetch_array($result1)){
                $a1=(double)$row1['lat'];
                $b1=(double)$row1['longt'];
            }
        ?>
        var mapCenter = new kakao.maps.LatLng(<?= $a1; ?>, <?= $b1; ?>)
		var options = {
			center: mapCenter,
			level: 12
        };
		var map = new kakao.maps.Map(mapContainer, options);


    // ===== 마커 부분 ====
        var destinationPositions = [];
        var gas_stationPositions = [];
        // 주유소
        <?php
            $conn2 = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql2 ="select * from oil where addr like '%{$temp1}%'";
            $result2 = mysqli_query($conn2,$sql2);
            while($row2 = mysqli_fetch_array($result2)){
                $gas_lat = round((double)$row2['lat'],6);
                $gas_longt=round((double)$row2['longt'],6);
                
            ?>
            gas_stationPositions.push(
                    new kakao.maps.LatLng(<?= $gas_lat; ?>, <?= $gas_longt; ?>));
            <?php
            }
        ?>
        // 맛집
        var restaurantPositions = [];
        <?php
            $conn3 = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql3 ="select * from food where addr like '%{$temp1}%'";
            $result3 = mysqli_query($conn3,$sql3);
            while($row3 = mysqli_fetch_array($result3)){
                $res_lat = round((double)$row3['lat'],6);
                $res_longt=round((double)$row3['longt'],6);
            ?>
            restaurantPositions.push(
                    new kakao.maps.LatLng(<?= $res_lat; ?>, <?= $res_longt; ?>));
            <?php
            }
        ?>

        var markerImageSrc = './css/icon/group.png'; // 마커이미지의 주소입니다. 스프라이트 이미지 입니다
        destinationMarkers = [], // 여행지 마커 객체를 가지고 있을 배열입니다
        gas_stationMarkers = [], // 주유소 마커 객체를 가지고 있을 배열입니다
        restaurantMarkers = []; // 맛집 마커 객체를 가지고 있을 배열입니다


        createDestinationMarkers(); // 여행지 마커를 생성하고 여행지 마커 배열에 추가합니다
        createGas_stationMarkers(); // 주유소 마커를 생성하고 주유소 마커 배열에 추가합니다
        createRestaurantMarkers(); // 맛집 마커를 생성하고 맛집 마커 배열에 추가합니다
        changeMarker('destination'); // 지도에 여행지 마커가 보이도록 설정합니다    

        // 마커이미지의 주소와, 크기, 옵션으로 마커 이미지를 생성하여 리턴하는 함수입니다
        function createMarkerImage(src, size, options) {
            var markerImage = new kakao.maps.MarkerImage(src, size, options);
            return markerImage;
        }

        // 좌표와 마커이미지를 받아 마커를 생성하여 리턴하는 함수입니다
        function createMarker(position, image) {
            var marker = new kakao.maps.Marker({
                position: position,
                image: image
            });

            return marker;
        }

        // 여행지 마커를 생성하고 여행지 마커 배열에 추가하는 함수입니다
        function createDestinationMarkers() {

            for (var i = 0; i < destinationPositions.length; i++) {

                var imageSize = new kakao.maps.Size(22, 26),
                    imageOptions = {
                        spriteOrigin: new kakao.maps.Point(10, 0),
                        spriteSize: new kakao.maps.Size(36, 98)
                    };

                // 마커이미지와 마커를 생성합니다
                var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                    marker = createMarker(destinationPositions[i], markerImage);

                // 생성된 마커를 여행지 마커 배열에 추가합니다
                destinationMarkers.push(marker);
            }
        }

        // 여행지 마커들의 지도 표시 여부를 설정하는 함수입니다
        function setDestinationMarkers(map) {
            for (var i = 0; i < destinationMarkers.length; i++) {
                destinationMarkers[i].setMap(map);
            }
        }

        // 주유소 마커를 생성하고 주유소 마커 배열에 추가하는 함수입니다
        function createGas_stationMarkers() {
            for (var i = 0; i < gas_stationPositions.length; i++) {

                var imageSize = new kakao.maps.Size(22, 26),
                    imageOptions = {
                        spriteOrigin: new kakao.maps.Point(10, 36),
                        spriteSize: new kakao.maps.Size(36, 98)
                    };

                // 마커이미지와 마커를 생성합니다
                var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                    marker = createMarker(gas_stationPositions[i], markerImage);

                // 생성된 마커를 주유소 마커 배열에 추가합니다
                gas_stationMarkers.push(marker);
            }
        }

        // 주유소 마커들의 지도 표시 여부를 설정하는 함수입니다
        function setGas_stationMarkers(map) {
            for (var i = 0; i < gas_stationMarkers.length; i++) {
                gas_stationMarkers[i].setMap(map);
            }
        }

        // 맛집 마커를 생성하고 맛집 마커 배열에 추가하는 함수입니다
        function createRestaurantMarkers() {
            for (var i = 0; i < restaurantPositions.length; i++) {

                var imageSize = new kakao.maps.Size(22, 26),
                    imageOptions = {
                        spriteOrigin: new kakao.maps.Point(10, 72),
                        spriteSize: new kakao.maps.Size(36, 98)
                    };

                // 마커이미지와 마커를 생성합니다
                var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                    marker = createMarker(restaurantPositions[i], markerImage);

                // 생성된 마커를 맛집 마커 배열에 추가합니다
                restaurantMarkers.push(marker);
            }
        }

        // 맛집 마커들의 지도 표시 여부를 설정하는 함수입니다
        function setRestaurantMarkers(map) {
            for (var i = 0; i < restaurantMarkers.length; i++) {
                restaurantMarkers[i].setMap(map);
            }
        }

        // 카테고리를 클릭했을 때 type에 따라 카테고리의 스타일과 지도에 표시되는 마커를 변경합니다
        function changeMarker(type) {

            var destinationMenu = document.getElementById('destinationMenu');
            var gas_stationMenu = document.getElementById('gas_stationMenu');
            var restaurantMenu = document.getElementById('restaurantMenu');

            // 여행지 카테고리가 클릭됐을 때
            if (type === 'destination') {

                // 여행지 카테고리를 선택된 스타일로 변경하고
                destinationMenu.className = 'menu_selected';

                // 주유소와 맛집 카테고리는 선택되지 않은 스타일로 바꿉니다
                gas_stationMenu.className = '';
                restaurantMenu.className = '';

                // 여행지 마커들만 지도에 표시하도록 설정합니다
                setDestinationMarkers(map);
                setGas_stationMarkers(null);
                setRestaurantMarkers(null);

            } else if (type === 'gas_station') { // 주유소 카테고리가 클릭됐을 때

                // 주유소 카테고리를 선택된 스타일로 변경하고
                destinationMenu.className = '';
                gas_stationMenu.className = 'menu_selected';
                restaurantMenu.className = '';

                // 주유소 마커들만 지도에 표시하도록 설정합니다
                setDestinationMarkers(null);
                setGas_stationMarkers(map);
                setRestaurantMarkers(null);

            } else if (type === 'restaurant') { // 맛집 카테고리가 클릭됐을 때

                // 맛집 카테고리를 선택된 스타일로 변경하고
                destinationMenu.className = '';
                gas_stationMenu.className = '';
                restaurantMenu.className = 'menu_selected';

                // 맛집 마커들만 지도에 표시하도록 설정합니다
                setDestinationMarkers(null);
                setGas_stationMarkers(null);
                setRestaurantMarkers(map);
            }
        }
        var rv = new kakao.maps.Roadview(rvContainer);
        // 좌표로부터 로드뷰 파노라마 ID를 가져올 로드뷰 클라이언트 객체를 생성합니다 
        var rvClient = new kakao.maps.RoadviewClient();

        // 로드뷰에 좌표가 바뀌었을 때 발생하는 이벤트를 등록합니다 
        kakao.maps.event.addListener(rv, 'position_changed', function() {

            // 현재 로드뷰의 위치 좌표를 얻어옵니다 
            var rvPosition = rv.getPosition();

            // 지도의 중심을 현재 로드뷰의 위치로 설정합니다
            map.setCenter(rvPosition);

            // 지도 위에 로드뷰 도로 오버레이가 추가된 상태이면
            if (overlayOn) {
                // 마커의 위치를 현재 로드뷰의 위치로 설정합니다
                marker.setPosition(rvPosition);
            }
        });
        var clickedOverlay =null;

    // ===== 여행지 부분 ===== 
        var positions = [];
        var saveList = [];
        var applyList = [];
        <?php
            $temp1 = "울산";
        ?>
        if ('<?=$re;?>'.length > 0){
            saveList = '<?=$re;?>'.split(',');
            for (var i=0; i < saveList.length; i++){
                applyList.push(saveList[i]);
                // Task에 입력 값 넣기
                var addTask = $("<div class='task'></div>").text(applyList[i]);
                var addTask2 = applyList[i];
                //삭제버튼
                var del = $("<i class='i_delete'></i>").click(function(){
                    var p = $(this).parent();
                    for(var k = 0; k < applyList.length; k++){
                        if (applyList[k] == addTask2){
                            applyList.splice(k, 1);
                            break;
                        }               
                    }
                    p.fadeOut(function(){
                        p.remove();
                    })
                });
                addTask.append(del)
                $(".done").append(addTask);
            }
        }
        <?php
            $conn4 = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql4 ="select * from travel where addr like '%{$temp1}%' and tagname not like '%음식%' and title not like '%텔%'";
            $result4 = mysqli_query($conn4,$sql4);
            $n=1;
            while($row4=mysqli_fetch_array($result4)){
                $a4=round((double)$row4['lat'],6);
                $b4=round((double)$row4['longt'],6);
                $title4=$row4['title'];
                $addr4=$row4['addr'];
                $url4=$row4['url'];
            ?> 
                positions.push({ 
                    title:'<?=$title4?>',
                    addr:'<?=$addr4?>',
                    url:'<?=$url4?>',
                    latlng:new kakao.maps.LatLng(<?= $a4; ?>, <?= $b4; ?>)
                    });
            <?php
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

        // 마커 이미지를 생성합니다
        var markImage = new kakao.maps.MarkerImage(
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

        // 드래그가 가능한 마커를 생성합니다
        var marker = new kakao.maps.Marker({
            image: markImage,
            position: mapCenter,
            draggable: true
        });

        // 마커에 dragend 이벤트를 등록합니다
        kakao.maps.event.addListener(marker, 'dragend', function(mouseEvent) {

            // 현재 마커가 놓인 자리의 좌표입니다 
            var position = marker.getPosition();

            // 마커가 놓인 위치를 기준으로 로드뷰를 설정합니다
            toggleRoadview(position);
        });

        //지도에 클릭 이벤트를 등록합니다
        kakao.maps.event.addListener(map, 'click', function(mouseEvent) {

            // 지도 위에 로드뷰 도로 오버레이가 추가된 상태가 아니면 클릭이벤트를 무시합니다 
            if (!overlayOn) {
                return;
            }

            // 클릭한 위치의 좌표입니다 
            var position = mouseEvent.latLng;

            // 마커를 클릭한 위치로 옮깁니다
            marker.setPosition(position);

            // 클락한 위치를 기준으로 로드뷰를 설정합니다
            toggleRoadview(position);
        });

        // 전달받은 좌표(position)에 가까운 로드뷰의 파노라마 ID를 추출하여
        // 로드뷰를 설정하는 함수입니다
        function toggleRoadview(position) {
            rvClient.getNearestPanoId(position, 50, function(panoId) {
                // 파노라마 ID가 null 이면 로드뷰를 숨깁니다
                if (panoId == null) {
                    toggleMapWrapper(true, position);
                } else {
                    toggleMapWrapper(false, position);

                    // panoId로 로드뷰를 설정합니다
                    rv.setPanoId(panoId, position);
                }
            });
        }

        // 지도를 감싸고 있는 div의 크기를 조정하는 함수입니다
        function toggleMapWrapper(active, position) {
            if (active) {

                // 지도를 감싸고 있는 div의 너비가 100%가 되도록 class를 변경합니다 
                container_.className = '';

                // 지도의 크기가 변경되었기 때문에 relayout 함수를 호출합니다
                map.relayout();

                // 지도의 너비가 변경될 때 지도중심을 입력받은 위치(position)로 설정합니다
                map.setCenter(position);
            } else {

                // 지도만 보여지고 있는 상태이면 지도의 너비가 50%가 되도록 class를 변경하여
                // 로드뷰가 함께 표시되게 합니다
                if (container_.className.indexOf('view_roadview') == -1) {
                    container_.className = 'view_roadview';

                    // 지도의 크기가 변경되었기 때문에 relayout 함수를 호출합니다
                    map.relayout();

                    // 지도의 너비가 변경될 때 지도중심을 입력받은 위치(position)로 설정합니다
                    map.setCenter(position);
                }
            }
        }

        // 지도 위의 로드뷰 도로 오버레이를 추가,제거하는 함수입니다
        function toggleOverlay(active) {
            if (active) {
                overlayOn = true;

                // 지도 위에 로드뷰 도로 오버레이를 추가합니다
                map.addOverlayMapTypeId(kakao.maps.MapTypeId.ROADVIEW);

                // 지도 위에 마커를 표시합니다
                marker.setMap(map);

                // 마커의 위치를 지도 중심으로 설정합니다 
                marker.setPosition(map.getCenter());

                // 로드뷰의 위치를 지도 중심으로 설정합니다
                toggleRoadview(map.getCenter());
            } else {
                overlayOn = false;

                // 지도 위의 로드뷰 도로 오버레이를 제거합니다
                map.removeOverlayMapTypeId(kakao.maps.MapTypeId.ROADVIEW);

                // 지도 위의 마커를 제거합니다
                marker.setMap(null);
            }
        }

        // 지도 위의 로드뷰 버튼을 눌렀을 때 호출되는 함수입니다
        function setRoadviewRoad() {
            var control = document.getElementById('roadviewControl');

            // 버튼이 눌린 상태가 아니면
            if (control.className.indexOf('active') == -1) {
                control.className = 'active';

                // 로드뷰 도로 오버레이가 보이게 합니다
                toggleOverlay(true);
            } else {
                control.className = '';

                // 로드뷰 도로 오버레이를 제거합니다
                toggleOverlay(false);
            }
        }

        // 로드뷰에서 X버튼을 눌렀을 때 로드뷰를 지도 뒤로 숨기는 함수입니다
        function closeRoadview() {
            var position = marker.getPosition();
            toggleMapWrapper(true, position);
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
                
                // Task에 입력 값 넣기
                var task = $("<div class='task'></div>").text($(this).val());
                var task2 = $(this).val();
                applyList.push(task2);
                //삭제버튼
                var del = $("<i class='i_delete'></i>").click(function(){
                var p = $(this).parent();
                for(var k = 0; k < applyList.length; k++){
                    if (applyList[k] == task2){
                        applyList.splice(k, 1);
                        break;
                    }               
                }
                p.fadeOut(function(){
                    p.remove();
                })
                });
                
            
            //Task에 삭제 & 체크 버튼 추가하기
            task.append(del)
            
            //할일 목록에 추가
            $(".done").append(task);
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

    
        
    // ===== 근무지 다각형 부분 =====
        var polygonPath =[];

        <?php
        $conn5 = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
        $sql5 ="select * from areaPolygon where area like '%원주%'";
        $result5 = mysqli_query($conn5,$sql5);
        $n=1;
        while($row5=mysqli_fetch_array($result5)){
            $a5=round((double)$row5['lat'],6);
            $b5=round((double)$row5['longt'],6);
        ?>
            polygonPath.push(new kakao.maps.LatLng(<?= $a5; ?>, <?= $b5; ?>));        
        <?php
            $n++;
        }
        ?>
        var polygon = new kakao.maps.Polygon({  // 지도에 표시할 다각형을 생성합니다
            path:polygonPath, // 그려질 다각형의 좌표 배열입니다
            strokeWeight: 3, // 선의 두께입니다
            strokeColor: '#f70f0f', // 선의 색깔입니다
            strokeOpacity: 0.8, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
            strokeStyle: 'solid', // 선의 스타일입니다
            fillColor: '#f70f0f', // 채우기 색깔입니다
            fillOpacity: 0.7 // 채우기 불투명도 입니다
        });
 
        polygon.setMap(map);  // 지도에 다각형을 표시합니다
       
    // ===== 여행지 다각형 부분 =====
        var polygonPath1 =[];
        <?php
            $conn6 = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql6 ="select * from areaPolygon where area like '%{$temp1}%'";
            $result6 = mysqli_query($conn6,$sql6);
            $n=1;
            while($row6=mysqli_fetch_array($result6)){
                $a6=round((double)$row6['lat'],6);
                $b6=round((double)$row6['longt'],6);
            ?>
                polygonPath1.push(new kakao.maps.LatLng(<?= $a6; ?>, <?= $b6; ?>));        
            <?php
                $n++;
            }
        ?>

        var polygon1 = new kakao.maps.Polygon({  // 지도에 표시할 다각형을 생성합니다
            path:polygonPath1, // 그려질 다각형의 좌표 배열입니다
            strokeWeight: 3, // 선의 두께입니다
            strokeColor: '#004c80', // 선의 색깔입니다
            strokeOpacity: 0.8, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
            strokeStyle: 'solid', // 선의 스타일입니다
            fillColor: '#fff', // 채우기 색깔입니다
            fillOpacity: 0.7 // 채우기 불투명도 입니다
        });

        polygon1.setMap(map);  // 지도에 다각형을 표시합니다
       
    


    //
    </script>


    </body>