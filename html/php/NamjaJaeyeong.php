<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>다양한 이미지 마커 표시하기</title>
    <style>
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
            top: 10px;
            left: 10px;
            width: 150px;
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
    </style>
</head>

<body>
    <div id="mapwrap">
        <!-- 지도가 표시될 div -->
        <div id="map" style="width:100%;height:350px;"></div>
        <!-- 지도 위에 표시될 마커 카테고리 -->
        <div class="category">
            <ul>
                <li id="destinationMenu" onclick="changeMarker('destination')">
                    <span class="ico_comm ico_destination"></span> 여행지
                </li>
                <li id="gas_stationMenu" onclick="changeMarker('gas_station')">
                    <span class="ico_comm ico_gas_station"></span> 주유소
                </li>
                <li id="restaurantMenu" onclick="changeMarker('restaurant')">
                    <span class="ico_comm ico_restaurant"></span> 맛집
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=8a82319c51bf5bf38c752914a93d7637"></script>
    <script>
        var mapContainer = document.getElementById('map'), // 지도를 표시할 div  
            mapOption = {
                center: new kakao.maps.LatLng(37.498004414546934, 127.02770621963765), // 지도의 중심좌표 
                level: 3 // 지도의 확대 레벨 
            };

        var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

        // 여행지 마커가 표시될 좌표 배열입니다
        var destinationPositions = [
            new kakao.maps.LatLng(37.499590490909185, 127.0263723554437),
        ];

        // 주유소 마커가 표시될 좌표 배열입니다
        var gas_stationPositions = [
            new kakao.maps.LatLng(37.497535461505684, 127.02948149502778),
        ];

        // 맛집 마커가 표시될 좌표 배열입니다
        var restaurantPositions = [
            new kakao.maps.LatLng(37.49966168796031, 127.03007039430118),
        ];

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
    </script>
</body>

</html>