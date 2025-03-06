<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>吳承祐簡介</title>
	<style type ="text/css">
	  *{font-family:"標楷體;margin-left:auto;margin-right:auto;"}
	   h1{color:blue;font-size:60px;}
	   h2{color:#33ff33;font-size:40px:}
	</style>
	<script
		function change1(){
			document.getElementByld("pic").src="mountain.jpg";
			document.getElementByld("h2text").innerText="靜宜資管";
		}

		function change2(){
			document.getElementByld("pic").src="cliff.jpg";
			document.getElementByld("h2text").innerText="WU CHENG YU";
		}
	</script>

</head>
<body> 
	<table width="70%">
		<tr>
			<td><img src="cliff.jpg" width="110%"id="pic"onmouseover="change1()"onmouseover="change2()"></img>
			</td>
			
			<td>
				<td>
				<h1>吳承祐</h1>
				<h2 id ="h2text">WU CHENG-YU</h2>
			</td>
			
		</tr>
	</table>
	
    <table border="1">
    	<tr>
    		<td>
    			網頁:<a href="https://www.pu.edu.tw/">https://www.pu.edu.tw/</a><br>
    			IG:<a href="https://www.instagram.com/andywu_1207/"https://www.instagram.com/andywu_1207/</a><br>
	    		GMAIL:<a href="mailto:andy43034303@gmail.com">andy43034303@gmail.com</a><br>
	    	</td>
    	</tr>
    </table>
   
   		
   	</td>
	
	<td>
		大象席地而坐電影配樂<br>
		<audio controls>
		<source src="elephant.mp3" type="audio/mP3"></audio><br>
	</td>

    <td>
    	MV<br>
 		<iframe src="https://www.youtube.com/embed/bvlOFh3ZdEg" allowfullscreen></iframe>
 	</td>
 </tr>
</table>
<?php exho date("Y-m-d")?>
</body>
</html>
