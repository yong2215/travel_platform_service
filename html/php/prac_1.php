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
							<input style="background: rgba(255,255,255,0);" type="submit" value="?????? ?????????" >
                        </span>
                        
						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;">
							<a href="http://wodud2970.dothome.co.kr/mypage.html" target="_self">???????????????</a>
						</span>
						
						
						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;
							float:right;">
							<a href="https://www.naver.com/" target="_self" style="text-de;">????????????</a>
						</span>
					
						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-right: 15px;
							float:right;">
							<a href="file:///C:/Users/asdfg/Desktop/VS%20CODE/%EB%A1%9C%EA%B7%B8%EC%9D%B8/%EB%A1%9C%EA%B7%B8%EC%9D%B8.html" target="_self">?????????</a>
                        </span>
                        </form> 
                    <a href="for_map.php" class='f1'>
                        <li>?????????</li>
                    </a>
                    <a href="test_map.php" class='f1'>
                        <li'>????????????</li>
                    </a>
                    <a href="" class='f1'>
                        <li>???????????????</li>
                    </a>
                    
                </ul>
            </div>
        </div>
        <div id='wrapper'>
            <div id="map" 
            style="width:100%;
                height: 1000px;"></div>
            <ul class="container" style="background-color: rgba( 0, 0, 0, 0.5 );">
                <li><img class ="txt" src="./css/icon/start_x.png"><span class="title_x">: ????????? ?????????</span></li> 
                <li><div id ="explain">???????????? ???????????? ?????????????????? ???????????? ????????? ???????????????. ????????? ???????????? ???????????????. ????????? ???????????? ???????????????.</div></li>
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
    // ===== ?????? ???????????? ?????? =====
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(36.058284, 128.078422),
			level: 12
        };
		var map = new kakao.maps.Map(container, options);
        var clickedOverlay =null;
        
    // ===== ????????? ?????? ?????? =====
        var positions = []; // ????????? ????????? ????????? title ?????? ??????????????? 
        var applyList = [];
 
        <?php
            $temp1=$_POST['temp1'];
            $temp2=$_POST['temp2'];
            $temp3=$_POST['temp3'];
            $conn = mysqli_connect("dddlee1234.iptime.org","wodud2970","jy7950","wodud2970",8816);
            $sql ="select * from travel where addr like '%{$temp1}%' and tagname not like '%??????%' or addr like '%{$temp2}%' or addr like '%{$temp3}%' ";
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

        var imageSrc = "./css/icon/marker.png";  // ?????? ???????????? ????????? ???????????????
        var clickedOverlay = null;
        for (var i = 0; i < positions.length; i ++) {
           var data = positions[i];
           displayMarker(data);
        }

        function displayMarker(data){
             // ?????? ???????????? ????????? ?????? ?????????
             var imageSize = new kakao.maps.Size(25, 20); 
            
            // ?????? ???????????? ???????????????    
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
            
            // ????????? ???????????????
            var marker = new kakao.maps.Marker({
                map: map,                       // ????????? ????????? ??????
                position: data.latlng, // ????????? ????????? ??????
                image : markerImage, // ?????? ????????? 
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
            // close.innerHTML="??????";
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
                //Task??? ?????? ??? ??????
                var task = $("<div class='task'></div>").text($(this).val());
                
                //????????????
                var del = $("<i class='i_delete'></i>").click(function(){
                var p = $(this).parent();
                p.fadeOut(function(){
                    p.remove();
                })
                });
                
                //?????? ??????
                var check = $("<i class='i_check'></i>").click(function(){
                var p = $(this).parent();
                p.fadeOut(function(){
                    $(".done").append(p);
                    p.fadeIn();
                })
                $(this).remove();
            });
            
            //Task??? ?????? & ?????? ?????? ????????????
            task.append(del,check)
            
            //?????? ????????? ??????
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
            a.innerHTML="????????????"
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

        
        function makeOutListener(infowindow) {  // ?????????????????? ?????? ???????????? ????????? ??????????????? 
            return function() {
                infowindow.close();
            };
        }
        
        function closeOverlay() {// ????????? ??????????????? ?????? ?????? ???????????? ??????????????? 
            overlay.setMap(null);       
        }

    // ===== ?????? ?????? ?????? =====
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

        var imageSrc = "./css/icon/pizzamarker.png"; // ?????? ???????????? ????????? ???????????????
            
        for (var i = 0; i < positions_r.length; i ++) {
            // ?????? ???????????? ????????? ?????? ?????????
            var imageSize = new kakao.maps.Size(35, 30); 
            
            // ?????? ???????????? ???????????????    
            var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
            
            // ????????? ???????????????
            var marker = new kakao.maps.Marker({
                map: map,                       // ????????? ????????? ??????
                position: positions_r[i].latlng, // ????????? ????????? ??????
                title : positions_r[i].title, // ????????? ?????????, ????????? ???????????? ????????? ???????????? ???????????????
                image : markerImage, // ?????? ????????? 
            });
            // content.appendChild(closeBtn);
            // ????????? ????????? ?????????????????? ??????????????? 
            // var infowindow = new kakao.maps.InfoWindow({
            //     content: positions_r[i].content // ?????????????????? ????????? ??????
            // });
            var overlay = new kakao.maps.CustomOverlay({
                content: positions_r[i].content,
                map: map,
                position: marker.getPosition(),
                zIndex: 99999,
                clickable: true
                
            });     
            var clickedOverlay = null;
            // ????????? mouseover ???????????? mouseout ???????????? ???????????????
            // ????????? ??????????????? ???????????? ????????? ??????????????? 
            // for????????? ???????????? ????????? ?????? ????????? ????????? ???????????? ???????????? ???????????????
            // kakao.maps.event.addListener(marker, 'mouseover', makeOverListener(map, marker, infowindow));
            // kakao.maps.event.addListener(marker, 'mouseout', makeOutListener(infowindow));
            overlay.setMap(null);
            kakao.maps.event.addListener(marker, 'click', displayOverlay(map,overlay));
        }
  
        $(".m_botton").click(function(){   // Planner 
            alert($(this).val());
            //Task??? ?????? ??? ??????
            var task = $("<div class='task'></div>").text($(this).val());
            
            //????????????
            var del = $("<i class='i_check'></i>").click(function(){
            var p = $(this).parent();
            applyList.remove(p.title);
            p.fadeOut(function(){
                p.remove();
            })
            });
            
            //?????? ??????
            var check = $("<i class='i_delete'></i>").click(function(){
            var p = $(this).parent();
            applyList.add(p.title);
            p.fadeOut(function(){
                $(".done").append(p);
                p.fadeIn();
            })
            $(this).remove();
            });
            
            //Task??? ?????? & ?????? ?????? ????????????
            task.append(del,check)
            
            //?????? ????????? ??????
            $(".notdone").append(task);
            
        })

    // ===== ????????? ?????????1 ?????? =====
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
        
        var polygon1= new kakao.maps.Polygon({  // ????????? ????????? ???????????? ???????????????
            path:polygon1, // ????????? ???????????? ?????? ???????????????
            strokeWeight: 3, // ?????? ???????????????
            strokeColor: '#FF3DE5', // ?????? ???????????????
            strokeOpacity: 0.8, // ?????? ???????????? ????????? 1?????? 0 ????????? ????????? 0??? ??????????????? ???????????????
            strokeStyle: 'solid', // ?????? ??????????????????
            fillColor: '#FF8AEF', // ????????? ???????????????
            fillOpacity: 0.7 // ????????? ???????????? ?????????
        });
        
        polygon1.setMap(map);  // ????????? ???????????? ???????????????
       
    // ===== ????????? ?????????2 ?????? =====
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
            // ???????????? ??????????????? 
            var polygon = new kakao.maps.Polygon({
                map: map, // ???????????? ????????? ?????? ??????
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