<?php
if (is_array($_POST['list1']) || is_object($_POST['list1'])) {
    $list1 = $_POST['list1'];
    
    // foreach ($list1 as $list1){
        //     echo $list1."<br />";
        // }
        
    }
    
if (is_array($_POST['list3']) || is_object($_POST['list3'])){
    $list3 = $_POST['list3'];
}

$list2 = $_POST['list2'];

if (is_array($_POST['list4']) || is_object($_POST['list4'])){
    $list4 = $_POST['list4'];
}

?>


<?php 


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <link href="./css/index.css" rel='stylesheet' type="text/css"> -->
    <link href="./css/for_popup_map.css" rel='stylesheet' type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
</head>

<body onload='window.resizeTo(800,650)'>

    <div id="map" style="width:980px;height:730px;"></div>
    <p id="result"></p>

    <!-- <script src="./js/map.js" type="text/javascript"></script> -->
    <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=1cefd976ef733632b7a0f894d71c953a"></script>
    <script>
        var mapContainer = document.getElementById('map'); // 지도를 표시할 div 
        var mapCenter = new kakao.maps.LatLng(36.058284, 128.078422);
        var mapOption = {
            center: mapCenter, // 지도의 중심좌표
            level: 12 // 지도의 확대 레벨  
        };

        var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

        // 마커를 표시할 위치와 title 객체 배열입니다 
        var positions = [];
        // select * from (select * from rooms where tags like '%$list1[0]%' and tags like '%$list2%') T 
        // select * from rooms where tags like '%$list2%' and tags like '%$list1[0]%' and tags like '%$list3[0]%' and tags like '%$list4[0]%'
        
        // 강찬 조건문 첫 번째
        <?php
                
        if ((sizeof($list1) == 1)  && (sizeof($list3) == 1) && (sizeof($list4) == 1)){
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from rooms where tags like '%$list2%' and tags like '%$list1[0]%' and (tags like '%$list3[0]%' or tags like '%$list4[0]%' )";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['d_url'];
        

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
             var imageSize = new kakao.maps.Size(75, 70); 
            
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
                    p.fadeOut(function(){
                        p.remove();
                    })
                });
                
                //체크 버튼
                var check = $("<i class='i_check'></i>").click(function(){
                var p = $(this).parent();
	            applyList.push(task2);
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

        // 2. 3,4, 하나 1 두개

        <?php

        if ((sizeof($list1) == 2) && (sizeof($list3) === 1) && (sizeof($list4) === 1)){
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from rooms where tags like '%$list2%' and (tags like '%$list1[0]%' or tags like '%$list1[1]%') and (tags like '%$list3[0]%' or tags like '%$list4[0]%' )";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['d_url'];
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
                    }
                    ?>
                var imageSrc = "./css/icon/marker.png";  // 마커 이미지의 이미지 주소입니다
                var clickedOverlay = null;

                for (var i = 0; i < positions.length; i ++) {
                    var data = positions[i];
                    displayMarker(data);
                }

        // 3. 1,4 하나 3 두개
        <?php
        if ((sizeof($list1) === 1) && (sizeof($list3) === 2) && (sizeof($list4) === 1)) {
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from rooms where tags like '%$list2%' and tags like '%$list1[0]%' and (tags like '%$list3[1]%' or tags like '%$list3[0]%' or tags like '%$list4[0]%' )";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['d_url'];
        

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
                }
                ?>
                var imageSrc = "./css/icon/marker.png";  // 마커 이미지의 이미지 주소입니다
                var clickedOverlay = null;

                for (var i = 0; i < positions.length; i ++) {
                    var data = positions[i];
                    displayMarker(data);
                }


        // 4. 1,3 하나 4 두개
        <?php
        if ((sizeof($list1) === 1) && (sizeof($list3) === 1) && (sizeof($list4) === 2)) {
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from rooms where tags like '%$list2%' and tags like '%$list1[0]%' and (tags like '%$list4[1]%' or tags like '%$list3[0]%' or tags like '%$list4[0]%' )";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['d_url'];
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
                }
                ?>
                var imageSrc = "./css/icon/marker.png";  // 마커 이미지의 이미지 주소입니다
                var clickedOverlay = null;

                for (var i = 0; i < positions.length; i ++) {
                    var data = positions[i];
                    displayMarker(data);
                }


        // 5. 4 하나 3,1 두개
        <?php
        if ((sizeof($list1) === 2) && (sizeof($list3) === 2) && (sizeof($list4) === 1)){
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from rooms where tags like '%$list2%' and (tags like '%$list1[0]%' or tags like '%$list1[1]%') and (tags like '%$list3[1]%' or tags like '%$list3[0]%' or tags like '%$list4[0]%' )";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['d_url'];
        

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
                }
                ?>
                var imageSrc = "./css/icon/marker.png";  // 마커 이미지의 이미지 주소입니다
                var clickedOverlay = null;

                for (var i = 0; i < positions.length; i ++) {
                    var data = positions[i];
                    displayMarker(data);
                }


        // 6. 3 하나 1,4 두개

        <?php
        if ((sizeof($list1) === 2) && (sizeof($list3) === 1) && (sizeof($list4) === 2)) {
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from rooms where tags like '%$list2%' and (tags like '%$list1[0]%' or tags like '%$list1[1]%') and (tags like '%$list4[1]%' or tags like '%$list3[0]%' or tags like '%$list4[0]%' )";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['d_url'];

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
                }
                ?>
                var imageSrc = "./css/icon/marker.png";  // 마커 이미지의 이미지 주소입니다
                var clickedOverlay = null;

                for (var i = 0; i < positions.length; i ++) {
                    var data = positions[i];
                    displayMarker(data);
                }


        // 7. 1 하나 3,4 두개

        <?php

        if ((sizeof($list1) === 1) && (sizeof($list3) === 2) && (sizeof($list4) === 2)) {
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from rooms where tags like '%$list2%' and tags like '%$list1[0]%'  and (tags like '%$list4[1]%' or tags like '%$list3[0]%' or tags like '%$list3[1]%' or tags like '%$list4[0]%' )";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['d_url'];
        

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
                }
                ?>
                var imageSrc = "./css/icon/marker.png";  // 마커 이미지의 이미지 주소입니다
                var clickedOverlay = null;

                for (var i = 0; i < positions.length; i ++) {
                    var data = positions[i];
                    displayMarker(data);
                }

        // 8. 1 두개 3,4 두개

        <?php
        if ((sizeof($list1) === 2) && (sizeof($list3) === 2) && (sizeof($list4) === 2)){
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from rooms where tags like '%$list2%' and (tags like '%$list1[0]%' or tags like '%$list1[1]%') and (tags like '%$list4[1]%' or tags like '%$list3[0]%' or tags like '%$list3[1]%' or tags like '%$list4[0]%' )";
            $result = mysqli_query($conn,$sql);
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['d_url'];
        

        ?>
                
                positions.push({ 
                    title:'<?=$title?>',
                    addr:'<?=$addr?>',
                    url:'<?=$url?>',
                    latlng:new kakao.maps.LatLng(<?= $a; ?>, <?= $b; ?>)
                    });
                    
                <?
                    $n++;
                    }}
                ?>

                var imageSrc = "./css/icon/marker.png";  // 마커 이미지의 이미지 주소입니다
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


       
        var applyList = [];
        function displayMarker(data){
             // 마커 이미지의 이미지 크기 입니다
             var imageSize = new kakao.maps.Size(75, 70); 
            
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
            wrap.className="mp_wrap";

            var info = document.createElement('div');
            info.className="mp_info";

            wrap.appendChild(info); //wrap > info

            var title = document.createElement('div');
            title.className="mp_title";
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
            body.className="mp_body";
            info.appendChild(body); //info >body

            var ellipsis =document.createElement('div');
            ellipsis.className="mp_ellipsis1";
            ellipsis.innerHTML=data.addr
            body.appendChild(ellipsis); // body > ellipsis

            // var image =document.createElement('div');
            // image.className="mp_img";




                var desc =document.createElement('div');
                desc.className="mp_desc";
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
</body>

</html>