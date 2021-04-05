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
        <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=85e77b172a01a088909ebc1dae9608db"></script>
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
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from travel where addr like '%진주시%' and tagname not like '%음식%' or addr like '%통영시%' or addr like '%창원시%' ";
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
                alert($(this).val());
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



        // public class chan{
        //     private String id;

        //     putblic String getId(){
        //         return id;
        //     }

        //     public void setId(String s){
        //         id = s;
        //     }
        // }
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
        
        
       
	</script>


    </body>