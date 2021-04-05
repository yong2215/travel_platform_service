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
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        

    </head>
    <body>
    <div id="header">
            <div class="wrap">
                <h1 class="logo f1" alt="fourworker">
                    <a href="index.php">
                        <img src="./css/icon/logo.png" style="width:200px; height:120.5px; margin-bottom:10px; padding:3px;" />
                    </a>
                </h1>
                <ul class="cate_list f1" >
                    <a href="for_map.php" class='f1'>
                        <li style= 'margin-top : 20px;'>여행지</li>
                    </a>
                    <a href="test_map.php" class='f1'>
                        <li style= 'margin-top : 20px;'>플랜짜기</li>
                    </a>
                    <a href="" class='f1'>
                        <li style= 'margin-top : 20px;'>마이페이지</li>
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
        <div id='wrapper'>
            <div id="map" style="width:1000px;height:800px;"></div>
            <div class="container">
                <input type="text" placeholder="Add A Task" class ="txt"> 
      
                <div class="notdone"> 
                    <h3>To Do List</h3>
        
                </div>
      
                <div class="done"> 
                    <h3>Done</h3>

                </div>
                <button  value="test" class="m_botton" >clcik</button>
                
            </div>
            
        </div>
        
        <!-- <script>
         $(".txt").on("keyup",function(e){
  
            if(e.keyCode == 13 && $(".txt").val() != ""){
  
            //Task에 입력 값 넣기
            var task = $("<div class='task'></div>").text($(".txt").val());
                //삭제버튼
            var del = $("<img class='todo_logo' src='./css/icon/trash.png'>").click(function(){
            var p = $(this).parent();
            p.fadeOut(function(){
                p.remove();
            })
            });
            
            //체크 버튼
            var check = $("<img class='todo_logo' src='./css/icon/tick.png'>").click(function(){
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
            
            //입력 창 비우기
            $(".txt").val("");
        }
    })
        </script> -->
        <script src="./js/map.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=85e77b172a01a088909ebc1dae9608db"></script>
    <script>

		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(37.569918, 126.989755),
			level: 10
        };
        
		var map = new kakao.maps.Map(container, options);
        var clickedOverlay =null;
        // 마커를 표시할 위치와 title 객체 배열입니다 
        var positions = [];
        
 
        <?php
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from travel where addr like '%진주%' and tagname not like '%음식%'";
            $result = mysqli_query($conn,$sql);
            
            $n=1;
            while($row=mysqli_fetch_array($result)){
                $a=round((double)$row['lat'],6);
                $b=round((double)$row['longt'],6);
                $title=$row['title'];
                $addr=$row['addr'];
                $url=$row['url'];
                $id=$row['id']

        ?>
                
                positions.push({ 
                    content: 
            '<div class="m_wrap">' + 
            '    <div class="m_info">' + 
            '        <div class="m_title">' + 
            "           <?=$title?>"  + 
            '        </div>' + 
            '        <div class="m_body">' + 
            '            <div class="m_img">' +
            '                <button  value="<?=$title?>" class="m_botton" >clcik</button>' +
            '           </div>' + 
            '            <div class="m_desc">' + 
            '                <div class="m_ellipsis"><?=$addr?></div>' + 
            '                <div><a href="<?=$url?>" target="_blank" class="link">상세보기</a></div>' + 
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
        var imageSrc = "./css/icon/marker.png"; 
        var clickedOverlay = null;
        for (var i = 0; i < positions.length; i ++) {
            // 마커 이미지의 이미지 크기 입니다
            var imageSize = new kakao.maps.Size(25, 20); 
            
            // 마커 이미지를 생성합니다    
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
            
            // 마커를 생성합니다
            var marker = new kakao.maps.Marker({
                map: map,                       // 마커를 표시할 지도
                position: positions[i].latlng, // 마커를 표시할 위치
                image : markerImage, // 마커 이미지 
            });
            // content.appendChild(closeBtn);
            // 마커에 표시할 인포윈도우를 생성합니다 
            // var infowindow = new kakao.maps.InfoWindow({
            //     content: positions[i].content // 인포윈도우에 표시할 내용
            // });
            var overlay = new kakao.maps.CustomOverlay({
                content: positions[i].content,
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
            $sql ="select * from food where addr like '%진주%'";
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
            '            <div class="m_img">' +
            '                <button class="m_botton"  onclick="">' +
            '           </div>' + 
            '            <div class="m_desc">' + 
            '                <div class="m_ellipsis"><?=$addr?></div>' + 
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
        var imageSrc = "./css/icon/trash.png"; 
            
        for (var i = 0; i < positions_r.length; i ++) {
            // 마커 이미지의 이미지 크기 입니다
            var imageSize = new kakao.maps.Size(25, 20); 
            
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
            var del = $("<i class='icon ion-ios-trash'></i>").click(function(){
            var p = $(this).parent();
            p.fadeOut(function(){
                p.remove();
            })
            });
            
            //체크 버튼
            var check = $("<i class='icon ion-md-checkmark'></i>").click(function(){
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
            
    })
        
        
       
	</script>


    </body>