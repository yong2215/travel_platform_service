<!DOCTYPE HTML>
<!--
	Visualize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>트래블 핏짜</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main_1.css" />
		<style>
		option{
    		color: black; 
		}
		.date{
			color:black;
		}6
		</style>
		<script type="text/javascript">
			function oneCheckbox(a){
				var obj = document.getElementsByName("checkbox1");
				for(var i=0; i<obj.length; i++){
					if(obj[i] != a){
						obj[i].checked = false;
					}
				}
			}

            function showPopup(){

                var pop_title="popupOpener"
                window.open('', pop_title,"width=1200,height=900,left=100,top=50");

                var choice = document.choice;
                choice.target = pop_title;
                choice.action = "popup_map.php";


                choice.submit();
            }

			var maxChecked = 2;   //선택가능 갯수
			var totalChecked1 = 0; 
			var totalChecked2 = 0;
			var totalChecked3 = 0;// 설정 끝

			function CountChecked1(field) {
				if (field.checked)
					totalChecked1 += 1;
				else
					totalChecked1 -= 1;

				if (totalChecked1 > maxChecked) {
					alert ("최대 2개 까지만 가능합니다.");
				field.checked = false;
				totalChecked1-= 1;
				}
			
			}
			function CountChecked2(field) {
				if (field.checked)
					totalChecked2 += 1;
				else
					totalChecked2 -= 1;

				if (totalChecked2 > maxChecked) {
					alert ("최대 2개 까지만 가능합니다.");
				field.checked = false;
				totalChecked2 -= 1;
				}
			
			}
			function CountChecked3(field) {
				if (field.checked)
					totalChecked3 += 1;
				else
					totalChecked3 -= 1;

				if (totalChecked3 > maxChecked) {
					alert ("최대 2개 까지만 가능합니다.");
				field.checked = false;
				totalChecked3 -= 1;
				}
			
			}

			function ResetCount(){
				totalChecked = 0;
			}

</script>

	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">
				<div class = "nav">
					<h1 style="
						margin-right: 10px;
						padding-top: -10px;
						/* cursor: pointer; */
						float: left;" 
						alt="Forworker">
								<img src="images/travelpizza.png"style="width:200px;  margin-bottom:10px; padding:1px;" />
					</h1>
					<div style="padding-top: 30px;">
                        <span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-left: 20px;">
							<a href=" " target="_self" style="font-size:25px;">여행지</a>
						</span>    

                        <span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-left: 20px;">
							<a href="test2.php" target="_self" style="font-size:25px;">플랜짜기</a>
						</span>

						<span style="height: 62px;
							line-height: 62px;
							font-family: 'NanumSquare', sans-serif;
							font-size: 15px;
							font-weight: bold;
							margin-left: 20px;">
							<a href="http://travel4worker.dothome.co.kr/mypage.php" target="_self" style="font-size:25px;">마이페이지</a>
                        </span>
                        
					</div>	
                
                
                
                
                
                
                
                
                </div>
				


                




				
				<!-- Header -->
					<header id="header">
                         <!-- Header -->
               <header id="header" style="padding: 3em 0 4em 0;">
                        <ul class="icons">
							<li><a href="https://twitter.com/Kor_Visitkorea?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target = "_blank" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://ko-kr.facebook.com/9suk9suklive/" target= "_blank" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/kto9suk9suk/?hl=ko" target = "_blank" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://www.youtube.com/channel/UCmm0wblRTNgKFpqkyEjaKYQ" target="_blank" class="icon style2 fa-youtube"><span class="label">500px</span></a></li>
							<li><a href="http://vacation.benepia.co.kr/" target = "_blank" class="icon style2 fa-plane"><span class="label">Email</span></a></li>
						</ul>
                    <!-- 여기서부터 강찬 코드 -->
					<form name='choice' id='choice' method="post">	
                     <div style = " width : 950px; height :252px;border-radius: 22px;background-color: rgba(0,0,0,0.3); margin: 0px 10%;">
                        <div style="height :50px;">
                           <div style = "width : 80%; margin-left : 10%; padding-top:30px">   
                              <div style="float : left; height :40.59px; margin-right : 24px;">숙소는 ?  </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id="box1" type ="checkbox" onclick="CountChecked1(this)" name="list1[]" value= "호텔"><label for="box1" > 호텔</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id="box2" style="normal" type ="checkbox" onclick="CountChecked1(this)" name="list1[]" value= "한옥"> <label for="box2" >한옥</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id="box3" style="normal" type ="checkbox" onclick="CountChecked1(this)" name="list1[]" value= "펜션"><label for="box3"> 펜션</label>
                              </div>
                              <div style="width :140px; float: left; margin-top:4px;">
                                 <input id="box4" style="normal" type ="checkbox" onclick="CountChecked1(this)" name="list1[]" value= "게스트하우스"> <label for="box4">게스트하우스</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id="box5" style="normal" type ="checkbox" onclick="CountChecked1(this)" name="list1[]" value= "모텔"> <label for="box5">모텔</label>
                              </div>
                              <div style="width:100px; float: left; margin-top:4px;">
                                 <input id="box6"style="normal" type ="checkbox" onclick="CountChecked1(this)" name="list1[]" value= "호스텔"> <label for="box6">호스텔</label>
                              </div>
                           </div>
                        </div>
                        <div style="height :50px;">
                           <div style = "width : 80%; margin-left : 10% ; padding-top:30px">   
                              <div style="float : left; height :40.59px; margin-right : 24px;"> 누구와 ?  </div>
                              <div style="width:80px; height : 40.59px; float: left; margin-top:4px;">
                                 <input id='box7' style="normal" type ="checkbox" value= "가족" name="list2" onclick="oneCheckbox(this)" > <label for="box7">가족</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id='box8' style="normal" type ="checkbox" value= "커플" name="list2" onclick="oneCheckbox(this)"> <label for="box8">연인</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id='box9' style="normal" type ="checkbox" value= "친구" name="list2" onclick="oneCheckbox(this)"><label for="box9"> 친구</label>
                              </div>
                              <div style="width :120px; float: left; margin-top:4px;">
                                 <input id='box10' style="normal" type ="checkbox" value= "반려" name="list2" onclick="oneCheckbox(this)"><label for="box10"> 반려동물</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id='box11' style="normal" type ="checkbox" value= "혼자" name="list2" onclick="oneCheckbox(this)"><label for="box11"> 혼자</label>
                              </div>

                           </div>
                        </div>   
                        <div style="height :50px;">
                           <div style = "width : 80%; margin-left : 10% ; padding-top:30px">   
                              <div style="float : left; height :40.59px; margin-right : 24px;"> 무엇을 ?  </div>
                              <div style="width:80px; height : 40.59px; float: left; margin-top:4px;">
                                 <input id='box12' style="normal" type ="checkbox" onclick="CountChecked2(this)" name="list3[]" value= "산책"><label for="box12"> 산책</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id='box13' style="normal" type ="checkbox" onclick="CountChecked2(this)" name="list3[]" value= "바다"> <label for="box13">바다</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id='box14' style="normal" type ="checkbox" onclick="CountChecked2(this)" name="list3[]" value= "스파"> <label for="box14">스파</label>
                              </div>
                              <div style="width :100px; float: left; margin-top:4px;">
                                 <input id='box15' style="normal" type ="checkbox" onclick="CountChecked2(this)" name="list3[]" value= "수영장"> <label for="box15">수영장</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id='box16' style="normal" type ="checkbox" onclick="CountChecked2(this)" name="list3[]" value= "계곡"> <label for="box16">계곡</label>
                              </div>
                              <div style="width :80px; float: left; margin-top:4px;">
                                 <input id='box17' style="normal" type ="checkbox" onclick="CountChecked2(this)" name="list3[]" value= "야경"> <label for="box17">야경</label>
                              </div>
                              <div style="width:150px; float: left; margin-top:4px;">
                                 <input id='box18' style="normal" type ="checkbox" onclick="CountChecked2(this)" name="list3[]" value= "관광명소근처"><label for="box18"> 관광명소 근처</label>
                              </div>
                           </div>
                        </div>         
                        <div style="height :50px;">
                           <div style = "width : 85%; margin-left : 10% ; padding-top:30px">   
                              <div style="float : left; height :40.59px; margin-right : px;"> 필요한 건 ?  </div>
                              <div style="width:160px; height : 40.59px; float: left; margin-top:4px;">
                                 <input id='box19' style="normal" type ="checkbox" onclick="CountChecked3(this)" name="list4[]" value= "대중교통|픽업"> <label for="box19">대중교통/픽업</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id='box20' style="normal" type ="checkbox" onclick="CountChecked3(this)" name="list4[]" value= "취사"> <label for="box20">취사</label>
                              </div>
                              
                              <div style="width :100px; float: left; margin-top:4px;">
                                 <input id='box21' style="normal" type ="checkbox" onclick="CountChecked3(this)" name="list4[]" value= "자전거"><label for="box21"> 자전거</label>
                              </div>
                              <div style="width:80px; float: left; margin-top:4px;">
                                 <input id='box22' style="normal" type ="checkbox" onclick="CountChecked3(this)" name="list4[]" value= "독채"><label for="box22"> 독채</label>
                              </div>
                              <div style="width :80px; float: left; margin-top:4px;">
                                 <input id='box23' style="normal" type ="checkbox" onclick="CountChecked3(this)" name="list4[]" value= "칭찬"><label for="box23"> 칭찬</label>
                              </div>
                              <div style="width:120px; float: left; margin-top:4px;">
                                 <input id='box24' style="normal" type ="checkbox" onclick="CountChecked3(this)" name="list4[]" value= "편의시설"> <label for="box24">편의시설</label>
                              </div>
                           </div>
                        </div>
                        <!-- <input type="image"style="height: 55px;width: 55px;margin-bottom: -20px;"class = 'search_icon' src="./css/icon/lenz.png" alt="Submit Form" /> -->
                     </div>
                     </form>
                     <input type="image" name="button" src="./css/icon/plan_make2.png" onclick="showPopup();" style="margin-bottom:10px;    height: 50px;">
                           
                  
                
                        <!-- 여기까지... -->
                        <!-- <input type="image"style="height: 55px;width: 55px;margin-bottom: -20px;"class = 'search_icon' src="./css/icon/lenz.png" onclick='showPopup()' /> -->
                  
				  
				        <!-- 여기까지... -->
						
						<!-- <div style="  margin-left : 180px;text-align :center;  -->
							<!-- font-family: 'NanumSquare', sans-serif; -->
							<!-- font-size: 30px; -->
							<!-- font-weight: bold;"> -->
								<!-- 어디로 여행을 가시나요? -->
						<!-- </div> -->
						<!-- <br/> -->

						<!-- <input type="submit" value="search"> -->
						<!-- <form method="get" action="bupper_area.php" > -->
							<!-- <div>	 -->
							<!-- <input style=" -->
							<!-- width: 750px; -->
							<!-- /* height: 50px; */ -->
							<!-- font-size: 20px; -->
							<!-- margin: auto; -->
							<!-- top: -18px;" -->
							<!-- type="text" placeholder="Search" -->
							
							<!-- style = " -->
							<!-- background: #343a40 url(images/search.png) top right no-repeat; -->
							<!-- width: 100%; -->
							<!-- height: 30px; -->
							<!-- box-sizing: border-box; -->
							<!-- outline: none; -->
							<!-- border-radius: 3px;"name="area"> -->
							<!-- <input type="submit" value="search"> -->
                            <!-- <input type="image"style="height: 55px; -->
    <!-- width: 55px; -->
    <!-- margin-bottom: -20px;"class = 'search_icon' src="./css/icon/lenz.png" alt="Submit Form" /> -->
	                        <!--이거 바꿔야함 인풋값으로-->
								<!-- <img src="images/search.png" alt="" style="height: 42px; width: 42x;"></img>  -->
							<!-- </div>						 -->
						<!-- </form> -->
						
						<br>
						<br>
						<div>
							
						<hr>
						<div style="font-family: 'NanumSquare', sans-serif;
							font-size: 30px;
							font-weight: bold;
							margin-bottom: 10px;">인기 여행 콘텐츠 Top3</div>
							<br>
							<br>
						<div>
						<a href="https://korean.visitkorea.or.kr/detail/rem_detail.do?cotid=a8348e52-6006-48a4-98d7-ece168ffa2df&con_type=10000&temp=" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 30px;">
								<span style ="
									background-image: url(images/top/001.jpg);
									border-radius: 100%;
									display: block;
									width: 15em;
									height:15em;">
									<span style = "position: relative; top: 80px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;"><strong>Top 1</strong><br>구석구석 안전한 여름휴가를<br>부탁해!
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/rem_detail.do?cotid=f11c4d65-04e4-44c9-9c76-9bf4cae317b7&con_type=11700&temp=" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 30px;">
								<span style ="
									background-image: url(images/top/002.jpg);
									border-radius: 100%;
									display: block;
									width: 15em;
									height:15em;">
									<span style = "position: relative; top: 80px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;"><strong>Top 2</strong><br>외국감성 폭발하는<br>국내여행지
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/rem_detail.do?cotid=8e982de7-a8bc-4d05-8ca6-294189f3986c&con_type=10000&temp=" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 30px;">
								<span style ="
									background-image: url(images/top/003.jpg);
									border-radius: 100%;
									display: block;
									width: 15em;
									height:15em;">
									<span style = "position: relative; top: 80px; font-family: 'NanumSquare', sans-serif;
												font-size: 18px;
												font-weight: bold;"><strong>Top 3</strong><br>화려한 조명이 나를 감싸는<br>야간관광 100선!
									</span>
								</span>
							</span>
						</a>
					</div>
					<br>
					<hr>
					<div>
						<div style="font-family: 'NanumSquare', sans-serif;
							font-size: 30px;
							font-weight: bold;
							margin-bottom: -50px;">T-map 추천 8월 인기여행지
						</div>
						<br>
						<br>
						<br>
						<br>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=60ad68a9-2222-4558-96d7-7f0b44736aef&big_category=A01&mid_category=A0101&big_area=32" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/t-map/t001.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">강릉 경포 해수욕장
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=6e03a5b1-51f6-4679-a0e1-2a61f395c4c8&big_category=A01&mid_category=A0101&big_area=31" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/t-map/t002.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">광명 동굴
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=2116b628-ded9-42c2-b17e-99d17b5b65e4&big_category=A02&mid_category=A0201&big_area=6" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/t-map/t003.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">해동 용궁사
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=d79e9827-abf3-44b3-bc01-afd1ddd04017&big_category=A02&mid_category=A0201&big_area=36" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/t-map/t004.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">독일 마을
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=78a00ac3-ad3c-4637-8629-48aefb22a79b&big_category=A02&mid_category=A0202&big_area=1" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/t-map/t005.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">롯데월드
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=12e3b8dc-81ad-44e7-87af-ffd9adb412d6&big_category=A01&mid_category=A0101&big_area=32" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/t-map/t006.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">속초 해변
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=2a242f43-4a4d-4836-a17a-abcb34d0e9bc&big_category=A02&mid_category=A0202&big_area=1" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/t-map/t007.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">한강 시민공원
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=0363da87-ef3b-4c21-8508-34f70dda31fb&big_category=A02&mid_category=A0206&big_area=1" target="-self">	
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/t-map/t008.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">국립 중앙 박물관
									</span>
								</span>
							</span>
						</a>
						<br>
						<span style = "position: relative; font-family: 'NanumSquare', sans-serif; font-size: 22px;">
							<a href="https://www.naver.com/" target="_self">더 보기</a>
						</span>
					</div>
					<hr>
					<div>
						<div style="font-family: 'NanumSquare', sans-serif;
							font-size: 30px;
							font-weight: bold;
							margin-bottom: -50px;">SNS 인기 여행지
						</div>
						<br>
						<br>
						<br>
						<br>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=1426241f-6098-44e5-bad4-1adcf64c79ff&big_category=A02&mid_category=A0201&big_area=35" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sns/s001.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">가실성당
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=8cee706e-3a29-4170-bb69-bb91ebb3514f&big_category=A01&mid_category=A0101&big_area=35" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sns/s002.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">관음도
									</span>
								</span>
							</span>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=c58680b5-e48b-4e92-9255-43794b7aa93e&big_category=A01&mid_category=A0101&big_area=34" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sns/s003.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
													font-size: 18px;
													font-weight: bold;">당진 삽교호
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=2117bd9b-c0a4-411e-802d-a71e8e8b122e&big_category=A01&mid_category=A0101&big_area=3" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sns/s004.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">상소동 산림욕장
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=161ed76a-b7d9-4727-86f6-20ea3249deca&big_category=A02&mid_category=A0205&big_area=36" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sns/s005.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">시선대 전망대
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=dd955e6c-923e-4140-b3e4-903356060a7d&big_category=A02&mid_category=A0205&big_area=2" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sns/s006.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">인천대교
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=ae491430-3bfe-4156-88ba-88bb17477423&big_category=A01&mid_category=A0101&big_area=6" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sns/s007.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">절영해안산책도로
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=b365adfd-aa55-46c0-b1bb-a036f508a12d&big_category=A02&mid_category=A0202&big_area=32" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sns/s008.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">하슬라이트 월드
									</span>
								</span>
							</span>
						</a>
						<br>
						<span style = "position: relative; font-family: 'NanumSquare', sans-serif; font-size: 22px;">
							<a href="https://www.naver.com/" target="_self">더 보기</a>
						</span>
					</div>
					<hr>
					<div>
						<div style="font-family: 'NanumSquare', sans-serif;
						font-size: 30px;
						font-weight: bold;
						margin-bottom: -50px;">해안도로 드라이브
						</div>
						<br>
						<br>
						<br>
						<br>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=4ca61bd6-99ec-4828-bdc9-d295bec03a4d&big_category=A02&mid_category=A0203&big_area=6" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sea/a001.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">죽성성당
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=52561673-e059-499d-930d-a5698f31a7d0&big_category=A02&mid_category=A0203&big_area=32" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sea/a002.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">이사부길
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=ef65c52f-c8ac-4cd4-b616-a63cc33519de&big_category=A01&mid_category=A0101&big_area=36" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sea/a003.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">무지개빛 해안도로
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=d62eb709-d112-42c2-ae2d-b01f80b0c66a&big_category=A01&mid_category=A0101&big_area=39" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sea/a004.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">신창풍차 해안도로
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=e64f9ed6-1e97-4b32-b07a-c623a64fe817&big_category=A01&mid_category=A0101&big_area=36" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sea/a005.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">여차, 홍포간 해안도로
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=22dcd778-85a5-49eb-afcc-84a3da62943d&big_category=A01&mid_category=A0101&big_area=34" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sea/a006.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">은포리 해안도로
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=1bf455c4-facd-40cd-982e-72cf0adcf47e&big_category=A01&mid_category=A0101&big_area=35" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sea/a007.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">영덕 해안도로
									</span>
								</span>
							</span>
						</a>
						<a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=053bd544-5ae6-4036-8310-6457c88e4a15&big_category=A01&mid_category=A0101&big_area=35" target="-self">
							<span style = "
								border-radius: 100%;
								display: inline-block;
								margin: 0 0 2em 0;
								padding: 0.5em;
								border: solid 1px rgba(255, 255, 255, 0.25);
								background-color: rgba(255, 255, 255, 0.075);
								margin-right: 15px;">
								<span style ="
									background-image: url(images/sea/a008.jpg);
									border-radius: 100%;
									display: block;
									width: 12em;
									height:12em;">
									<span style = "position: relative; top: 90px; font-family: 'NanumSquare', sans-serif;
										font-size: 18px;
										font-weight: bold;">울진 해안도로
									</span>
								</span>
							</span>
						</a>
						<br>
						<span style = "position: relative; font-family: 'NanumSquare', sans-serif; font-size: 22px;">
							<a href="https://www.naver.com/" target="_self">더 보기</a>
						</span>
					</div>
					<hr>
					<div style="font-family: 'NanumSquare', sans-serif;
						font-size: 30px;
						font-weight: bold;
						margin-bottom: -50px;">사용자 후기
						</div>
				</header>
				<br>
				<br>
				<!-- Main -->
					<section id="main">
	
						<!-- Thumbnails -->
                        <section class="thumbnails">
								<div>
									<a href="images/thumbs/조성후.jpg">
										<img src="images/thumbs/조성후.jpg"  alt="" />
										<h3 style="color:black;">
											천사가 되었습니다. 통영 동피랑 벽화마을에서
											예쁜 사진 찍으세요!!
										</h3>
										<p></p>
										<h3 style = "color: royalblue;
													line-height: 18px">#통영#동피랑#벽화마을#포토존#여행#당일치기#천사#맑음</h3>
									</a>
									<a href="images/thumbs/강찬.jpg">
										<img src="images/thumbs/강찬.jpg" alt="" />
										<h3 style="color:black;">
											포토존으로 유명한 카페에서 수줍게 사진 한 컷
											찍고왔습니다.
										</h3>
										<p></p>
										<h3 style = "color: royalblue;
													line-height: 18px">#부산#동구#카페투어#포토존#브라운핸즈#Brownhands#맑음</h3>
									</a>
								</div>
								<div>
									<a href="images/thumbs/정현수.jpg">
										<img src="images/thumbs/정현수.jpg" alt="" />
										<h3 style="color:black;">
											통영 동피랑에서 좋은 사람들과 한 컷
											아주 좋았습니다.			
										</h3>
										<p></p>
										<h3 style = "color: royalblue;
													line-height: 18px">#통영#동피랑#벽화마을#포토존#친구들#여행#1박2일#중앙시장#심가네해물짬뽕#맑음</h3>
									</a>
									<a href="images/thumbs/윤민영.jpg">
										<img src="images/thumbs/윤민영.jpg"alt="" />
										<h3 style="color:black;">
											통영에서 해안도로를 따라서 친구들과 전동킥보드 타고 왔어요!! 
											이 날 날씨도 좋고 모든게 최고였습니다.
										</h3>
										<h3 style = "color: royalblue;
													line-height: 18px">#통영#마리나호텔#수륙해수욕장#해안도로#전동킥보드#2박3일#국밥#맑음</h3>
									</a>
									<a href="images/thumbs/하진기.jpg">
										<img src="images/thumbs/하진기.jpg" alt="" />
										<h3 style="color:black;">
											날이 좋아서<br>
											날이 좋지 않아서<br>
											날이 적당해서<br>
											클라우드힐 카페에서<br>
											아이스 아메리카노 한 잔<br>
										</h3>
										<h3 style = "color: royalblue;
													line-height: 18px">#통영#수륙해수욕장#해안도로#클라우드힐#카페#예쁜카페#아이스아메리카노#근엄#진지#당일치기#풍경#맑음</h3>
									</a>
								</div>
								<div>
									<a href="images/thumbs/임수민.jpg">
										<img src="images/thumbs/임수민.jpg" alt="" />
										<h3 style="color:black;">
											거제 매미성에서 매엠메엠~!~!<br>
										</h3>
										<h3 style = "color: royalblue;
													line-height: 18px">#거제#매미성#가족여행#1박2일#여신#포토존#30분#Wait#신나#노을#일몰</h3>
									</a>
									<a href="images/thumbs/302호.jpg">
										<img src="images/thumbs/302호.jpg" alt="" />
										<h3 style="color:black;">
											국제음악당에서 단체사진<br>
										</h3>
										<h3 style = "color: royalblue;
													line-height: 18px">#통영#국제음악당#팀원들과#출장#1박2일#중앙시장#횟집#서피랑#동피랑#흐림</h3>
									</a>
								</div>
							</section>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<p style="opacity:0.1;">&copy; Untitled. All rights reserved. Design: <a href="http://templated.co">TEMPLATED</a>. Demo Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min_1.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main_1.js"></script>

	</body>
</html>