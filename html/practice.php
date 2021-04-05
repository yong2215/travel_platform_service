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
            }
            input[type=checkbox] { display:none; }

            input[type=checkbox] + label { 
                display: inline-block; 
                cursor: pointer; 
                line-height: 22px; 
                padding-left: 22px; 
                background: url('/img/check_off.png') left/22px no-repeat; 
            }

            input[type=checkbox]:checked + label { background-image: url('/img/check_on.png'); }

		</style>

	</head>
    <body>
        <div style = 'background-color : black;'>
            <input type="checkbox" id="box1"><label for="box1"></label>
            <input type="checkbox" id="box2"><label for="box2">동의합니다.</label>
            <input type="checkbox" id="box3"><label for="box3">동의합니다.</label>
        </div>
    </body>

</html>