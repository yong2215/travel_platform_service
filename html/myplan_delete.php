
<?php
$id = $_POST['id'];
$id=(int)$id;
$conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
$sql ="delete from myPage where id={$id}";
$result = mysqli_query($conn,$sql);

?>

<?php
$id = $_POST['id'];
$id=(int)$id;
$conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
$sql ="delete from myPage where id={$id}";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mypage</title>
    <link rel='stylesheet' href="css/mypage.css">
    <link rel='stylesheet' href="css/for_roadview.css">
    <link rel='stylesheet' href="css/myplan.css">
    <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=1cefd976ef733632b7a0f894d71c953a"></script>
    <style>
    .title_x{
                font-family: "NotoSansKR";
            }
    .m_desc{
        margin: 0 0 0 60px;
    }
            /* #mapContainer {
            overflow: hidden;
            height: 860px;
            position: relative;
            } */
            
            #container_ {
            overflow: hidden;
            height: 500px;
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
            #search{
                background:url(./css/icon/go_travel.png);
                background-repeat:no-repeat;
                width: 144px;
    height: 44px;
    border-radius: 22px;
    float: right;
    margin-right: 60px;
    background-size: cover;
            }
            #search1{
                background:url(./css/icon/re.png);
                background-repeat:no-repeat;
                width: 144px;
    height: 44px;
    border-radius: 22px;
    float: right;
    margin-right: 60px;
    background-size: cover;

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
            .plan_child{
                flex:1;
            }
            .plan_img{
                width: 144px;
    height: 44px;
    border-radius: 22px;
    margin-bottom: 10px;
    margin-top: 5px;
            }
            .white_box{
                width: 441px;
  height: 44px;
  border-radius: 22px;
  background-color: #ffffff;
  margin-bottom: 10px;
    margin-top: 5px;

            }
            .big_white{
                width: 441px;
    height: 300px;
    border-radius: 22px;
    background-color: #ffffff;
    max-height: 300px;
    padding: 20px;
    margin-bottom: 10px;
    overflow:auto;
            }
            .plan_title{
                width:auto;
            }
            .head_string{
        font-size:25px;
    }
    ul.big_white li, ol.big_white li {
    padding: 5px 0px 5px 5px;
    margin-bottom: 5px;
    border-bottom: 1px solid #efefef;
    font-size: 12px;
}
    .plan_del{
        float:right;
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


        <div class="mypage_area" style="height: 700px;">
            <img src='css/icon/bgb_60.png' alt="">

            <div class="wrap">
                <ul class="cate_list f3">
                    <a href="mypage.php" class=f3>
                        <li>저장</li>
                    </a>
                    <a href="myplan.php" class=f3-save>
                        <li>여행일정</li>
                    </a>
                    <a href="myreview.php" class=f3>
                        <li>리뷰</li>
                    </a>
                    <a href="mywallet.php" class=f3>
                        <li>내지갑</li>
                    </a>
                </ul>
            </div>
            <script>
                positions=[];
            </script>
            <div class="clear"></div>
            <div class="plan_wrapper"style="display:flex;">

            <div class="plan_child" id='first'style="flex:0.3">
            <div style="margin-left: 50px;">
            <div>
            <img class="plan_img" src="./css/icon/plan_title.png">
            </div>
                <div>
            <img class="plan_img" src="./css/icon/plan_date.png">
            </div>
            <div>
            <img class="plan_img" src="./css/icon/plan_see.png">
            </div>
            <div>
            <form action="my_all_delete.php" method='post'>
            <input type="submit"    id="search1"value="">
            </form>
            </div>
            </div>
            </div>
            <div class="plan_child" id='second'>
            <div style="margin-left:50px;">
            <?php
             $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
             $sql ="select * from myPage where user_id = 1";
             $result = mysqli_query($conn,$sql);
             $row=mysqli_fetch_array($result);
             $sdate=$row['sDate'];
             $edate=$row['eDate'];
            ?>
            <!-- 타이틀-->
            <form name = 'formPost' method='post'action="myreview.php">
            <input class="white_box" type="text" name="titleValue"placeholder="여행 제목을 입력하세요.">
            </form>
            
            <!-- 여행 기간 -->
            <div class="white_box" style="padding:10px"><?=$sdate?>~<?=$edate?></div>
            <!--리스트 목록 -->
            <ul class='big_white'>
            <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from myPage where user_id = 1";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
                $title=$row['des'];
                $edate=$row['eDate'];
                $sdate=$row['sDate'];
                $id = $row['id'];
            $title_conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $title_sql = "select * from travel where title ='{$title}'";
            $title_result=mysqli_query($title_conn,$title_sql);
            $title_row = mysqli_fetch_array($title_result);
            // $title_result[''] 이제 여기서 title에 관한 정보를 받을 수 있다.
            
            $lat=$title_row['lat'];
            $longt=$title_row['longt'];
            $url=$title_row['url'];
            $title=$title_row['title'];
            $add=$title_row['addr'];
            
            ?>
           
            <script>
            positions.push({
                url:'<?=$url?>',
                title:'<?=$title?>',
                addr:'<?=$add?>',
                latlng:new kakao.maps.LatLng(<?= $lat; ?>, <?= $longt; ?>)
            });
            </script>
            <form action="myplan_delete.php" method="post">
            <input type='hidden' name ='id' value='<?=$id?>'>
            <li class=plan_title><?=$title?><a href="<?=$url?>" class =plan_url>상세보기</a><input class="plan_del" type="submit" value="삭제"></li>
            </form>

            <?php
            }
            ?>
            </ul>
            <div>
            <form action="myreview.php" method='post'name="formPost2">
                <input type="hidden" name='titleValue2' >
                <input type="hidden"  name="sdate" value='<?=$sdate?>'>
                <input type="hidden"  name="edate" value='<?=$edate?>'>
                <button  id="search"  value="" onclick="gogo()">
            </form>
            <script>
            // form plan_name
            function gogo(){
                form = document.formPost;
                form2 = document.formPost2;
                form2.titleValue2.value = form.titleValue.value;
                form2.submit();
            }
            </script>
            
            </div>
            </div>
                </div><!--plan_child-->

            <div class='plan_child'style="flex:2">
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
                                            <span class="ico_comm ico_restaurant"></span> 맛집
                                        </li>
                                        <li id="gas_stationMenu" onclick="changeMarker('gas_station')">
                                            <span class="ico_comm ico_gas_station"></span> 주유소
                                        </li>
                                        <li id="destinationMenu" onclick="changeMarker('destination')" type = "hidden">
                                            <span class="ico_comm ico_destination"></span> 여행지
                                        </li>
                                    </ul>
                                </div>
                            </div>
            </div> <!-- container -->
            </div> <!-- plan_child -->




            
            <script>
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
        // var rvContainer = document.getElementById('roadview'); //로드뷰를 표시할 div 입니다

        
		var map = new kakao.maps.Map(mapContainer, options);
        // ===== 마커를 찍는 부분 =====
        // 여행지 마커가 표시될 좌표 배열입니다
        var destinationPositions = [];
        // 여행지 마커 넣기 
        // 주유소 마커가 표시될 좌표 배열입니다
        var gas_stationPositions = [];
        //주유소 마커 
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from oil where addr like '%울산%'";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
                $gas_lat = round((double)$row['lat'],6);
                $gas_longt=round((double)$row['longt'],6);
            ?>
            gas_stationPositions.push(
                    new kakao.maps.LatLng(<?= $gas_lat; ?>, <?= $gas_longt; ?>));
            <?
            }
        ?>

        // 맛집 마커가 표시될 좌표 배열입니다
        var restaurantPositions = [];
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from food where addr like '%울산%' ";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
                $res_lat = round((double)$row['lat'],6);
                $res_longt=round((double)$row['longt'],6);
            ?>
            restaurantPositions.push(
                    new kakao.maps.LatLng(<?= $res_lat; ?>, <?= $res_longt; ?>));
            <?
            }
        ?>

        var markerImageSrc = 'https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/category.png'; // 마커이미지의 주소입니다. 스프라이트 이미지 입니다
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
        // 마커를 표시할 위치와 title 객체 배열입니다 
     
 
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


        var applyList = [];
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

            </script>


            </div>
        </div>


    </div>


</body>

</html>